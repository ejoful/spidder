<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 11:51
 *
 * ʹ��LIB_http������ʹ��POST�����ı�
 */


# ������غ���
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

//����������ַ
$action = "http://www.schrenk.com/search.php";
//GET����
$method = "POST";
//��������
$ref = "";
//����term����
$data_array['term'] = "hello";
//����sort����
$data_array['sort'] = "up";

$response = http($target = $action, $ref, $method, $data_array, EXCL_HEAD);


echo "<xmp>";

print_r($response);

echo "</xmp>";













