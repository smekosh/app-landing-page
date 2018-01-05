<?php

# news-feed.php

?>

<header class="wrapper-nopad">
	<h2 class="latest-news"><?php echo $loc['latest_news_heading']; ?></h2>
</header>

<div class="wrapper news-feed">

<?php foreach( $feed as $item ) { ?>

	<a href="<?php echo $item["link"] ?>" class="news-item">

		<div class="news-img">
			<img src="<?php echo $item["image"] ?>" />
		</div>

		<div class="news-text">
			<h3><?php echo $item["title"] ?></h3>
		</div>

	</a>

<?php } ?>

</div><!-- end .news-feed -->
