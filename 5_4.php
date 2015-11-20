<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/20
 * Time: 16:20
 *
 * 使用简单的正则表达式来分解字符串
 * 用法：$result_array = preg_split(pattern, subject);
 * 如果在目标字符串中找到模式，在模式中分解目标字符串
 * $result_array[0] = "this is the "
 * $result_array[1] = " string"
 *
 */

$result_array = preg_split("/test/", "This is the test string");


echo "<pre>";

print_r($result_array);


echo "</pre>";





























