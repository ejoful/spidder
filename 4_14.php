<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/9
 * Time: 11:21
 */

# ������غ���
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

// ���ظ���ҳ
$web_page = http_get($target="http://www.cnn.com", $referer="");

// �Ƴ�����JavaScript
$noformat = remove($web_page['FILE'], "<script", "</script>");

// �Ƴ�����JavaScript
$noformat = remove($web_page['FILE'], "<noscript", "</noscript>");

//�޳�����html��ʽ��Ϣ
$noformat = strip_tags($noformat);

//�Ƴ����õĿհ��ַ�

//�Ƴ��Ʊ��
$noformat = str_replace("\t", '', $noformat);
//�Ƴ��հ�
$noformat = str_replace("&nbsp;", '', $noformat);
//�Ƴ����з�
$noformat = str_replace("\n", '', $noformat);

echo $noformat;








































