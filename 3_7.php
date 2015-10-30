<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/10/30
 * Time: 15:54
 */

include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

$target = "http://www.schrenk.com/publications.php";
$ref = "http://www.shrenk.com";


# 请求标头信息
$return_array = http_get_withheader($target, $ref);



# 显示标头信息


echo '<pre>';

echo "FILE CONTENTS \n";
print_r($return_array['FILE']);




echo "\n STATUS \n";
print_r($return_array['STATUS']);



echo '</pre>';







