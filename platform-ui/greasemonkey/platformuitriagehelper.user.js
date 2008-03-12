// ==UserScript==
// @name           PlatformUITriageHelper
// @namespace      http://www.eclipse.org/eclipse/platform-ui/greasemonkey
// @description    Helps triaging bugs for Platform/UI
// @include        https://bugs.eclipse.org/bugs/show_bug.cgi?id=*
// ==/UserScript==
// Copyright (c) 2000, 2008 IBM Corporation and others.
// All rights reserved. This program and the accompanying materials
// are made available under the terms of the Eclipse Public License v1.0
// which accompanies this distribution, and is available at
// http://www.eclipse.org/legal/epl-v10.html
//
// Contributors:
//     IBM Corporation - initial API and implementation
var refreshInterval = 1000*60*60*24;
var els = document.forms[1].elements;
var component;
var assigned_to;
var short_desc;
var keywords;
var myDiv = document.createElement('div');
var header = document.getElementById('header');

window.addEventListener("load", function() {
	for (var i = 0; i < els.length; i++) {
		if (els[i].name == "component") component = i;
		if (els[i].name == "keywords") keywords = i;
		if (els[i].name == "assigned_to") assigned_to = i;
		if (els[i].name == "short_desc") short_desc = i;
	}
	
	//alert("indices: " + component + ", " + keywords + ", " + assigned_to + ", " + short_desc);
	var addToCC = document.getElementById('addselfcc');
	if (addToCC != null) addToCC.checked = false;
	document.forms[1].elements[component].addEventListener('change', function() {
		var b = document.getElementById('knob-reassign-cmp');
		b.checked = true;
		b.scrollIntoView(true);
	}
	, false);

	var assigned_to = document.forms[1].elements[assigned_to];
	if(assigned_to != null && assigned_to.value != "Platform-UI-Inbox@eclipse.org" && assigned_to.value != "platform-ide-inbox@eclipse.org") {
		var header = document.getElementById('header');
		var myDiv = document.createElement('div');
		var buttons = "";
		buttons += postTriageButton("P5 and forget", "P5", "---", "");
		buttons += postTriageButton("P5 Helpwanted", "P5", "---", "helpwanted");
		buttons += postTriageButton("P3 Helpwanted", "P3", "---", "helpwanted");
		buttons += postTriageButton("3.3.1", "", "3.3.1", "");
		buttons += postTriageButton("3.4", "", "3.4", "");
		buttons += postTriageButton("4.0", "", "4.0", "");
		myDiv.innerHTML = '<div style="position:absolute; left: 150px; top:10px;">' + buttons + '</div>';
		header.parentNode.insertBefore(myDiv, header);
		return;
	}

	var timecomp = new Date();
	var newTime = timecomp.getTime() + '';
	var oldTime = GM_getValue('JSONDate');
	var diff = (+newTime) - (+oldTime);
	
	
	if (!GM_getValue('JSONCache') || (diff > refreshInterval)){
		GM_log("loading data into cache");
		loadData();
	}else{
		buildButtons(GM_getValue('JSONCache'));
		GM_log("Data cache is being used");
		//setTimeout(function() {loadData(); }, refreshInterval);
		}
}
, false);


function rawButton(label, action) {
	return '<input type="button" value="' + label + '" onClick="' + action + '" />';
}
function buttonFor(comp, owner) {
	var onClick = "var b=document.getElementById('knob-reassign');";
	onClick += "var s = document.getElementById('short_desc').value;";
	onClick += "if (b!=null) {";
	onClick += "b.checked=true;";
	onClick += "b.nextSibling.nextSibling.nextSibling.value='" + owner + "';";
	onClick += "}";
	onClick += "if (s.indexOf('[" + comp + "]') == -1 ){";
	onClick += "var d = document.forms[1].elements[" + short_desc + "];";
	onClick += "if (d!=null) {";
	onClick += "d.value = '[" + comp + "] ' + d.value;";
	onClick += "d.scrollIntoView(true);";
	onClick += "d.focus();";
	onClick += "}";
	onClick += "}";
	return rawButton(comp, onClick);
}
function postTriageButton(label, priority, target, keyword) {
	var onClick = "var b=document.getElementById('knob-accept');";
	onClick += "if (b!=null) {";
	onClick += "b.checked=true;";
	onClick += "}";
	onClick += "var c=document.getElementById('target_milestone');";
	onClick += "if (c!=null) {";
	onClick += "c.value='" + target + "';";
	onClick += "c=document.getElementById('priority');";
	if (priority != "") {
		onClick += "c.value='" + priority + "';";
	}
	onClick += "}";
	onClick += "var d = document.forms[1].elements[" + keywords + "];";
	onClick += "if (d!=null) {";
	if (keyword != "") {
		onClick += "if(d.value.indexOf('" + keyword + "')==-1){";
		onClick += "if(d.value!=''){";
		onClick += "d.value = d.value + ', ';";
		onClick += "}";
		onClick += "d.value = d.value + '" + keyword + "';";
		onClick += "}";
	}
	//onClick += "d.scrollIntoView(true);";
	onClick += "d.focus();";
	onClick += "}";
	return rawButton(label, onClick);
}

function loadData() {
	GM_log("Getting data");
	var rText = "";
	GM_xmlhttpRequest( {
		method : "GET", url : "http://pookzilla.net/jason/componentAreas.json", headers : {
		"User-Agent" : "Platform UI Triage Helper", "Accept" : "text/plain", }
	, onreadystatechange : function(details) {
		if(details.readyState == 4) {
			if (details.status == 200) {
				buildButtons(details.responseText);
				GM_log('JSON data received');
				//setTimeout(function() {loadData(); }, refreshInterval); 
			} else {
				GM_log("Error reading JSON"); 
				}
			}
		}
	});
}
function buildButtons(loadedJSON) {
	var cacheDate = new Date();
	var mil = cacheDate.getTime();
	mil = mil +'';
	GM_setValue('JSONDate', mil);

	GM_setValue('JSONCache', loadedJSON);
	var container = eval('(' + loadedJSON + ')');
	var assignments = container.assignments;
	var users = container.users;
	
	var buttons = "";
	for (i = 0; i < assignments.length; i++) {
		var ownerEmail;
		for (j = 0; j < users.length; j++) {
			if (users[j].user == assignments[i].assignee) {
				ownerEmail = users[j].email;
			}
		}
		buttons += buttonFor(assignments[i].component, ownerEmail);
	}
	
	var refresh = '<input type="button" value="Refresh" id="refresher" />';
	myDiv.innerHTML = '<div style="border: solid black 2px">' + buttons + refresh + '</div>';
	header.parentNode.insertBefore(myDiv, header);
	
	var refreshButton = document.getElementById('refresher');
	refreshButton.addEventListener("click", loadData, false);
}