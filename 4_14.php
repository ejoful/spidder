<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/9
 * Time: 11:21
 */

# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

// 下载该网页
$web_page = http_get($target="http://www.cnn.com", $referer="");

// 移除所有JavaScript
$noformat = remove($web_page['FILE'], "<script", "</script>");

// 移除所有JavaScript
$noformat = remove($web_page['FILE'], "<noscript", "</noscript>");

//剔除所有html格式信息
$noformat = strip_tags($noformat);

//移除无用的空白字符

//移除制表符
$noformat = str_replace("\t", '', $noformat);
//移除空白
$noformat = str_replace("&nbsp;", '', $noformat);
//移除换行符
$noformat = str_replace("\n", '', $noformat);

echo $noformat;








































