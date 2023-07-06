#******************************************************************************
# Copyright (c) 2019 IBM Corporation and others.
#
# This program and the accompanying materials
# are made available under the terms of the Eclipse Public License 2.0
# which accompanies this distribution, and is available at
# https://www.eclipse.org/legal/epl-2.0/
#
# SPDX-License-Identifier: EPL-2.0
#
# Contributors:
#     IBM Corporation - initial API and implementation
#******************************************************************************

#!/bin/sh

#Call the w3c html validator script for the N&N html files

scriptDir="`pwd`"
echo "script directory is $scriptDir"

repoDir=$1
echo "repo directory is $repoDir"

sh "$scriptDir/w3cValidateHtmlFile.sh" "$repoDir/bundles/org.eclipse.jdt.doc.user/whatsNew/jdt_whatsnew.html"
sh "$scriptDir/w3cValidateHtmlFile.sh" "$repoDir/bundles/org.eclipse.pde.doc.user/whatsNew/pde_whatsnew.html"
sh "$scriptDir/w3cValidateHtmlFile.sh" "$repoDir/bundles/org.eclipse.platform.doc.isv/whatsNew/platform_isv_whatsnew.html"
sh "$scriptDir/w3cValidateHtmlFile.sh" "$repoDir/bundles/org.eclipse.platform.doc.user/whatsNew/platform_whatsnew.html"
