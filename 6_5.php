<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 11:42
 *
 * 通过将表单数据拼接在url里面来仿真代码清单6_3的表单
 */

# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

//表单处理器地址
$action = "http://www.schrenk.com/search.php?term=hello&sort=up";
//GET方法
$method = "GET";
//上链变量
$ref = "";

$response = http($target = $action, $ref, $method, $data_array = "", EXCL_HEAD);


echo "<xmp>";


print_r($response);



echo "</xmp>";