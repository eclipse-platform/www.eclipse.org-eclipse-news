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

#Copies only the news content from the html files (without the header and footer) in news repo to the corresponding files in doc repo.

#!/usr/bin/perl -v
use strict;
use warnings;
use File::Copy;
use feature qw(say);

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
copyNewsContentOnly("Platform", $input_file, $output_file);

#
#Copy the Platform ISV news to Platform ISV doc bundle
#
$input_file="${NEWS_REPO}/${RELEASE_DIR}/${PLATFORM_ISV_NEWS}";
$output_file="${DOC_REPO}/${PLATFORM_ISV_BUNDLE}/${WHATSNEW_DIR}/${PLATFORM_ISV_DOC}";
copyNewsContentOnly("Platform_isv", $input_file, $output_file);

#
#Copy the JDT news to JDT doc bundle
#
$input_file="${NEWS_REPO}/${RELEASE_DIR}/${JDT_NEWS}";
$output_file="${DOC_REPO}/${JDT_BUNDLE}/${WHATSNEW_DIR}/${JDT_DOC}";
copyNewsContentOnly("Jdt", $input_file, $output_file);

#
#Copy the PDE news to PDE doc bundle
#
$input_file="${NEWS_REPO}/${RELEASE_DIR}/${PDE_NEWS}";
$output_file="${DOC_REPO}/${PDE_BUNDLE}/${WHATSNEW_DIR}/${PDE_DOC}";
copyNewsContentOnly("Pde", $input_file, $output_file);

#
# Method to copy only the news content (without header and footer) from input file to output file.
#
sub copyNewsContentOnly {
    my ($string, $input, $output) = @_;
    
    say "================================================================";
    say "Copying ${string} ${input} ${output}";
    say "================================================================";
    
    open (INFILE, $input);
    open (OUTFILE, $output);
    
    my @header = ();
    my @footer = ();
    my @news = ();
    my $startCopying = 0;
    
    # Copy the header content (text from beginning to line that contains START OF N&N TABLE)
    # from output file to @header
    $startCopying = 1;
    say "Start of header";
    while (my $line=<OUTFILE>) {
        chomp $line;
        if (index ($line, 'START OF N&N TABLE') != -1) {
            $startCopying = 0;
            say "End of Header";
            last;
        }
        if ($startCopying) {
            push (@header, $line);
        }
    }
    
    # Copy the news content (text from line that contains START OF N&N TABLE to END of N&N TABLE)
    # from input file to @news
    $startCopying = 0;
    while (my $line=<INFILE>) {
        chomp $line;
        if (index ($line, 'START OF N&N TABLE') != -1) {
            $startCopying = 1;
            say "Start of news content";
        }
        elsif (index ($line, 'END OF N&N TABLE') != -1) {
            say "End of news content";
            $startCopying = 0;
            last;
        }
        push (@news, $line) if $startCopying;
    }
    
    # Copy the footer content (text from line that contains END OF N&N TABLE to end of file)
    # from outpur file to @footer
    $startCopying = 0;
    while (my $line=<OUTFILE>) {
        chomp $line;
        if (index ($line, 'END OF N&N TABLE') != -1) {
            say "start of footer";
            $startCopying = 1;
        }
        push (@footer, $line) if $startCopying;
    }
    
    # Copy header, news and footer to @newFile. @newFile contains the correct content
    # to be copied to the output file
    my @newFile = ();
    push (@newFile, @header);
    push (@newFile, @news);
    push (@newFile, @footer);
    
    close (INFILE);
    close (OUTFILE);

    # now we open the out file for writing
    open (OUTFILE, ">$output");
    my $contents=join ("\n",@newFile)."\n";
    print OUTFILE $contents;
    close (OUTFILE);
}

#
# This method is not used currently. It copies the input file to output file.
#
sub copyFile {
    my ($string, $input, $output) = @_;
    say "================================================================";
    say "Copying ${string}";
    say "================================================================";
    say $input_file;
    say $output_file;
    copy($input_file, $output_file) or die "Copy of ${string} news failed";
}