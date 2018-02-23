<?php

# news-feed.php

?>

<header class="wrapper-nopad">
	<h2 class="latest-news"><?php echo $loc['latest_news_heading']; ?></h2>
</header>

<div class="wrapper news-feed">

<?php foreach( $feed as $item ) { ?>

	<a href="<?php echo $item["link"] . TRACKING_PARAMETERS; ?>" class="news-item">

		<div class="news-img">
			<img src="<?php echo pangea_image($item["image"], "_w200_r1"); ?>" />
		</div>

		<div class="news-text">
			<h3><?php echo $item["title"]; ?></h3>
		</div>

	</a>

<?php } ?>

</div><!-- end .news-feed -->
