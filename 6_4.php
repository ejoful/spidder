<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 11:20
 *
 * 使用LIB_http库传送一个数组中的数据来仿真代码清单6_3的表单
 */

# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

//表单处理器地址
$action = "http://www.schrenk.com/search.php";
//GET方法
$method = "GET";
//上链变量
$ref = "";
//定义term变量
$data_array['term'] = "hello";
//定义sort变量
$data_array['sort'] = "up";

$response = http($target = $action, $ref, $method, $data_array, EXCL_HEAD);


echo "<xmp>";

print_r($response);

echo "</xmp>";

