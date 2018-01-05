<?php
require_once("config.php");

function get_yt_url() {
    return(sprintf(
        "https://www.googleapis.com/youtube/v3/search?" .
        "part=snippet&channelId=%s&type=video&eventType=live&key=%s",
        CHANNEL,
        YT_KEY
    ));
}

function get_yt_data() {
    $url = get_yt_url();
    $data = json_decode(file_get_contents($url));

    if( empty($data->items) ) return( false );

    return( $data->items[0] );
}

function get_rss($limit = 10) {
    $raw = file_get_contents(RSS);
    $feed = simplexml_load_string($raw);
    $items = array();

    foreach( $feed->channel->item as $k => $item ) {

        if( count($items) >= $limit ) break;

        $one = array(
            "link" => (String)$item->link,
            "image" => (String)$item->enclosure->attributes()->url,
            "title" => (String)$item->title
        );

        // w = 200 ?

        $items[] = $one;
    }
    return( $items );
}

$feed = get_rss();
$youtube = get_yt_data();
