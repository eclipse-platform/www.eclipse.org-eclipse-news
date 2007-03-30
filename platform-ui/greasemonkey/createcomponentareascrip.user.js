// ==UserScript==
// @name           CreateComponentAreaScript
// @namespace      http://www.eclipse.org/eclipse/platform-ui/greasemonkey
// @description    Create Component Area Script
// @include        http://dev.eclipse.org/viewcvs/index.cgi/platform-ui-home/componentAreas.html?view=co
// ==/UserScript==

// Copyright (c) 2000, 2007 IBM Corporation and others.
// All rights reserved. This program and the accompanying materials
// are made available under the terms of the Eclipse Public License v1.0
// which accompanies this distribution, and is available at
// http://www.eclipse.org/legal/epl-v10.html
//
// Contributors:
//     IBM Corporation - initial API and implementation
window.addEventListener("load", function () {
  var script = '';
  var nodes = document.evaluate(
                "//div[@class='owner']/a",
                document, null, XPathResult.ORDERED_NODE_SNAPSHOT_TYPE, null);
  for(td = null, i = 0; (td = nodes.snapshotItem(i)); i++) {
    var ownerName = td.href;
    ownerName = ownerName.substring(27, ownerName.length - 2);
    var componentName = td.parentNode.parentNode.parentNode.firstChild.nextSibling.firstChild.nextSibling.innerHTML;
//buttons += buttonFor("ActivityMgmt", "kim_horne@ca.ibm.com");
    script += '&nbsp;&nbsp;buttons +=  buttonFor("'+componentName+'","'+ownerName+'");'
    script += "<br>\n";
  }

  var scriptdiv = document.createElement("div");
  scriptdiv.innerHTML = '<div style="margin: 0 auto 0 auto; ' +
    'border-bottom: 1px solid #000000; margin-bottom: 5px; ' +
    'font-size: small; background-color: #000000; ' +
    'color: #ffffff;"><p style="margin: 2px 0 1px 0;"> ' +
    script +
    '</p></div>';
  document.body.appendChild(scriptdiv);
}, false);