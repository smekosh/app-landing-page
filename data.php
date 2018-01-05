<?php
require_once("config.php");

function get_rss($limit = 10) {
    $raw = file_get_contents(RSS);
    $feed = simplexml_load_string($raw);
    $items = array();

    foreach( $feed->channel->item as $k => $item ) {

        if( count($items) >= $limit ) break;

        $one = array(
            "url" => (String)$item->link,
            "image" => (String)$item->enclosure->attributes()->url,
            "title" => (String)$item->title
        );

        // w = 200 ?

        $items[] = $one;
    }
    return( $items );
}

$feed = get_rss();
