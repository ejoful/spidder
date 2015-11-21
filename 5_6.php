<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 10:40
 * 提取字符串系列
 *
 *
 *
 */

$subject_string = "There are 129 stories about Tim and another 3129 about Tom";
preg_match_all("/\d\d\d/", $subject_string, $matches_array);
# 结果：$matches_array = Array ( [0] => 129 [1] => 312 )

























