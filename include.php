<?php
error_reporting(0);
define("Root", preg_replace("@\\\\@", '/', dirname(__FILE__)));

list($q,$s) = explode("=", array_shift(preg_split("/(?<!\|)(&|;)/i", $_SERVER['QUERY_STRING'])),2);
$q = preg_replace(array("/<.*script>/i", "/%3C.*ScRiPt%3E/i", "/<\?/", "/\?>/", "/<%/", "/%>/"), array('', '', '', '', '', ''), rawurldecode($q));
$s = preg_replace(array("/<.*script>/i", "/%3C.*ScRiPt%3E/i", "/<\?/", "/\?>/", "/<%/", "/%>/"), array('', '', '', '', '', ''), $s);
if (empty($q)) {
    $q = 'home';
}
$page = Root.'/pages/'.$q.'.php';

ob_start();
if (file_exists($page)) {
    include($page);
    $lastModified = gmdate('D, d M Y H:i:s ', filemtime($page)) . 'GMT';
    header('X-Page-Title: '.(defined('PageTitle') && PageTitle ? PageTitle : "45th International Conference on Very Large Data Bases"));
    /*
    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $lastModified) {
        header('HTTP/1.1 304 Not Modified');
        exit();
    }
    header("Last-Modified: ".$lastModified);
    */
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
} else {
    header('X-Page-Title: 45th International Conference on Very Large Data Bases');
    include(Root . '/pages/coming-soon.php');
}

echo ob_get_clean();