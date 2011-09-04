<?php

$s = $_GET["s"];
if (!$s) {
	$s = "main";
}

$lng = $_GET["l"];
if (!$lng) {
	$lng = "cs";
}
$hostname = gethostname();

?>
<!DOCTYPE html>
<html lang="en-us" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="./fav.gif">
		<title><?php echo ("$hostname "); ?>homepage</title>
		<style><!--
			#page { margin-left: auto; margin-right: auto; width: 95%; height: 100%; }
			header { background-color: #9DBFF2; font-weight: bold; }
			#main-header { text-align: center; }
			aside {
				width: 220px; position: absolute;
				color: #000000; background-color: #BFBFBF;
				text-align: center;
				}
			#content { margin-left: 256px; height: 720px; }
			footer { text-align: center; }
			a:link { color: #000000; text-decoration: none; }
			a:visited { color: #000000; text-decoration: none; }
			a:hover { font-weight: bold; }
			li { background-color: #9DBFF2; text-align: left; }
<?php echo ("#$s { font-weight: bold; text-decoration: underline; }"); ?>
			#git-rep { color: #9DBFF2; }
			#pub-rep { color: #9DBFF2; }
		--></style>
	</head>
	<body><div id="page">
		<header id="main-header">
<?php
	echo ("Homepage of $hostname");
?>
			<hr>
		</header>
		<aside>
			<nav>
				<b>Menu</b>
				<ul>
<?php
switch ($lng) {
case "en":
	echo "Sections";
	echo "<li id=\"main\"><a href=\"?s=main&l=$lng\">Main page</a></li>";
	echo "<li id=\"music\"><a href=\"?s=media&l=$lng\">Media</a></li>";
	echo "<li id=\"downloads\"><a href=\"?s=downloads&l=$lng\">Downloads</a></li>";
	echo "<li id=\"contacts\"><a href=\"?s=contacts&l=$lng\">Contacts</a></li>";
	break;
default:
	echo "Sekce";
	echo "<li id=\"main\"><a href=\"?s=main&l=$lng\">Hlavní stránka</a></li>";
	echo "<li id=\"music\"><a href=\"?s=media&l=$lng\">Media</a></li>";
	echo "<li id=\"downloads\"><a href=\"?s=downloads&l=$lng\">Ke stažení</a></li>";
	echo "<li id=\"contacts\"><a href=\"?s=contacts&l=$lng\">Kontakty</a></li>";
}
?>
				</ul>
				<ul>
<?php
switch ($lng) {
case "en":
	echo "Languages";
	echo "<li><a href=\"?s=$s&l=cs\">česky</a></li>";
	echo "<li><a href=\"?s=$s&l=en\">english</a></li>";
	break;
default:
	echo "Jazyky";
	echo "<li><a href=\"?s=$s&l=cs\">česky</a></li>";
	echo "<li><a href=\"?s=$s&l=en\">english</a></li>";
}
?>
				</ul>
			</nav>
		</aside>



		<div id="content">
			<article>

			</article>
			<section>
<?php
	switch ($s) {
	case "main":
		include("main.php");
		break;
	case "media":
		include("media.php");
		break;
	case "downloads":
		include("downloads.php");
		break;
	case "contacts":
		include("contacts.php");
		break;
	default:
		include("main.php");
	}
?>
			</section>
		</div>

		<footer>
			<hr>
			Daniel Housar - danielhousar@gmail.com |
			<?php
				echo php_uname('n');
				echo " - ";
				echo php_uname('s');
				echo " ";
				echo php_uname('r');
				echo " ";
				echo php_uname('m');
				echo " | ";
			?>
			last updated: 2011-09-03 15:24
		</footer>
	</div></body>
</html>

