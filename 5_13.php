<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 13:36
 *
 * 使用正则表达式进行分组和范围的匹配
 *
 */

$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\b[A-Z][aeiou][a-z]\b/", $subject_string, $matches_array);
# 结果：$matches_array = Array ( [0] => Tim [1] => Tom )





























