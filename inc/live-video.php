<?php

# live-video.php

?>

<div class="yt-embed"><iframe src='https://www.youtube.com/embed/<?php echo $youtube->id->videoId ?>' frameborder='0' gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>

<div class="wrapper yt-meta">
	<h1><?php echo $youtube->snippet->title ?></h1>

	<p><?php echo $youtube->snippet->description ?></p>

	<div><a href="" class="yt-button"><?php echo $loc['youtube_button_text']; ?></a></div>
</div>
