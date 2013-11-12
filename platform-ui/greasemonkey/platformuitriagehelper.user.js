// ==UserScript==
// @name           PlatformUITriageHelper
// @namespace      http://www.eclipse.org/eclipse/platform-ui/greasemonkey
// @description    Helps triaging bugs for Platform/UI
// @include        https://bugs.eclipse.org/bugs/show_bug.cgi?id=*
// @grant       GM_getValue
// @grant       GM_setValue
// @grant	GM_xmlhttpRequest
// ==/UserScript==
// Copyright (c) 2000, 2013 IBM Corporation and others.
// All rights reserved. This program and the accompanying materials
// are made available under the terms of the Eclipse Public License v1.0
// which accompanies this distribution, and is available at
// http://www.eclipse.org/legal/epl-v10.html
//
// Contributors:
//     IBM Corporation - initial API and implementation
//var refreshInterval = 1000*60*60*24;
var refreshInterval = 1000*60*60;
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
var container;

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

	var timecomp = new Date();
	var newTime = timecomp.getTime() + '';
	var oldTime = GM_getValue('JSONDate');
	var diff = (+newTime) - (+oldTime);
	
	if (!GM_getValue('JSONCache') || (diff > refreshInterval)){
		console.log("loading data into cache");
		loadData();
	}else{
		buildButtons(GM_getValue('JSONCache'));
		console.log("Data cache is being used");
		//setTimeout(function() {loadData(); }, refreshInterval);
		}
}
, false);



function loadData() {
	console.log("Getting data");
	var rText = "";
	GM_xmlhttpRequest( {
		method : "GET", url : "http://www.eclipse.org/eclipse/platform-ui/componentAreas.json", headers : {
		"User-Agent" : "Platform UI Triage Helper", "Accept" : "text/plain", }
	, onreadystatechange : function(details) { 
		console.log(details.readyState);
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

function updateInfo(comp, owner, description, ccEmail) {
var b=document.getElementById('assigned_to');
if (b!=null) {
	b.value=triagedOwner;
	var q = document.forms[1].elements[qa_contact];
	q.value=owner;
}

var s = document.getElementById('short_desc').value;
var d = document.forms[1].elements[short_desc];
if (d!=null) {
	if (s.indexOf('[' + comp + ']') == -1 ){
		d.value = '[' + comp + '] ' + d.value;
	}
	d.scrollIntoView(true);
	d.focus();
}
}

function comboClick() {
var triage = document.getElementById('triage_select'); 
var selection = triage.options[triage.selectedIndex].value; 
var assignments = container.assignments;
var users = container.users;

for (i=0; i<assignments.length; i++) {
	if (selection == assignments[i].component) {
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
		updateInfo(assignments[i].component, ownerEmail, assignments[i].description, ccEmail);
	}
}

}


function comboChange() {
var triage = document.getElementById('triage_select');
var selection = triage.options[triage.selectedIndex].value;
var assignments = container.assignments;
var users = container.users;
var found = false;
var desc = document.getElementById('triage_desc');
for (i=0; i<assignments.length; i++) {
	if (selection == assignments[i].component) {
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
		desc.innerHTML = ownerEmail + ":" + assignments[i].description;
		found = true;
	}
}
if (!found) {
	desc.innerHTML = "";
}
}

function buildButtons(loadedJSON) {
	var cacheDate = new Date();
	var mil = cacheDate.getTime();
	mil = mil +'';
	GM_setValue('JSONDate', mil);

	GM_setValue('JSONCache', loadedJSON);
	container = eval('(' + loadedJSON + ')');
	var assignments = container.assignments;
	var users = container.users;
	
	var combo = "<a href='http://www.eclipse.org/eclipse/platform-ui/componentAreas.php'>Triage</a>: <select id=\"triage_select\">"
	+"<option value=\"donothing\">Do Nothing</option>";
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
		combo += "<option value=\"" + assignments[i].component + "\">" + assignments[i].component + "</option>";
		//buttons += buttonFor(assignments[i].component, ownerEmail, assignments[i].description, ccEmail);
	}
	combo += '</select>';
	var extras =  '<input id="myUpdate" type="button" value="Apply" />';


	var refresh = '<input type="button" value="RefreshJSON" id="refresher" /><div id="triage_desc"></div>';
	myDiv.innerHTML = '<div style="border: solid black 2px">' + combo + extras + refresh 
	+ '</div>';
	header.parentNode.insertBefore(myDiv, header);
	
	var refreshButton = document.getElementById('refresher');
	refreshButton.addEventListener("click", loadData, false);
	
	var triage = document.getElementById('triage_select');
	triage.addEventListener('change', comboChange, true);
	var update = document.getElementById('myUpdate');
	update.addEventListener('click', comboClick, true);
}


