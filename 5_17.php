<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 16:13
 *
 * ʹ��LIB_parse.php�е�parse_array()��������ȡ����ͼƬ��ǩ
 *
 */

# ������غ���
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");



$image_tag_array = parse_array($downloaded_web_page, "<img", ">");


















