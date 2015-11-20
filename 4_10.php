<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/2
 * Time: 13:20
 */




# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");



//下载该页面
$web_page = http_get($target="http://www.baidu.com", $referer="http://www.baidu.com");

echo "<pre>";

$uncommented_page = remove($web_page, "<!--", "-->");
echo '$uncommented_page:<br>';
print_r($uncommented_page);


preg_match_all("|<[^>]+>(.*)</[^>]+>|U",
    "<b>example: </b><div align=\"left\">this is a test</div>",
    $out, PREG_SET_ORDER);
echo $out[0][0] . ", " . $out[0][1] . "\n";
echo $out[1][0] . ", " . $out[1][1] . "\n";


$links_removed = remove(implode('',$uncommented_page), "<a", "</a>");

$links_removed = remove($links_removed, "<code", "</code>");


echo '$links_removed:<br>';
print_r($links_removed);







//$images_removed = remove($web_page, "<img", ">");
//echo '$images_removed:<br>';
//print_r($images_removed);
//
//
//
//
//
//
//$javascript_removed = remove($web_page, "<script", "</script");
//echo '$javascript_removed:<br>';
//print_r($javascript_removed);


echo "<pre>";