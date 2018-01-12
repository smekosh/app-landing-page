<?php
# required in config.php:
# define( 'DATA_PROCESSOR', 'data-html.php' );
# define( 'RELATIVE_PREFIX', 'https://www.example.com' );


### expected return example:
### [0] => Array (
###         [link] => https://www.voachinese.com/a/voaweishi-20180111-io-china-blocks-vpn/4203427.html
###         [image] => https://gdb.voanews.com/2ac8ea19-dcf5-4ce9-aee9-504ba2fdc08d_tv_w800_h450.jpg
###         [title] => 时事大家谈：翻墙越来越难，1/11真是VPN封杀日？
###     )

function get_feed($url, $limit = 10) {
    $ret = array();

    @$html = file_get_contents($url);
    @$html = mb_convert_encoding($html, 'HTML-ENTITIES', "UTF-8");

    $doc = new DOMDocument();
    @$doc->loadHTML($html);
    $xpath = new DOMXpath($doc);
    $xpath2 = new DOMXpath($doc);

    $rows = $xpath->query("//ul[contains(@class,'row')]");
    foreach( $rows as $row ) {
        $lis = $xpath2->query(".//li", $row);

        foreach( $lis as $li ) {
            $entry = array();

            $imgs = $xpath->query(".//img", $li);
            if( $imgs->length > 0 ) {
                $entry["image"] = $imgs->item(0)->getAttribute("data-src");
            }

            $links = $xpath->query(".//a", $li);
            if( $links->length > 0 ) {
                $entry["link"] = RELATIVE_PREFIX . $links->item(0)->getAttribute("href");
                $entry["title"] = $links->item(0)->getAttribute("title");
            }

            $ret[] = $entry;
        }
    }

    $items = array();
    foreach( $ret as $k => $v ) {
        if( count($items) >= $limit ) break;
        $items[] = $v;
    }

    return( $items );
}
