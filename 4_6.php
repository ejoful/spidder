<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/10/31
 * Time: 9:53
 */

# ������غ���
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

//���ظ�ҳ��
$web_page = http_get($target="http://www.fbi.gov", $referer="");

//��ȡmeta��Ϣ
$meta_tag_array = parse_array($web_page['FILE'], "<meta", ">");

foreach($meta_tag_array as $item) {
    echo $item;
}

































