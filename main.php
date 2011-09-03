<?php
	switch ($lng) {
	case "en":
		echo "<header>Main page</header>";
		echo "<p>";
		echo ("Welcome to my pages on");
		echo (" $hostname. ");
		echo ("These pages are dedicated to testing of the most recent web and internet technologies.");
		echo "</p><p>";
		echo "These pages use HTML5 standard, so they can be properly viewed only in the most recent web browsers like Google Chrome, Mozilla Firefox 4.0 or Internet Explorer 9.";
		echo "</p>";
		break;
	default:
		echo "<header>Hlavní stránka</header>";
		echo "<p>";
		echo "Vítejte na mých stránkách na";
		echo (" $hostname. ");
		echo "Tyto stránky jsou určeny pro testování nejnovějších technologií webu a internetu";
		echo "</p><p>";
		echo "Tyto stránky jsou napsané pomocí HTML5, tudíž se správně zobrazují jen v nejnovějších webových prohlížečích jako Google Chrome, Mozilla Firefox 4.0 nebo Internet Explorer 9.";
		echo "</p>";
	}
?>

