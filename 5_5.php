<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/20
 * Time: 16:51
 * 使用正则表达式提取数字
 *
 *
 */

$subject_string = "There are 129 stories about Tim and Tom";

$preg = preg_match_all("/\d/", $subject_string, $maches_array);

# RESULT: $matches_array = Array([0] => 1 [1] => 2 [2] => 9 )



echo "<pre>";

print_r($preg."<br>");

print_r($maches_array);


echo "</pre>";












