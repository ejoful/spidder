<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/10/29
 * Time: 16:29
 */

include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

$target = "http://www.schrenk.com/publications.php";
$ref = "http://www.shrenk.com";


# �����ͷ��Ϣ
$return_array = http_get_withheader($target, $ref);



# ��ʾ��ͷ��Ϣ
echo "FILE CONTENTS \n";
var_dump($return_array['FILE']);

echo "\n ERRORS \n";
var_dump($return_array['ERROR']);


echo "\n STATUS \n";
var_dump($return_array['STATUS']);










