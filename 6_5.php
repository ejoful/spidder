<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 11:42
 *
 * ͨ����������ƴ����url��������������嵥6_3�ı�
 */

# ������غ���
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

//����������ַ
$action = "http://www.schrenk.com/search.php?term=hello&sort=up";
//GET����
$method = "GET";
//��������
$ref = "";

$response = http($target = $action, $ref, $method, $data_array = "", EXCL_HEAD);


echo "<xmp>";


print_r($response);



echo "</xmp>";