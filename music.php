<header>Music</header>
<p>
<?php
	switch ($lng) {
	case "en":
		echo "This section is dedicated to testing of HTML5 medial player ";
		break;
	default:
		echo "Tato sekce je určena pro test HTML5 přehrávače médií.";
	}
?>
</p>
<p>

	Music
	<audio controls>
		<!--<source src="./music/attero_dominatus.mp3" type="audio/mpeg">-->
		<!--<source src="./music/attero_dominatus.ogg" type="audio/ogg">-->
	</audio>

	Video
	<video controls>
		<source src="./music/hatikvah.mp4" type="video/mpeg">
	</video>

</p>
