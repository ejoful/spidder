<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 16:13
 *
 * 使用LIB_parse.php中的parse_array()函数来提取所有图片标签
 *
 */

# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");



$image_tag_array = parse_array($downloaded_web_page, "<img", ">");


















