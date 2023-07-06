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
echo "release folder in repo is $repoDir"

sh "$scriptDir/w3cValidateHtmlFile.sh" "$repoDir/index.html"
sh "$scriptDir/w3cValidateHtmlFile.sh" "$repoDir/platform.html"
sh "$scriptDir/w3cValidateHtmlFile.sh" "$repoDir/platform_isv.html"
sh "$scriptDir/w3cValidateHtmlFile.sh" "$repoDir/jdt.html"
sh "$scriptDir/w3cValidateHtmlFile.sh" "$repoDir/pde.html"