<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/9
 * Time: 10:55
 */

# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

$org_string = "I wish I had a Cat.";
$result_string = str_replace("Cat", "Dog", $org_string);
#$result_string里面包含字符串"I wish I had a Dog."


echo $result_string;
















