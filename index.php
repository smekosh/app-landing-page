<?php

require_once( 'config.php' );
require_once( 'data.php' );

?><!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W72N2D');</script>
<!-- End Google Tag Manager -->

	<title><?php echo $loc['meta_title']; ?></title>

	<link type="image/x-icon" rel="icon" href="<?php echo BASE_URL; ?>/img/favicon.ico" />
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/img/favicon.ico" />

	<link rel="canonical" href="<?php echo BASE_URL; ?>/" />
	<meta name="standout" content="<?php echo BASE_URL; ?>/" />
	<meta name="description" itemprop="description" content="" />
	<?php /* <link rel="image_src" href="" />
	<meta name="keywords" content="" />
	<meta name="news_keywords" content="" /> */ ?>

	<meta property="og:site_name" content="<?php echo $loc['meta_og_site_name']; ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="<?php echo BASE_URL; ?>/" />
	<meta property="og:title" content="<?php echo $loc['meta_title']; ?>" />
	<?php /* <meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="1275" />
	<meta property="og:image:height" content="600" /> */ ?>

	<meta name="twitter:site" value="@<?php echo $loc['meta_twitter_creator']; ?>" />
	<meta name="twitter:creator" content="@<?php echo $loc['meta_twitter_creator']; ?>" />
	<meta name="twitter:card" value="summary" />
	<meta name="twitter:url" content="<?php echo BASE_URL; ?>/" />
	<meta name="twitter:title" content="<?php echo $loc['meta_title']; ?>" />
	<?php /* <meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" /> */ ?>

	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/css/base.css?v=20180109-1358" />

	<!-- documentation at https://polyfill.io/v2/docs/ -->
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>

	<meta name="DISPLAYDATE" content="<?php echo date('F j, Y'); ?>" />
	<meta itemprop="dateModified" content="<?php echo date('Y-m-d'); ?>" />
	<meta itemprop="datePublished" content="<?php echo date('Y-m-d'); ?>" />
	
	<meta name="robots" content="noindex, follow" />
	
	<?php if (file_exists('inc/optimizer.php')) { include('inc/optimizer.php'); } ?>

</head>

<body class="<?php echo LANG; ?> <?php echo DIR; ?>" dir="<?php echo DIR; ?>">

<?php if( file_exists("metrics.php") ) { include("metrics.php"); } ?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W72N2D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header id="site-header">
		<div class="wrapper header-wrapper">
			<div class="logo"><a href="<?php echo MAINSITE_URL . TRACKING_PARAMETERS; ?>"><img src="<?php echo BASE_URL; ?>/img/voa-logo_87x36_2x.png" width="87" height="36" border="0" alt="VOA" /></a></div>
			<ul class="social">
				<?php if ( $loc['facebook_follow_url'] != '' ) { ?><li><a href="<?php echo $loc['facebook_follow_url']; ?>" title="<?php echo $loc['facebook_follow_text']; ?>"><img src="<?php echo BASE_URL; ?>/img/fa-facebook_72_12_ffffff_3b5998.png" width="36" height="36" border="0" alt="" /><span class="sr-only"><?php echo $loc['facebook_follow_text']; ?></span></a></li><?php } ?>
				<?php if ( $loc['instagram_follow_url'] != '' ) { ?><li><a href="<?php echo $loc['instagram_follow_url']; ?>" title="<?php echo $loc['instagram_follow_text']; ?>"><img src="<?php echo BASE_URL; ?>/img/fa-instagram_72_12_ffffff_d93175.png" width="36" height="36" border="0" alt="" /><span class="sr-only"><?php echo $loc['instagram_follow_text']; ?></span></a></li><?php } ?>
				<?php if ( $loc['soundcloud_follow_url'] != '' ) { ?><li><a href="<?php echo $loc['soundcloud_follow_url']; ?>" title="<?php echo $loc['soundcloud_follow_text']; ?>"><img src="<?php echo BASE_URL; ?>/img/fa-soundcloud_72_12_ffffff_ff5500.png" width="36" height="36" border="0" alt="" /><span class="sr-only"><?php echo $loc['soundcloud_follow_text']; ?></span></a></li><?php } ?>
				<?php if ( $loc['twitter_follow_url'] != '' ) { ?><li><a href="<?php echo $loc['twitter_follow_url']; ?>" title="<?php echo $loc['twitter_follow_text']; ?>"><img src="<?php echo BASE_URL; ?>/img/fa-twitter_72_12_ffffff_55acee.png" width="36" height="36" border="0" alt="" /><span class="sr-only"><?php echo $loc['twitter_follow_text']; ?></span></a></li><?php } ?>
				<?php if ( $loc['youtube_follow_url'] != '' ) { ?><li><a href="<?php echo $loc['youtube_follow_url']; ?>" title="<?php echo $loc['youtube_follow_text']; ?>"><img src="<?php echo BASE_URL; ?>/img/fa-youtube-play_72_12_ffffff_cd201f.png" width="36" height="36" border="0" alt="" /><span class="sr-only"><?php echo $loc['youtube_follow_text']; ?></span></a></li><?php } ?>
			</ul>
		</div>
	</header>

	<main id="content" class="wrapper-nopad">
<?php if( $youtube !== false ) { ?>
		<section class="live-video">
			<?php require_once( 'inc/live-video.php' ); ?>
		</section>
<?php } ?>
		<section class="news">
			<?php require_once( 'inc/news-feed.php' ); ?>
		</section>
	</main>

	<footer id="site-footer">
		<div class="wrapper">
			<p><a href="<?php echo MAINSITE_URL . TRACKING_PARAMETERS; ?>"><?php echo $loc['full_site_link_text']; ?></a></p>
		</div>
	</footer>

</body>

</html>
