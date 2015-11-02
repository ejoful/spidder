<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/10/31
 * Time: 9:53
 */

# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

//下载该页面
$web_page = http_get($target="http://www.fbi.gov", $referer="");

//提取meta信息
$meta_tag_array = parse_array($web_page['FILE'], "<meta", ">");

foreach($meta_tag_array as $item) {
    echo $item;
}

































