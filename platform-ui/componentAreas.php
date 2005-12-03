<script language="javascript">
<!--
function viewBugsWithSummary(desc) {
	window.location = "https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=anywordssubstr&short_desc=" + encodeURI(desc) + "&product=Platform&component=UI&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=";
}

function viewBugsByUser(email) {
	window.location = "https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=UI&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=" + email + "&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=";
}
//-->
<!-- 'directories=0,height=480,location=0,resizable=1,scrollbars=1,toolbar=0,width=515' -->
</script>
<style type="text/css">
<!--
td.component {
	vertical-align: top; 
	text-align:right;
}
a.bugs {
	style="font-size: smaller";
}
div.owner {
	text-indent: 30px;
}
-->
</style>

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle = "Platform UI Component Areas";
	$pageKeywords	= "platform ui component area";
	$pageAuthor = "Platform UI Monkey";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# make this a class so that we can use it for variable substitution in the following HTML
	class UITeam {
		private $members = array(
		"Boris" => "Boris_Bokowski@ca.ibm.com", 
		"Nick" => "nick_edgar@ca.ibm.com", 
		"Kim" => "kim.horne@eclipse.org",
		"Karice" => "Karice_McIntyre@ca.ibm.com",
		"Eric" => "emoffatt@ca.ibm.com",
		"Doug" => "dpollock@acm.org",
		"Michael" => "mdelder@us.ibm.com",
		"Joe" => "Winchest@uk.ibm.com",
		"Tod" => "Tod_Creasey@ca.ibm.com",
		"Susan" => "susan_franklin@us.ibm.com",
		"MvM" => "mvm@ca.ibm.com",
		"Paul" => "pwebster@ca.ibm.com"
	);
		function userLink($user) {
			$result = <<<EOHTML
			<div class="owner">$user <a class="bugs" href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=Platform&component=UI&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=$email&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">[bugs]</a></div>
EOHTML;
			return result;
		}
		
		function componentLink($labelAndSearchString) {
			return componentLink($labelAndSearchString, $labelAndSearchString);
		}
		
		function componentLink($label, $searchString) {
			$result = <<<EOHTML
			<a href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=anywordssubstr&short_desc=$searchString&product=Platform&component=UI&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">$label</a>
EOHTML;
		}
		
		function component($label, $searchString, $owners, $desc) {
			$result = "<tr><td class=\"component\">{$this->componentLink($label, $searchString)}</td><td>$desc";
			foreach($owners as $owner) {
				$result = $result . userLink($owner);
			}
			$result = $result . "</td></tr>";
			
EOHTML;
			return $result;
		}
		
		function component($label, $owners, $desc) {
			return component($label, $label, $owners, $desc);
		}
	}
		
	$team = new UITeam();	
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		Platform UI is divided into the following functional areas.
The tags in square brackets are used in bug report subject headings to indicate the affected area.
The current owner of each functional area is indicated in parentheses.  The queries here may not 
represent all bugs in a given component area if there are any that havnt been properly tagged.
<p> Last updated: December 1, 2005
<p>
<table border="1">
<tr>
<td><h3>Component</h3></td>
<td><h3>Description</h3></td>
</tr> 
{$team->component("[About]", array("Boris"), "About dialog and System Summary Editor")}
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[About]')">About</a>]</td><td>About dialog and System Summary Editor<div class="owner">Boris <a class="bugs"  href="javascript:viewBugsByUser('Boris_Bokowski@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[ActionSets]')">ActionSets</a>]</td><td>Action sets <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[ActivityMgmt]')">ActivityMgmt</a>]</td><td>Support for activity grouping of functionality (AKA: Capabilities) <div class="owner">Kim <a class="bugs"  href="javascript:viewBugsByUser('kim.horne@eclipse.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[BiDi]')">BiDi</a>]</td><td>Bidirectional support.<div class="owner">Karice <a class="bugs"  href="javascript:viewBugsByUser('Karice_McIntyre@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[CellEditors]')">CellEditors</a>]</td><td>Cell editors in Tasks view, Properties view or other views <div class="owner">Eric <a class="bugs"  href="javascript:viewBugsByUser('emoffatt@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Commands]')">Commands</a>]</td><td>Command support (added in 3.0)
	<ul>
		<li><em>handlers</em>.  Anything dealing with handlers and handler submissions.</li>
		<li><em>instrumentation</em>.  Instrumenting the command architecture for gathering user information.</li>
		<li><em>macros</em>.  Sequential list of commands.  Grouping commands.</li>
		<li><em>parameters</em>.  The ability to pass parameters to commands.  This is generally requested so that dyanamic commands can be defined (e.g., launch configurations).</li>
		<li><em>performance</em>.  The performance of the key binding architecture, or its registry.</li>
		<li><em>request</em>.  A request for a new command or a new key binding (or both).</li>
	</ul>
	<div class="owner">Doug <a class="bugs"  href="javascript:viewBugsByUser('dpollock@acm.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[CommonNavigator]')"">CommonNavigator</a>]</td><td>The generic navigator API (org.eclipse.ui.navigator). <div class="owner">Michael <a class="bugs"  href="javascript:viewBugsByUser('mdelder@us.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Contexts]')"">Contexts</a>]</td><td>Support for context grouping of functionality <div class="owner">Doug <a class="bugs"  href="javascript:viewBugsByUser('dpollock@acm.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Contributions]')">Contributions</a>]</td><td>ContributionManager, ContributionItem hierarchy, org.eclipse.jface.action, action contributions from plugin.xml
	<ul>
		<li><em>adapters</em>.  Anything to do with the adapter mechanism and its friends.</li>
		<li><em>configurability</em>.  The end user's ability to manipulate contributions.</li>
		<li><em>duplication</em>.  Places where code needs to be duplicated needlessly.</li>
		<li><em>dynamic</em>.  Anything dealing with dynamic menus</li>
		<li><em>dynamic plug-ins</em>.  The ability to respond to plug-ins appearing or disappearing.</li>
		<li><em>errors</em>.  Error handling in the contributions framework.</li>
		<li><em>interactions</em>.  How contributions from different plug-ins interact with each other.  How different contributions interact with each other in the same plug-in.  Also, things which the workbench can do, but plug-ins can't.</li>
		<li><em>ordering</em>.  Controlling the order of items in the menu -- in Java or XML.</li>
		<li><em>updating</em>.  Behaviour of the menu and toolbar management code, in response to changes in its components.  This primarily deals with visibility and whether items are enabled.  It also covers selection and optimization of selection changes.</li>
		<li><em>visible/enabled</em>.  The control of visibility and the enabled state through XML.</li>
		<li><em>widgets</em>.  Controlling the type of widget used to display a contribution.  This only includes controlling widget behaviour and state (other than visible and enabled).</li>
	</ul>
	<div class="owner">Doug <a class="bugs"  href="javascript:viewBugsByUser('dpollock@acm.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Coolbar]')">Coolbar</a>]</td><td>Coolbar support (including layout within coolbar) <div class="owner">Doug <a class="bugs"  href="javascript:viewBugsByUser('dpollock@acm.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[DataBinding] [DataBindings]')">DataBinding</a>]</td><td>JFace Data Binding <div class="owner">Joe <a class="bugs"  href="javascript:viewBugsByUser('Winchest@uk.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Decorators]')">Decorators</a>]</td><td>Decorators mechanism and Label Decorations preference page <div class="owner">Tod <a class="bugs"  href="javascript:viewBugsByUser('tod_creasey@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[DetachedView] [DetachedViews]')">DetachedView</a>]</td><td>Views and editors in separate windows <div class="owner">Eric <a class="bugs"  href="javascript:viewBugsByUser('emoffat@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Dialogs]')">Dialogs</a>]</td><td>JFace dialogs <div class="owner">Susan <a class="bugs"  href="javascript:viewBugsByUser('susan_franklin@us.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[DND]')">DND</a>]</td><td>Drag and Drop. Does not include dragging views and editors. <div class="owner">Eric <a class="bugs"  href="javascript:viewBugsByUser('emoffat@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[DyanmicUI]')">DynamicUI</a>]</td><td>The ability to add/remove plug-ins from a running Eclipse<br> <div class="owner">Kim <a class="bugs"  href="javascript:viewBugsByUser('kim.horne@eclipse.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[EditorMgmt]')">EditorMgmt</a>]</td><td>General editor management, not text editor specific
	<ul>
		<li><em>associations</em>.  The file associations mechanism: behaviour, preferences and functionality.</li>
		<li><em>drop-down</em>.  The editor drop-down: look, feel, bugs, etc.</li>
		<li><em>history</em>.  The navigation history mechanism.</li>
		<li><em>tabs</em>.  The tabbed editor user experience, and bugs related to editor tabs.</li>
	</ul>
	<div class="owner">Doug <a class="bugs"  href="javascript:viewBugsByUser('dpollock@acm.org')">[bugs]</a>, MvM <a class="bugs"  href="javascript:viewBugsByUser('mvm@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[ErrorHandling]')">ErrorHandling</a>]</td><td>OutOfMemory, NPE etc. Exceptions that are not exepected but need to be handled to make it robust <div class="owner">Kim <a class="bugs"  href="javascript:viewBugsByUser('kim@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Examples]')">Examples</a>]</td><td>the 3 workbench examples (multipageeditor, propertysheet, readmetool) but not javaeditor (owned by platform-text component) <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[FastView]')">FastView</a>]</td><td>issues related to fast views <div class="owner">Eric <a class="bugs"  href="javascript:viewBugsByUser('emoffat@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Features]')">Features</a>]</td><td>UI related to features, other than [About], e.g. product branding, default perspective, etc. <div class="owner">Kim <a class="bugs"  href="javascript:viewBugsByUser('kim.horne@eclipse.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[GlobalActions]')">GlobalActions</a>]</td><td>actions created in workbench action builder that are not directly related to other components <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Graphics]')">Graphics</a>]</td><td>Any graphics that UI has control over. <div class="owner">MvM <a class="bugs"  href="javascript:viewBugsByUser('mvm@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Help]')">Help</a>]</td><td>F1 help; missing or problems with content <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[IDE]')">IDE</a>]</td><td>Issues related to the IDE as an app (as opposed to RCP) <div class="owner">MvM <a class="bugs"  href="javascript:viewBugsByUser('mvm@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Intro] [Welcome]')">Intro</a>]</td><td>Intro part management and legacy welcome page support<div class="owner">Kim <a class="bugs"  href="javascript:viewBugsByUser('kim.horne@eclipse.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Import/Export]')">Import/Export</a>]</td><td>Import/Export wizards <div class="owner">Karice <a class="bugs"  href="javascript:viewBugsByUser('Karice_McIntyre@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[JFace]')">JFace</a>]</td><td>parts of JFace not covered by [Dialogs], [Preferences], [Viewers] and [Wizards] <div class="owner">Susan <a class="bugs"  href="javascript:viewBugsByUser('susan_franklin@us.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[KeyBindings]')">KeyBindings</a>]</td><td>Key bindings engine and preferences; requests to change key bindings, or keys not working 
	<ul>
		<li><em>assist</em>.  The key binding assist dialog.</li>
		<li><em>doc</em>.  Documentation, articles or notes about best practices.  Also, changing code to conform to best practices.</li>
		<li><em>errors</em>.  Error handling.</li>
		<li><em>interactions</em>.  Interactions between the key binding architecture and native facilities (e.g., mnemonics).  Also, the order in which events arrive.</li>
		<li><em>misc</em>  Anything does not fit in other categories.</li>
		<li><em>out-of-order</em>.  Anything dealing with the two special keys: ESC and DEL.</li>
		<li><em>performance</em>.  The performance of the key binding architecture, or its registry.</li>
		<li><em>preference page</em>.  The keys preference page.</li>
		<li><em>registry</em>.  The registry, its syntax, and backward compatibility.</li>
		<li><em>request</em>.  A request for a new command or a new key binding (or both).</li>
	</ul>
	<div class="owner">Doug <a class="bugs"  href="javascript:viewBugsByUser('dpollock@acm.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[LinkedResources]')">LinkedResources</a>]</td><td>Handling of linked resources in Navigator and New File/Folder wizards <div class="owner">Boris <a class="bugs"  href="javascript:viewBugsByUser('Boris_Bokowski@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Markers] [Bookmarks] [Tasks] [Problems]')">Markers</a>]</td><td>Issues related to markers, including tasks, problems, bookmarks, etc. e.g. bugs related to MarkerImageProvider, MarkerHelp, MarkerResolutions <div class="owner">Tod <a class="bugs"  href="javascript:viewBugsByUser('Tod_Creasey@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Model]')">Model</a>]</td><td>anything related to org.eclipse.ui.model classes IWorkbenchAdapter, WorkbenchLabelProvider, WorkbenchContentProvider <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[MPE]')">MPE</a>]</td><td>bugs related to Multipage editor that are not [Editor Mgmt] and not editor specific <div class="owner">Paul <a class="bugs"  href="javascript:viewBugsByUser('pwebster@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Navigator]')">Navigator</a>]</td><td>Navigator view <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[OLE]')">OLE</a>]</td><td>OLE support on Windows <div class="owner">Eric <a class="bugs"  href="javascript:viewBugsByUser('emoffatt@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[OpenModes]')">OpenModes</a>]</td><td>Single click, double click support <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Outline]')">Outline</a>]</td><td>Outline view <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[PerspectiveBar]')">PerspectiveBar</a>]</td><td>The bar used to indicate which perspectives are currently open and allow easy switching between them. <div class="owner">MvM <a class="bugs"  href="javascript:viewBugsByUser('mvm@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Perspectives]')">Perspectives</a>]</td><td>Perspective management <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Preferences]')">Preferences</a>]</td><td>preferences dialog, field editors and workbench preference pages <div class="owner">Tod <a class="bugs"  href="javascript:viewBugsByUser('tod_creasey@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[PresentationAPI] [Presentation]')">PresentationAPI</a>]</td><td>Bugs pertaining to the presentation API.<div class="owner">MvM <a class="bugs"  href="javascript:viewBugsByUser('mvm@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[R21PRES] [Presentations]')">Presentations</a>]</td><td>Code related to maintaining the Eclipse 2.1 and 3.0 look and feel. <div class="owner">MvM <a class="bugs"  href="javascript:viewBugsByUser('mvm@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Progress]')">Progress</a>]</td><td>Responsive UI work relating to Progress View and Progress dialogs <div class="owner">Tod <a class="bugs"  href="javascript:viewBugsByUser('tod_creasey@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[PropertiesDialog]')">PropertiesDialog</a>]</td><td>Properties dialog <div class="owner">Tod <a class="bugs"  href="javascript:viewBugsByUser('tod_creasey@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[PropertiesView]')">PropertiesView</a>]</td><td>Properties view <div class="owner">Eric <a class="bugs"  href="javascript:viewBugsByUser('emoffatt@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[RCP]')">RCP</a>]</td><td>Rich Client Platform issues <div class="owner">Nick <a class="bugs"  href="javascript:viewBugsByUser('nick_edgar@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Themes]')">Themes</a>]</td><td>Dealing with dialog/window fonts/colours and the theme API<div class="owner">Kim <a class="bugs"  href="javascript:viewBugsByUser('kim.horne@eclipse.org')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Undo]')">Undo</a>]</td><td>Dealing with the new undo/redo support introduced in Eclipse 3.1<div class="owner">Susan <a class="bugs"  href="javascript:viewBugsByUser('susan_franklin@us.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[ViewMgmt]')">ViewMgmt</a>]</td><td>View management <div class="owner">Boris <a class="bugs"  href="javascript:viewBugsByUser('Boris_Bokowski@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Viewers]')">Viewers</a>]</td><td>JFace viewers <div class="owner">Boris <a class="bugs"  href="javascript:viewBugsByUser('tod_creasey@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Wizards]')">Wizards</a>]</td><td>JFace wizards and workbench new item wizards (excluding import/export)<div class="owner">Karice <a class="bugs"  href="javascript:viewBugsByUser('Karice_McIntyre@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[Workbench]')">Workbench</a>]</td><td>ui.plugin, Workbench, WorkbenchWindow<div class="owner">MvM <a class="bugs"  href="javascript:viewBugsByUser('mvm@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[WorkbenchParts]')">WorkbenchParts</a>]</td><td>Bugs pertaining to part lifecycle.<div class="owner">Paul <a class="bugs"  href="javascript:viewBugsByUser('pwebster@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[WorkbenchLauncher]')">WorkbenchLauncher</a>]</td><td>Primarily, that portion of startup where the UI team decides where the workspace will be. <div class="owner">Boris <a class="bugs"  href="javascript:viewBugsByUser('Boris_Bokowski@ca.ibm.com')">[bugs]</a></div></td></tr>
<tr><td class="component">[<a href="javascript:viewBugsWithSummary('[WorkingSets]')">WorkingSets</a>]</td><td>Working sets <div class="owner">Kim <a class="bugs"  href="javascript:viewBugsByUser('kim.horne@eclipse.org')">[bugs]</a></div></td></tr>
</table>
		
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>