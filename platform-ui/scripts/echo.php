<?php

if ($_POST) {
	print_r($_POST);
}
else {
?>

<form name="editor" method="post" action="http://www.eclipse.org/eclipse/platform-ui/scripts/echo.php">
<input type="hidden" name="parent_pid" value=""/>
<input type="hidden" name="format" value="text"/>
<textarea name="code2"></textarea>
<input type="text" name="poster" value="" />
<input type="submit" name="paste" value="Send"/>
<input type="checkbox" name="remember" value="1"  />
<input type="hidden" name="expiry" value="m" />
<input type="text" name="email" value="" />

</form>

<?
}

?>