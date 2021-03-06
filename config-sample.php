<?php

/* config file for app landing page */

define( 'YT_KEY', '' );
define( 'CHANNEL', '' );
define( 'RSS', '' );

# define( 'DATA_PROCESSOR', '' );   # for the alternate data stream
# define( 'RELATIVE_PREFIX', '' );  # for the alternate data stream

define( 'LANG', 'en' );
define( 'DIR', 'ltr' ); // options: 'ltr' or 'rtl'
define( 'BASE_URL',  'http://localhost/thispage' ); // no trailing slash
define( 'MAINSITE_URL', 'http://localhost' ); // trailing slash ok

define( 'TRACKING_PARAMETERS', '?utm_medium=proxy&utm_campaign=psiphon-landing-pages&utm_source=psiphon&utm_content=<LANGUAGE SERVICE>' );

// localizations for text
$loc = array(
	'facebook_follow_text'       => 'Facebook',
	'facebook_follow_url'        => 'https://www.facebook.com/userslug',
	'full_site_link_text'        => 'Click here to switch to the full site',
	'instagram_follow_text'      => 'Instagram',
	'instagram_follow_url'       => 'https://www.instagram.com/userslug',
	'latest_news_heading'        => 'Latest News',
	'meta_og_site_name'          => 'Site Name',
	'meta_title'                 => 'Meta Title',
	'meta_twitter_creator'       => 'TwitterHandle', /* do not include the '@' */
	'soundcloud_follow_text'     => 'Soundcloud',
	'soundcloud_follow_url'      => 'https://www.soundcloud.com/userslug',
	'telegram_follow_text'       => 'Telegram',
	'telegram_follow_url'        => 'http://telegram.me/userslug',
	'twitter_follow_text'        => 'Twitter',
	'twitter_follow_url'         => 'https://www.twitter.com/userslug',
	'youtube_follow_text'        => 'YouTube',
	'youtube_follow_url'         => 'https://www.youtube.com/userslug',
	'youtube_button_text'        => 'View on YouTube'
);
