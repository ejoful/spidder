<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 16:19
 *
 * 使用正则表达式函数preg_match_all()来提取所有图片标签
 *
 */

# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");


preg_match_all("/<img(.*)>)siU/", $downloaded_web_page, $matching_data);
$image_tag_array = $matching_data[0];




















