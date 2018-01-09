<?php

# live-video.php

?>

<div id="yt-embed-container" class="yt-embed">
	<div class="yt-overlay"></div>
	<div class="yt-placeholder" style="background-image: url(<?php echo $youtube->snippet->thumbnails->high->url ?>;"></div>
</div>

<script>
// bandwidth saver: click to replace youtube thumbnail with video iframe
// placeholder click event loads iframe, loaded iframe loads YT / GTM tracking api
// player click -> load_video -> load_tracker
(function() {
	var player = document.getElementById('yt-embed-container');

	function has_placeholder() {
		var e = document.querySelector('div.yt-placeholder');
		if( e === null ) {
			return( false );
		}
		return( true );
	}

	var thatscript = document.currentScript;

	function load_tracker() {
		var gtm_s = document.createElement("script");
		gtm_s.type = "text\/javascript";
		thatscript.parentNode.insertBefore(gtm_s, thatscript);
		gtm_s.src = "https://www.youtube.com/iframe_api";
	}

	function load_video() {
		player.innerHTML = "";

		var yt_i = document.createElement("iframe");
		yt_i.frameborder = "0";
		yt_i.gesture = "media";
		yt_i.allow = "encrypted-media";
		yt_i.allowfullscreen = "";
		yt_i.onload = function() {
			load_tracker();
		}

		player.appendChild(yt_i);
		yt_i.src = "https://www.youtube.com/embed/<?php echo $youtube->id->videoId ?>?&autoplay=1";
	}

	player.addEventListener("click", function() {
		if( has_placeholder() === false ) return;

		load_video();
	});
})();
</script>

<div class="wrapper yt-meta">
	<h1><?php echo $youtube->snippet->title ?></h1>

	<p><?php echo $youtube->snippet->description ?></p>

	<div><a href="https://www.youtube.com/watch?v=<?php echo $youtube->id->videoId ?>" class="yt-button"><?php echo $loc['youtube_button_text']; ?></a></div>
</div>
