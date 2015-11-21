<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 10:53
 * ×ÖÄ¸×Ö·û´®Æ¥Åä
 *
 *
 *
 */

$subject_string = "There are 129 stories about Tim and Tom";
preg_match_all("/\b\D\D\D\b/", $subject_string, $matches_array);
# ½á¹û£º$matches_array = Array ( [0] => are [1] => Tim [2] => and [3] => Tom)
















