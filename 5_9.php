<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 11:18
 *
 * 字母字符匹配（指定匹配次数）
 *
 */

$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\b\D{3}\b/", $subject_string, $matches_array);
# 结果：$matches_array = Array ( [0] => are [1] => Tim [2] => and [3] => Tom)
































