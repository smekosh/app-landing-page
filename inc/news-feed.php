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
			<img src="<?php echo pangea_image($item["image"], "_w115_r1"); ?>"
			  srcset="<?php echo pangea_image($item["image"], "_w115_r1"); ?> 115w,
			          <?php echo pangea_image($item["image"], "_w150_r1"); ?> 150w,
			          <?php echo pangea_image($item["image"], "_w200_r1"); ?> 200w,
			          <?php echo pangea_image($item["image"], "_w250_r1"); ?> 250w,
			          <?php echo pangea_image($item["image"], "_w300_r1"); ?> 300w,
			          <?php echo pangea_image($item["image"], "_w350_r1"); ?> 350w"
			   sizes="(min-width:750px) 160px, 35vw"
			     alt="" />
		</div>

		<div class="news-text">
			<h3><?php echo $item["title"]; ?></h3>
		</div>

	</a>

<?php } ?>
	
	<div style="clear:both;"></div>

</div><!-- end .news-feed -->
