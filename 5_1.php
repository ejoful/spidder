<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/20
 * Time: 15:32
 */

// 用法：preg_replace(pattern, replacement, subject);
// 如果找到模式，目标字符串
// "This is the test string"
// 会变成
// "This is the new string"
$resulting_string = preg_replace("/test/", "new", "This is the test string");

echo $resulting_string;













































