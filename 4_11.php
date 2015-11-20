<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/3
 * Time: 15:33
 */


# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");



//下载该页面
$web_page = http_get($target="http://www.hao123.com", $referer="http://www.baidu.com");
$web_page = implode('',$web_page);

if(stristr($web_page, "dogs")) {
    echo "This is a web page that mentions dogs.";
} else {
    echo "This web page does not mention dogs";
}









