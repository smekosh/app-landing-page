<?php

# live-video.php

?>

<div id="yt-embed-container" class="yt-embed">
	<div class="yt-overlay"></div>
	<div class="yt-placeholder" style="background-image: url(<?php echo $youtube->snippet->thumbnails->high->url ?>;"></div>
</div>

<script>
// bandwidth saver: click to replace youtube thumbnail with video iframe
(function() {
	var player = document.getElementById('yt-embed-container');

	function has_iframe() {
		var e = document.querySelector('#yt-embed-container iframe');
		if( e === null ) {
			return( false );
		}
		return( true );
	}

	player.addEventListener("click", function() {
		if( has_iframe() !== false ) return;
		console.info( "creating player");
		player.innerHTML =
			"<iframe src='https://www.youtube.com/embed/<?php echo $youtube->id->videoId ?>' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>"
		;
	});
})();
</script>

<div class="wrapper yt-meta">
	<h1><?php echo $youtube->snippet->title ?></h1>

	<p><?php echo $youtube->snippet->description ?></p>

	<div><a href="https://www.youtube.com/watch?v=<?php echo $youtube->id->videoId ?>" class="yt-button"><?php echo $loc['youtube_button_text']; ?></a></div>
</div>
