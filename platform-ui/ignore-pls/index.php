<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "";
$pageKeywords	= "";
$pageAuthor		= "";

ob_start();
?>
    <div id="maincontent">
	<div id="midcolumn">

<!-- START OF PASTED IN STUFF -->

<h1>e4 Incubator Project</h1>
</p>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/projects/fragments/proposal-page-header.php");
generate_header("e4");
?>

<h1>e4 Incubator</h1>
    
<h2>Introduction</h2>
	
<p>The e4 Incubator Project is a proposed open source project under the <a href="/technology/">Eclipse Project</a>.
</p>

<p>This proposal is in the Project Proposal Phase (as defined in the <a href="/projects/dev_process/">
Eclipse Development Process document</a>) and is written to declare its intent 
and scope. This proposal is written to solicit additional participation and 
input from the Eclipse community. You are invited to comment on and/or join the 
project. Please send all feedback to the
<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.platform.e4">
http://www.eclipse.org/newsportal/thread.php?group=eclipse.platform.e4</a> newsgroup.

<h2>Background</h2>
	
During the Eclipse Project 3.4 release cycle, one of the important plan items was "Create the Eclipse 4.0 Plan". The intent of this work was to identify the most pressing issues that would impact the ongoing success of Eclipse, and come up with a plan to address them. The two issues that we identified were:
<ol>
	<li><strong>We do not have enough community participation.</strong> &mdash; This is largely because it is too difficult for new people to learn the large number of pre-existing, somewhat “baroque” Java frameworks.</li>
	<li><strong>The computing environment is changing.</strong> &mdash; We are seeing a much stronger focus on web based user-interfaces, both for business software development and (beginning) IDEs.</li>
</ol>

The purpose of the e4 Incubator project is to provide a new, open forum for the development of the technology behind the next major release of Eclipse. To address the above issues, significant exploratory work will be required. By creating a new, well-defined venue for this work, with an emphasis on community participation and with all communication via open channels, we intend to revitalize and significantly grow the community around the Eclipse Platform.

<h2>Scope</h2>

<p>The objectives of the e4 Incubator project are to:</p>
<ul>
<li>Insulate the experimental / forward-looking work being done on Eclipse 4.0 from the main development stream, so that we can maintain full API consistency for our existing consumers.</li>
<li>Define a new platform, called <strong>e4</strong>,</li> which is simpler to work with and applicable to a wider range of problem spaces.</li>
<li>Investigate, implement and eventually graduate, solutions in the areas of:
	<ul>
	<li>Simpler architecture for building plug-ins, more languages</li>
	<li>Richer, more flexible styling of Eclipse desktop applications</li>
	<li>Service-based implementation of the Eclipse application model</li>
	<li>“Zero-thought” install / provisioning</li>
	<li>Safe, composable, “mashup” framework for building large, browser-based applications</li>
	<li>Ability to use SWT in web development</li>
	</ul>
</ul>
		
	


	
		<h2>
		Description</h2>
	
	
		
		<p align="left">The prototype implementation of e4 Incubator is documented in the
		<a href="http://www.cs.ubc.ca/~e4 Incubator/presentations/e4 Incubator-eclipsecon2005.ppt">
		EclipseCon presentation</a>.&nbsp; The core e4 Incubator component monitors the 
		developer's editing and navigation activity and builds a 
		degree-of-interest model.&nbsp; It exposes the degree-of-interest API, used by the e4 Incubator UI 
		to 
		provide generic facilities for exposing interest in Eclipse workbench views and 
		editors.&nbsp; These facilities provide 
		interest-based highlighters, filters, sorters, and decorators.&nbsp; </p>
		<p align="left">Additional e4 Incubator tools extend the core model and UI facilities 
		and add tool-specific interest encoding and search 
		facilities.&nbsp; For example, the Java development support provides e4 Incubator extensions of views such as the Package Explorer, Type 
		Hierarchy and Java Editor, and drives the JDT's search.&nbsp; AOP support does the same for AJDT.&nbsp; 
		XML-specific extensions support J2EE and plug-in development.&nbsp; Task management support integrates issue tracking systems such as 
		Bugzilla.&nbsp; Future extensions include debugging support, Dynamic 
		Help integration, interest model visualization and C/C++ development 
		support.<br>
