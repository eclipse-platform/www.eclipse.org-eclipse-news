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
var product;
var qa_contact;
var comment;
var assigned_to;
var short_desc;
var keywords;
var myDiv = document.createElement('div');
var header = document.getElementById('header');
var triagedOwner = "platform-ui-triaged@eclipse.org";

window.addEventListener("load", function() {
	for (var i = 0; i < els.length; i++) {
		if (els[i].name == "component") component = i;
		if (els[i].name == "product") product = i;
		if (els[i].name == "qa_contact") qa_contact = i;
		if (els[i].name == "keywords") keywords = i;
		if (els[i].name == "comment") comment = i;
		if (els[i].name == "assigned_to") assigned_to = i;
		if (els[i].name == "short_desc") short_desc = i;
	}
	
	//alert("indices: " + component + ", " + keywords + ", " + assigned_to + ", " + short_desc);
	//alert("assigned to: " + els[assigned_to].value + "qa_contact: " + els[qa_contact].value);
	var addToCC = document.getElementById('addselfcc');
	if (addToCC != null) addToCC.checked = false;
	document.forms[1].elements[component].addEventListener('change', function() {
		var b = document.getElementById('knob-reassign-cmp');
		b.checked = true;
		b.scrollIntoView(true);
	}
	, false);
	document.forms[1].elements[product].addEventListener('change', function() {
		var b = document.getElementById('knob-reassign-cmp');
		b.checked = true;
		b.scrollIntoView(true);
	}
	, false);

	var assigned_to = document.forms[1].elements[assigned_to];
	var qacontact = document.forms[1].elements[qa_contact].value;
	if(assigned_to != null 
			&& assigned_to.value != "Platform-UI-Inbox@eclipse.org" 
			&& assigned_to.value != "Karice_McIntyre@ca.ibm.com" 
			&& assigned_to.value != "Tod_Creasey@ca.ibm.com" 
			&& assigned_to.value != "eclipse@pookzilla.net") {
		var header = document.getElementById('header');
		var myDiv = document.createElement('div');
		var buttons = "";
		if (assigned_to.value != triagedOwner) {
			buttons += buttonForMoveToTriaged(assigned_to.value);
		} else {
			buttons += postTriageButton("P5 triaged", "P5", "---", "", triagedOwner);
			buttons += postTriageButton("P3 triaged", "P3", "---", "", triagedOwner);
			buttons += postTriageButton("3.5 P3", "P3", "3.5", "", qacontact);
			buttons += postTriageButton("M6 P2", "P2", "3.5 M6", "", qacontact);
			buttons += postTriageButton("M7 P2", "P2", "3.5 M7", "", qacontact);
			buttons += postTriageButton("RC1 P2", "P2", "3.5 RC1", "", qacontact);
			buttons += postTriageButton("RC2 P2", "P2", "3.5 RC2", "", qacontact);
			buttons += postTriageButton("3.6", "", "3.6", "", qacontact);
			buttons += postTriageButton("4.0", "", "4.0", "", qacontact);
		}
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


function reassignText(newOwner) {
	var onClick = "var b=document.getElementById('assigned_to');";
	onClick += "if (b!=null) {";
	onClick += "b.value='" + newOwner + "';";
	return onClick;
}

function addCCText(ccEmail) {
    if (!ccEmail) {
      return "";
    }
    var result = "var ccInput=document.getElementById('newcc');";
    result += "if (ccInput!=null) {";
    result += "ccInput.value='" + ccEmail + "';";
    result += "}";
    return result;
}

function rawButton(label, action, description) {
	return '<input type="button" value="' + label + '" onClick="' + action + '" title="' + description + '" />';
}
function buttonFor(comp, owner, description, ccEmail) {
	var onClick = "var s = document.getElementById('short_desc').value;";
	onClick += reassignText(triagedOwner);
	onClick += "var q = document.forms[1].elements[" + qa_contact + "];";
	onClick += "q.value='" + owner + "';";
	onClick += "}";
	onClick += "var d = document.forms[1].elements[" + short_desc + "];";
	onClick += "if (d!=null) {";
	onClick += "if (s.indexOf('[" + comp + "]') == -1 ){";
	onClick += "d.value = '[" + comp + "] ' + d.value;";
	onClick += "}";
	onClick += addCCText(ccEmail);
	onClick += "d.scrollIntoView(true);";
	onClick += "d.focus();";
	onClick += "}";
	return rawButton(comp, onClick, owner + ": " + description);
}
function buttonForMoveToTriaged(owner) {
	var onClick = "var s = document.getElementById('short_desc').value;";
	onClick += reassignText(triagedOwner);
	onClick += "var q = document.forms[1].elements[" + qa_contact + "];";
	onClick += "q.value='" + owner + "';";
	onClick += "}";
	onClick += "var co = document.forms[1].elements[" + comment + "];";
	onClick += "if (co!=null) {";
	onClick += "co.value = 'As per http://wiki.eclipse.org/Platform_UI/Bug_Triage_Change_2009' + co.value;";
	onClick += "}";
	onClick += "var d = document.forms[1].elements[" + short_desc + "];";
	onClick += "if (d!=null) {";
	onClick += "d.scrollIntoView(true);";
	onClick += "d.focus();";
	onClick += "}";
	return rawButton("Move to Triaged", onClick, owner);
}
function postTriageButton(label, priority, target, keyword, assignee) {
	var onClick = "";
	if (priority != "") {
		onClick += "var p=document.getElementById('priority');";
		onClick += "p.value='" + priority + "';";
	}
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
	onClick += "d.scrollIntoView(true);";
	onClick += "d.focus();";
	onClick += "}";
	if (assignee != null && assignee != "") {
	        onClick += reassignText(assignee);
		onClick += "var c=document.getElementById('target_milestone');";
		onClick += "if (c!=null) {";
		onClick += "c.value='" + target + "';";
		onClick += "}";
	}
	return rawButton(label, onClick, "");
}

function loadData() {
	GM_log("Getting data");
	var rText = "";
	GM_xmlhttpRequest( {
		method : "GET", url : "http://www.eclipse.org/eclipse/platform-ui/componentAreas.json", headers : {
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
		var cc = assignments[i]["cc"];
		var ccEmail = null;
		for (j = 0; j < users.length; j++) {
			if (users[j].user == assignments[i].assignee) {
				ownerEmail = users[j].email;
			}
			if (users[j].user === cc) {
			    ccEmail = users[j].email;
			}
		}
		buttons += buttonFor(assignments[i].component, ownerEmail, assignments[i].description, ccEmail);
	}
	
	var refresh = '<input type="button" value="Refresh" id="refresher" />';
	myDiv.innerHTML = '<div style="border: solid black 2px">' + buttons + refresh + '</div>';
	header.parentNode.insertBefore(myDiv, header);
	
	var refreshButton = document.getElementById('refresher');
	refreshButton.addEventListener("click", loadData, false);
}