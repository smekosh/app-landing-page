<?php
require_once("config.php");

# should be present in config.php
if( !defined("DATA_PROCESSOR") ) {
    include( "data-rss.php" );
} else {
    include( DATA_PROCESSOR );
}

// input: .../D5921321-4026-4320-91DE-9844CDAE720B_w800_h450.jpg
// output without any parameters: .../D5921321-4026-4320-91DE-9844CDAE720B.jpg
// output with a custom parameter inserts $custom before .jpg (ex: _w300)
function pangea_image($url, $custom = "") {

    $i = pathinfo($url);

    // need at least the extension to work with
    if(
        !isset($i["filename"]) ||
        !isset($i["extension"])
    ) {
        return( $url );
    }

    // two main parts
    $filename = $i["filename"];
    $extension = $i["extension"];

    // see if the image has already been size-modified
    // and if so, replace the $filename with the original version
    $p1 = explode("_tv", $filename);
    $p2 = explode("_", $filename);

    if( count($p1) !== 1 ) {
        // automated framegrab
        $filename = $p1[0] . "_tv";
    } elseif( count($p2) !== 1 ) {
        // other
        $filename = $p2[0];
    }

    // return reconstructed image url with optional $custom
    return(sprintf(
        "%s/%s%s.%s",
        $i["dirname"],
        $filename,
        $custom,
        $extension
    ));
}

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

$feed = get_feed(RSS);
$youtube = get_yt_data();
