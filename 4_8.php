<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/2
 * Time: 11:38
 */

# ������غ���
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");



//���ظ�ҳ��
$web_page = http_get($target="http://www.hao123.com", $referer="http://www.baidu.com");

//��ȡͼƬ��ǩ
$meta_tag_array = parse_array($web_page['FILE'], "<img", ">");

echo "<pre>";
print_r($meta_tag_array);
echo "</pre>";




//��ÿ��ͼƬ��ǩ�����ͼƬԴ����
for ($xx = 0; $xx < count($meta_tag_array); $xx++)
{
    $name = get_attribute($meta_tag_array[$xx], $attribute="src");
    echo $name . "<br>";
}






















