<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 13:45
 *
 * 一个能像代码清单6_7中表单一样提交文件的脚本
 */



$post = array("uploadedfile"=>"@".$full_path_name_of_file);
//数组里要上传的文件名

// 初始化php/CURL
$ch = curl_init();

//指向表单处理器
curl_setopt($ch, CURLOPT_URL, $form_action_URL);

//指定POST方法
curl_setopt($ch, CURLOPT_POST, true);

//添加要操作的post数组
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

//添加要操作的post数组
$response = curl_exec($ch);





















