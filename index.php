<?php

require_once( 'config.php' );

?><!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
<head>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />

	<title></title>

	<link type="image/x-icon" rel="icon" href="<?php echo BASE_URL; ?>/img/favicon.ico" />
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/img/favicon.ico" />

	<link rel="canonical" href="<?php echo BASE_URL; ?>/" />
	<meta name="standout" content="<?php echo BASE_URL; ?>/" />
	<meta name="description" itemprop="description" content="" />
	<link rel="image_src" href="" />
	<meta name="keywords" content="" />
	<meta name="news_keywords" content="" />

	<meta property="og:site_name" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="<?php echo BASE_URL; ?>/" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="1275" />
	<meta property="og:image:height" content="600" />

	<meta name="twitter:site" value="@VOANews" />
	<meta name="twitter:creator" content="@VOANews" />
	<meta name="twitter:card" value="summary" />
	<meta name="twitter:url" content="<?php echo BASE_URL; ?>/" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/css/base.css?rand=<?php echo time(); ?>" />
	
	<!-- documentation at https://polyfill.io/v2/docs/ -->
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
	
	<meta name="DISPLAYDATE" content="December 00, 2017" />
	<meta itemprop="dateModified" content="2017-12-29" />
	<meta itemprop="datePublished" content="2017-12-29" />

</head>

<body class="<?php echo LANG; ?>" dir="<?php echo DIR; ?>">

	<header id="site-header">
		<div class="wrapper">
			<div class="logo"><a href="<?php echo MAINSITE_URL; ?>"><img src="<?php echo BASE_URL; ?>/img/voa-logo_87x36_2x.png" width="87" height="36" border="0" alt="VOA" /></a></div>
			<div class="social"></div>
		</div>
	</header>

	<main id="content">
		<section class="live-video">
			<?php require_once( 'inc/live-video.php' ); ?>
		</section>

		<section class="news">
			<?php require_once( 'inc/news-feed.php' ); ?>
		</section>
	</main>

	<footer id="site-footer">
		<div class="wrapper">
			<p><a href="<?php echo MAINSITE_URL; ?>"><?php echo $loc['full_site_link_text']; ?></a></p>
		</div>
	</footer>

</body>

</html>
