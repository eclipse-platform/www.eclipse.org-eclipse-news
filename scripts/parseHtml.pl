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

#!/usr/bin/perl

use strict;
use warnings;

use feature qw(say);
use File::Copy;
use HTML::TokeParser::Simple;

use constant RELEASE_DIR => $ARGV[0];

use constant NEWS_REPO => $ARGV[1];
use constant NEWS_RELEASE_DIR => NEWS_REPO."/".RELEASE_DIR;
use constant PLATFORM_NEWS =>"platform.html";
use constant PLATFORM_ISV_NEWS => "platform_isv.html";
use constant JDT_NEWS =>"jdt.html";
use constant PDE_NEWS =>"pde.html";

use constant DOC_REPO => $ARGV[2];
use constant JDT_BUNDLE =>"bundles/org.eclipse.jdt.doc.user";
use constant PLATFORM_BUNDLE =>"bundles/org.eclipse.platform.doc.user";
use constant PLATFORM_ISV_BUNDLE =>"bundles/org.eclipse.platform.doc.isv";
use constant PDE_BUNDLE => "bundles/org.eclipse.pde.doc.user";

use constant WHATSNEW_DIR => "whatsNew";
use constant PLATFORM_DOC =>"platform_whatsnew.html";
use constant PLATFORM_ISV_DOC => "platform_isv_whatsnew.html";
use constant JDT_DOC => "jdt_whatsnew.html";
use constant PDE_DOC => "pde_whatsnew.html";
use constant IMAGE_DIR => "images";

main();

sub main {
	findImagesDeleteOldAndCopyNew(PLATFORM_BUNDLE, PLATFORM_DOC);
	findImagesDeleteOldAndCopyNew(PLATFORM_ISV_BUNDLE, PLATFORM_ISV_DOC);
	findImagesDeleteOldAndCopyNew(JDT_BUNDLE, JDT_DOC);
	findImagesDeleteOldAndCopyNew(PDE_BUNDLE, PDE_DOC);
}

#
# Delete all files in the directory
#
sub deleteFilesInDir {
	my ($dir) = @_;
	say "================================================================";
	say "Deleting images in ${dir}";
	say "================================================================";
	my $errors;
	while ($_ = glob("${dir}/*")) {
		next if -d $_;
		unlink($_)
		or ++$errors, warn("Can't remove $_: $!");
	}
}

#
# Find the image files referenced in the news html document and copy them from the images folder
# in news repo to the images folder in the specific doc bundle
#
sub findImagesDeleteOldAndCopyNew {
	my ($bundle, $htmlFile, @names) = @_;
	my $whatsNewDir = DOC_REPO."/".${bundle}."/".WHATSNEW_DIR;
	
	# delete image files in dir
	deleteFilesInDir(${whatsNewDir}."/".IMAGE_DIR);
	
	# find image files from the html file
	my $fileName = "${whatsNewDir}/${htmlFile}";
	my @fileNames = getImageFileNames($fileName);
	
	# copy image files from news to to doc bundles
	copyImageFiles(NEWS_RELEASE_DIR, ${whatsNewDir}, @fileNames);
}

#
# Get names of images to be copied by parsing the html pages.
#
sub getImageFileNames {
	my ($fname) = @_;
	say "================================================================";
	say "Getting image file names in ${fname}";
	say "================================================================";
	
	my @names;
	my $data = HTML::TokeParser::Simple->new($fname);
	while ( my $token = $data->get_token ) {
    	if ( $token->is_start_tag('img') ) {
            my $name = $token->get_attr('src');
            say $name;
            push @names, $name;
        }
	}
	say @names;
	return @names;
}

#
# Copy Image files from input dir to output dir
#
sub copyImageFiles {
	my ($inputdir, $outputdir, @names) = @_;
	
	say "================================================================";
	say "Copy image files from ${inputdir} to ${outputdir}";
	say "================================================================";
	
	foreach (@names) {
		my $input_file = "$inputdir/$_";
		my $output_file = "$outputdir/$_";
		say $_;
		say $input_file;
		say $output_file;
		copy ($input_file, $output_file);
	}
}
