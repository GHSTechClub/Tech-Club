<?php
$url = "https://www.google.com/";

$ch = curl_init($url);
$timeout = 5;

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

$html = curl_exec($ch);
curl_close($ch);



$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();

$xpath = new DOMXPath($dom);

if (!$xpath) {
    echo "failure";
}
else {
    echo "success";
}

$nodes = $xpath->query("//a[@class='btn-search-pill']");

if (!$nodes) {
    echo " fail #2 ";
}
else {
    echo " succ #2 ";
}

$links = array();

foreach ($nodes as $i => $node) {
    $links[] = $node->nodeValue;
}

$links = array_unique($links);

foreach ($links as $link) {
	echo $link . ', ';
}

//echo $html;


?>
