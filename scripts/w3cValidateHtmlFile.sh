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

####################################################################################################
#Validate the html file passed as argument using W3 Markup Validator.
#Invoke the Markup Validator Web Service API using POST
#Documentation: https://github.com/validator/validator/wiki/Service-%C2%BB-Input-%C2%BB-POST-body
####################################################################################################

echo "================================================\n======Validating $1=====\n=============================================="
curl -H "Content-Type:application/xhtml+xml; charset=utf-8" --data-binary @"$1" "https://validator.w3.org/nu/?out=text&level=error"