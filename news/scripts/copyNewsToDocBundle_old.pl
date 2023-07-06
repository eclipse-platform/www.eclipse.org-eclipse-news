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

#Copies the full html file from new repo to the doc repo.
#Use copyNewsToDocBundle.pl, which copies only the news content from the html files without the header and footer.

#!/usr/bin/perl
use strict;
use warnings;
use File::Copy;
use feature qw(say);
use XML::Simple;

my $RELEASE_DIR=$ARGV[0];

my $NEWS_REPO=$ARGV[1];
my $PLATFORM_NEWS="platform.html";
my $PLATFORM_ISV_NEWS="platform_isv.html";
my $JDT_NEWS="jdt.html";
my $PDE_NEWS="pde.html";

my $DOC_REPO=$ARGV[2];
my $JDT_BUNDLE="bundles/org.eclipse.jdt.doc.user";
my $PLATFORM_BUNDLE="bundles/org.eclipse.platform.doc.user";
my $PLATFORM_ISV_BUNDLE="bundles/org.eclipse.platform.doc.isv";
my $PDE_BUNDLE="bundles/org.eclipse.pde.doc.user";

my $WHATSNEW_DIR="whatsNew";
my $PLATFORM_DOC="platform_whatsnew.html";
my $PLATFORM_ISV_DOC="platform_isv_whatsnew.html";
my $JDT_DOC="jdt_whatsnew.html";
my $PDE_DOC="pde_whatsnew.html";
my $IMAGE_DIR="images";

#
#Copy the Platform news to Platform doc bundle
#
my $input_file="${NEWS_REPO}/${RELEASE_DIR}/${PLATFORM_NEWS}";
my $output_file="${DOC_REPO}/${PLATFORM_BUNDLE}/${WHATSNEW_DIR}/${PLATFORM_DOC}";
copyFile("Platform", $input_file, $output_file);

#
#Copy the Platform ISV news to Platform ISV doc bundle
#
$input_file="${NEWS_REPO}/${RELEASE_DIR}/${PLATFORM_ISV_NEWS}";
$output_file="${DOC_REPO}/${PLATFORM_ISV_BUNDLE}/${WHATSNEW_DIR}/${PLATFORM_ISV_DOC}";
copyFile("Platform_isv", $input_file, $output_file);

#
#Copy the JDT news to JDT doc bundle
#
$input_file="${NEWS_REPO}/${RELEASE_DIR}/${JDT_NEWS}";
$output_file="${DOC_REPO}/${JDT_BUNDLE}/${WHATSNEW_DIR}/${JDT_DOC}";
copyFile("Jdt", $input_file, $output_file);

#
#Copy the PDE news to PDE doc bundle
#
$input_file="${NEWS_REPO}/${RELEASE_DIR}/${PDE_NEWS}";
$output_file="${DOC_REPO}/${PDE_BUNDLE}/${WHATSNEW_DIR}/${PDE_DOC}";
copyFile("Pde". $input_file, $output_file);

sub copyFile {
  	my ($string, $input, $output) = @_;
  	say "================================================================";
  	say "Copying ${string}";
  	say "================================================================";
	say $input_file;
	say $output_file;
	copy($input_file, $output_file) or die "Copy of ${string} news failed";
}
