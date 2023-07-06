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

if [ "x$1" == "x"  ] || [ "x$2" == "x"  ]; then
 echo "Usage error: Pass release version and simrel release name as arguments"
 echo "For example: ./applyTemplate.sh 4.13 2019-09"
 exit 1
fi

cd ..
echo "In parent directory of scripts `pwd`"

echo "Checking if directory $1 already exists"
if [ -d $1 ] 
then
   echo "Error: Directory $1 already exists. Exiting..."
   exit 1
fi

echo "Applying template for $1"
cp -R '4.x-template' $1

echo "Created directory and entering $1"
cd $1

echo "Replacing 4.x with $1 to files in `pwd`"

sed -i'.bak' -e "s/4\.x/$1/g" index.html
sed -i'.bak' -e "s/4\.x/$1/g" jdt.html
sed -i'.bak' -e "s/4\.x/$1/g" pde.html
sed -i'.bak' -e "s/4\.x/$1/g" platform.html
sed -i'.bak' -e "s/4\.x/$1/g" platform_isv.html

echo "Replacing YYYY-MM with $2 in index.html"
sed -i'.bak' -e "s/YYYY-MM/$2/g" index.html

echo "Deleting backup files"
rm *.html.bak
