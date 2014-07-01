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

var PlatformTriageHelper = {
	init: function() {
		PlatformTriageHelper.Page.init();
	},
	
	Constants: {
		refreshInterval: 1000*60*60,
		triagedOwner: "platform-ui-triaged@eclipse.org",
		dirtyMarker: '*'
	},
	
	Page: {
		component: {},
		product: {},
		keywords: {},
		comment: {},
		assigned_to: {},
		short_desc: {},
		els: null,
		myDiv: document.createElement('div'),
		header: document.getElementById('header'),
		
		init: function() {
			PlatformTriageHelper.Page.els = document.forms[1].elements;
			for (var i = 0; i < PlatformTriageHelper.Page.els.length; i++) {
				if (PlatformTriageHelper.Page.els[i].name == "component") {
					PlatformTriageHelper.Page.component = PlatformTriageHelper.Page.els[i];
				}
				if (PlatformTriageHelper.Page.els[i].name == "product") {
					PlatformTriageHelper.Page.product = PlatformTriageHelper.Page.els[i];
				}
				if (PlatformTriageHelper.Page.els[i].name == "keywords") {
					PlatformTriageHelper.Page.keywords = PlatformTriageHelper.Page.els[i];
				}
				if (PlatformTriageHelper.Page.els[i].name == "comment") {
					PlatformTriageHelper.Page.comment = PlatformTriageHelper.Page.els[i];
				}
				if (PlatformTriageHelper.Page.els[i].name == "assigned_to") {
					PlatformTriageHelper.Page.assigned_to = PlatformTriageHelper.Page.els[i];
				}
				if (PlatformTriageHelper.Page.els[i].name == "short_desc") {
					PlatformTriageHelper.Page.short_desc = PlatformTriageHelper.Page.els[i];
				}
			}
			
			//alert("indices: " + PlatformTriageHelper.Page.component + ", " + PlatformTriageHelper.Page.keywords + ", " + PlatformTriageHelper.Page.assigned_to + ", " + PlatformTriageHelper.Page.short_desc);
			//alert("assigned to: " + PlatformTriageHelper.Page.els[PlatformTriageHelper.Page.assigned_to].value + "qa_contact: " + PlatformTriageHelper.Page.els[PlatformTriageHelper.Page.qa_contact].value);
			var addToCC = document.getElementById('addselfcc');
			if (addToCC != null) {
				addToCC.checked = false;
			}
			
			var elemChangedListener = function() {
				var b = document.getElementById('knob-reassign-cmp');
				if (b != null) {
					b.checked = true;
					b.scrollIntoView(true);
				}
			};
			
			PlatformTriageHelper.Page.product.addEventListener('change', elemChangedListener, false);			
			PlatformTriageHelper.Page.component.addEventListener('change', elemChangedListener, false);
			PlatformTriageHelper.ComponentAreas.loadData(PlatformTriageHelper.Page.buildButtons);
		},	
		buildButtons: function() {		
			var combo = PlatformTriageHelper.Page.TriageSelectCombo.create();			
			var extras =  '<input id="myUpdate" type="button" value="Apply" />';								
			var refresh = '<input type="button" value="RefreshJSON" id="refresher" /><div id="triage_desc"></div>';
			
			PlatformTriageHelper.Page.myDiv.innerHTML = '<div style="border: solid black 2px">' + combo + extras + refresh 
				+ '</div>';
			PlatformTriageHelper.Page.header.parentNode.insertBefore(PlatformTriageHelper.Page.myDiv, PlatformTriageHelper.Page.header);
			
			document.getElementById('refresher').addEventListener("click", 
				function() {PlatformTriageHelper.ComponentAreas.loadData(PlatformTriageHelper.Page.buildButtons, true)}, false);
			
			document.getElementById('triage_select').addEventListener('change', 
				PlatformTriageHelper.Page.TriageSelectCombo.onChangedListener, true);
			
			document.getElementById('myUpdate').addEventListener('click', 
				PlatformTriageHelper.Page.TriageSelectCombo.onClickListener, true);			
		},
		updateInfo: function(comp, owner, description, ccEmail) {
			var b=document.getElementById('assigned_to');
			if (b!=null) {
				b.value = PlatformTriageHelper.Constants.triagedOwner;
			}

			var s = document.getElementById('short_desc').value;
			var sd = document.getElementById('short_desc_nonedit_display');
			var d = PlatformTriageHelper.Page.short_desc;
			if (d!=null) {
				if (s.indexOf('[' + comp + ']') == -1 ){
					d.value = '[' + comp + '] ' + d.value;
					if (sd != null) {
						sd.innerHTML = d.value;
					}
				}
				d.scrollIntoView(true);
				d.focus();
			}
			PlatformTriageHelper.Page.markWindowAsDirty();
		},
		markWindowAsDirty: function() {
			var winTitle = window.document.title;
			if (winTitle.charAt(0) != PlatformTriageHelper.Constants.dirtyMarker) {
				window.document.title = PlatformTriageHelper.Constants.dirtyMarker + winTitle;
			}
		},

		TriageSelectCombo: {
			create: function() {
				var assignments = PlatformTriageHelper.ComponentAreas.container.assignments;
				var users = PlatformTriageHelper.ComponentAreas.container.users;
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
				return combo + '</select>';	
			},
			onClickListener: function() {
				var triage = document.getElementById('triage_select'); 
				var selection = triage.options[triage.selectedIndex].value; 
				var assignments = PlatformTriageHelper.ComponentAreas.container.assignments;
				var users = PlatformTriageHelper.ComponentAreas.container.users;

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
						PlatformTriageHelper.Page.updateInfo(assignments[i].component, ownerEmail, assignments[i].description, ccEmail);
					}
				}											
			},	
			onChangedListener: function() {
				var triage = document.getElementById('triage_select');
				var selection = triage.options[triage.selectedIndex].value;
				var assignments = PlatformTriageHelper.ComponentAreas.container.assignments;
				var users = PlatformTriageHelper.ComponentAreas.container.users;
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
		},
	},
	
	ComponentAreas: {
		container: null,
		onLoadDataListener: null,
		loadData: function(listener, forceCacheRefresh) {
			console.log("Getting data");			
			var cachedJsonData = forceCacheRefresh? null: PlatformTriageHelper.ComponentAreas.getDataFromCache();
			if (cachedJsonData != null) {
				PlatformTriageHelper.Console.log("Data cache is being used");
				PlatformTriageHelper.ComponentAreas.container = eval('(' + cachedJsonData + ')');
				if (listener != null) {
					listener();
				}
				return;
			}
				
			var rText = "";
			GM_xmlhttpRequest({
				method : "GET", url : "http://www.eclipse.org/eclipse/platform-ui/componentAreas.json?random" + Math.random(), headers : {
				"User-Agent" : "Platform UI Triage Helper", "Accept" : "text/plain", "Cache-Control": "public, no-cache", "pragma": "no-cache",}
				, onreadystatechange : function(details) { 
					PlatformTriageHelper.Console.log("PlatformTriageHelper.ComponentAreas.loadData readyState: " + details.readyState);
					if(details.readyState == 4) {
						if (details.status == 200) {
							PlatformTriageHelper.ComponentAreas.processResponse(details.responseText, listener);
							PlatformTriageHelper.Console.log('JSON data received');
							//setTimeout(function() {PlatformTriageHelper.ComponentAreas.loadData(listener); }, PlatformTriageHelper.Constants.refreshInterval); 
						} else {
							PlatformTriageHelper.Console.log("Error reading JSON"); 
						}
					}
			}});
		},
		getDataFromCache: function() {
			var timecomp = new Date();
			var newTime = timecomp.getTime() + '';
			var oldTime = GM_getValue('JSONDate');
			var diff = (+newTime) - (+oldTime);
			
			if (GM_getValue('JSONCache') == null || (diff > PlatformTriageHelper.Constants.refreshInterval)){
				return null;
			}
			return GM_getValue('JSONCache');
		},		
		processResponse: function(jsonResponse, listener) {
			var cacheDate = new Date();
			var mil = cacheDate.getTime();
			mil = mil +'';
			
			PlatformTriageHelper.Console.log("loading data into cache");
			
			GM_setValue('JSONDate', mil);
			GM_setValue('JSONCache', jsonResponse);
			PlatformTriageHelper.ComponentAreas.container = eval('(' + jsonResponse + ')');			
			if (listener != null) {
				listener();
			}			
		}
	},
	
	Console: {
		log: function(message) {
			if (console != null) {
				console.log(message);
			}
		}		
	}
}

document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener("load", PlatformTriageHelper.init, false);
});
