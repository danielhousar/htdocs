<?php
switch ($lng) {
case "en":
	echo "<header>Contacts</header>";
	echo "<p>";
	echo "Facebook: <a href=\"http://www.facebook.com/daniel.housar\">www.facebook.com/daniel.housar</a>";
	echo "</p><p>";
	echo "e-mail: danielhousar@gmail.com";
	echo "</p><p>";
	echo "phone: (+420) 776 238 702";
	echo "</p>";
	break;
default:
	echo "<header>Kontakty</header>";
	echo "<p>";
	echo "Facebook: <a href=\"http://www.facebook.com/daniel.housar\" target=\"new\">www.facebook.com/daniel.housar</a>";
	echo "</p><p>";
	echo "e-mail: danielhousar@gmail.com";
	echo "</p><p>";
	echo "telefon: (+420) 776 238 702";
	echo "</p>";
}
?>