&nbsp; </p>
		
	


	
		<h2>
		Organization</h2>
	
	
		
		<p align="left"><b>Initial committers</b></p>
		<p align="left">The initial committers will focus on evolving and 
		hardening the e4 Incubator model by delivering support for 
		Java development.&nbsp; Our agile development process will 
		follow eclipse.org's standards for openness and transparency.&nbsp; Our 
		goal is to provide the 
		infrastructure and APIs needed to integrate task and degree-of-interest 
		centric UIs to any Eclipse plug-ins whose users experience information 
		overload.&nbsp;As such we will actively encourage contributions to 
		e4 Incubator.&nbsp; We also plan to help improve the Eclipse platform by 
		submitting patches and extension point suggestions.&nbsp; The initial committers are:</p>
		<ul>
			<li>
			<p align="left"><b><span style="font-weight: 400">Mik Kersten (UBC): </span></b>project lead </li>
			<li>
			<p align="left"><b><span style="font-weight: 400">Gail Murphy</span> <span style="font-weight: 400">(UBC): </span></b>project manager </li>
			<li>
			<p align="left"><b><span style="font-weight: 400">Shawn Minto</span> <span style="font-weight: 400">(UBC)</span></b>: component owner of Bugzilla integration and XML 
			support</li>
		</ul>
		<p align="left"><b>Interested parties</b><p align="left">The following 
		projects have expressed interest extending the model or tools, 
		contributing ideas, guidance and discussion. Key contacts listed.<ul>
			<li>
			<p align="left">CHISEL lab (University of Victoria): Margaret-Anne 
			Storey</li>
			<li>
			<p align="left">JDT (IBM): Philippe Mulet</li>
			<li>
			<p align="left">AspectJ/AJDT (IBM Hursley): Adrian Colyer</li>
			<li>
			<p align="left">CDT (Texas Instruments Canada): Winnie Lai</li>
			<li>
			<p align="left">Rational (IBM): Jin Li</li>
		</ul>
		<p align="left"><b>Developer community</b><p align="left">We expect to 
		extend the initial set of committers by actively supporting a developer 
		community.&nbsp; The initial community outside of UBC will 
		include 
		Margaret-Anne Storey's CHISEL lab, which is planning to extend e4 Incubator to 
		their work on software visualization.&nbsp; We have two additional 
		developers working on Bugzilla integration, and will be working with CDT 
		developers to extend support to C/C++.&nbsp; Our goal is to have the 
		initial developer community harden the core e4 Incubator APIs to the point 
		where it is easy for any other plug-in to incorporate the technology, 
		and we will encourage all active contributors to become committers.&nbsp; We will make it easy for interested parties to take an active role in the 
		project by making our planning and process transparent and remotely accessible.&nbsp;<p align="left">
		<b>User community</b><p align="left">
		e4 Incubator is a new technology that 
		promises to improve the user interface and interaction model of Eclipse.&nbsp; 
		As such, supporting and soliciting feedback from a large user community 
		of commercial developers is critical to creating a scalable model and 
		usable UIs.&nbsp; We plan on doing this by using 
		the standard eclipse.org mechanisms of supporting an open project and community of early adopters.&nbsp; In addition, we will collect user feedback in the form of remotely conducted 
		user studies.&nbsp; These will take a similar form to the one 
		reported on in the
		<a href="http://kerstens.org/mik/publications/e4 Incubator-aosd2005.pdf">AOSD 
2005 e4 Incubator paper</a>, and will involve users sending their feedback and usage 
		statistics on a weekly basis.&nbsp; This data will provide us with 
		detailed information on view usage, navigation patterns, and the 
		accuracy and predictability of the e4 Incubator model.<p align="left">Since 
		the EclipseCon presentation over 75 people have signed up for the 
		summer user study.&nbsp; Those individuals will form our initial user community. &nbsp;With 
		the input of the study we plan on tuning the e4 Incubator model and UIs, 
		and subsequently growing our user and developer communities.&nbsp; For information on 
		the user user study please refer to the
		<a href="http://www.cs.ubc.ca/~e4 Incubator/">e4 Incubator page</a>.<br>
&nbsp; 
	


	
		<h2>
		Tentative Plan</h2>
	
	
		
		<p>2004-08 v0.1: internal release for IBM Toronto 
		user study<br>
		2005-02 v0.2: internal release for EclipseCon presentation<br>
		2005-04 v0.3: internal bootstrap release<br>
		2005-06 v0.4: public release for user study 
	


<p><b><span style="font-weight: 400; font-style:italic">&quot;e4 Incubator&quot; is:</span></b><i><br>
a) An aluminized film used to avoid blindness when staring at a solar eclipse<br>
b) A user interface and interaction &#8216;skin&#8217; used to avoid information blindness 
when staring at Eclipse</i></p>

<!-- END OF PASTED IN STUFF -->

</div>
</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
