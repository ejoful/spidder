<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/10/30
 * Time: 19:09
 */



include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");





$string = "The quick brown fox";

#提取分隔符之前的部分，分隔符要保留
$parsed_text = split_string($string, 'quick', BEFORE, INCL);
echo '$string : ' . $string . '<br>';
echo $parsed_text.'<br>';



#保留分隔符之后的部分，分隔符不保留
$parsed_text = split_string($string, 'quick', AFTER, EXCL);
echo $parsed_text.'<br>';







































