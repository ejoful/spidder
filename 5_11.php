<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 11:38
 *
 * ��ƥ��
 */

$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\bTim|Tom\b/", $subject_string, $matches_array);
# �����$matches_array = Array ( [0] => Tim [1] => Tom )











