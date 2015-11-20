<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/20
 * Time: 16:02
 *
 * 使用正则表达式来返回一个字符串在另一个字符串中出现的所有实例
 * 用法：preg_match_all(pattern, subject, result_array);
 * $result = 1 (true) 如果在目标字符串中找到模式
 * $result = 0 (false) 如果没有在目标字符串中找到模式
 * $result_array = 所有与目标字符串中与模式匹配的实例
 *
 */


$result = preg_match_all("/test/", "This is a test of the test string", $result_array);

echo "<pre>";
print_r($result);

echo "<br>";

print_r($result_array);


echo "</pre>";






