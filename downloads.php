<?php
switch ($lng) {
case "en":
	echo "<header> &nbsp; Downloads and repos section</header>";
	echo "<p><b>Git repositories</b> <a href=\"./git\" id=\"git-rep\" target=\"new\">[==>]</a></p>";
	echo "<p><b>Public directory</b> <a href=\"./pub/\" id=\"pub-rep\" target=\"new\">[==>]</a></p>";
	echo "<p></p>";
	break;
default:
	echo "<header> &nbsp; Sekce repozitáře - ke stažení</header>";
	echo "<p><b>Git repozitáře</b> <a href=\"./git\" id=\"git-rep\" target=\"new\">[==>]</a></p>";
	echo "<p><b>Veřejná složka</b> <a href=\"./pub/\" id=\"pub-rep\" target=\"new\">[==>]</a></p>";
	echo "<p>Git repozitáře slouží ke správě a ukládání verzí zdrojových kódů programů.</p>";
	echo "<p>Veřejná složka obsahuje soubory, které si může kdokoliv prohlížet a stahovat.</p>";
}
?>
