<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/10/30
 * Time: 19:09
 */



include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");





$string = "The quick brown fox";

#��ȡ�ָ���֮ǰ�Ĳ��֣��ָ���Ҫ����
$parsed_text = split_string($string, 'quick', BEFORE, INCL);
echo '$string : ' . $string . '<br>';
echo $parsed_text.'<br>';



#�����ָ���֮��Ĳ��֣��ָ���������
$parsed_text = split_string($string, 'quick', AFTER, EXCL);
echo $parsed_text.'<br>';







































