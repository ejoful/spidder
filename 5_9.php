<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 11:18
 *
 * ��ĸ�ַ�ƥ�䣨ָ��ƥ�������
 *
 */

$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\b\D{3}\b/", $subject_string, $matches_array);
# �����$matches_array = Array ( [0] => are [1] => Tim [2] => and [3] => Tom)
































