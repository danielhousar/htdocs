<header> &nbsp; Media</header>
<?php
	switch ($lng) {
	case "en":
		echo "<p>This section is dedicated to testing of HTML5 medial player.</p>";
		break;
	default:
		echo "<p>Tato sekce je určena pro test HTML5 přehrávače médií.</p>";
	}
?>
<p>
	Music<br>
	<audio controls>
		<!--<source src="./music/attero_dominatus.mp3" type="audio/mpeg">-->
		<!--<source src="./music/attero_dominatus.ogg" type="audio/ogg">-->
	</audio>
</p>
<p>
	Video: HaTikvah<br>
	<video controls>
		<source src="./music/hatikvah.webm" type="video/webm">
	</video><br>
	<code>format: WebM (matrjoska), video codec: vp8 (vpx), audio codec: OGG (vorbis)</code>

</p>
<?php
	switch ($lng) {
	case "en":
		echo "";
		break;
	default:
		echo "<p>Použití HTML5 přehravače je jednoduché
		a jeho možnosti pak závisejí na konkrétním prohlížeči.</p>
		<p> Pro vložení videa nebo zvukové nahrávky na stránky stačí v HTML
		použít tagy <code>&lt;video&gt;&lt;/video&gt;</code> nebo
		<code>&lt;audio&gt;&lt;/audio&gt;</code>.</p>
		<p>Konkrétní použití pak vypadá zhruba takto:
		<pre>
	&lt;video controls&gt;
		&lt;source src=\"videos/video.mp4\" type=\"video/mpeg\"&gt;
	&lt;/video&gt;
		</pre>
		</p>";
	}
?>
