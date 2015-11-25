<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 15:04
 *
 * 使用LIB_http来模拟图6_3中的表单分析
 *
 */

# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

// 初始化地址
$action = "http://www.Webbotsspidersscreenscrapers.com/form_analyzer.php";
$ref = "";

# 指定提交方法
$method = "POST";

#设置表单数据和值
$data_array['sessionid'] = "kfjlsdlkfjsdklf";
$data_array['email'] = "sales@schrenk.com";
$data_array['message'] = "This is a test message";
$data_array['status'] = "in school";
$data_array['gender'] = 'M';
$data_array['vol'] = 'on';

$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);


























