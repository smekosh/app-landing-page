<?php

function get_feed($url, $limit = 10) {
    $raw = @file_get_contents($url);

    $feed = @simplexml_load_string($raw);
    $items = array();

    if(
        $feed === false ||                  # simplexml fail
        !isset( $feed->channel ) ||         # no struct
        !isset( $feed->channel->item )      # no struct l2
    ) {
        return( array() );
    }

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
