<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 11:39
 *
 * ��ƥ��2
 */

$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\bT(i|o)m\b/", $subject_string, $matches_array);
# �����$matches_array = Array ( [0] => Tim [1] => Tom )













