<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 15:04
 *
 * ʹ��LIB_http��ģ��ͼ6_3�еı�����
 *
 */

# ������غ���
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");

// ��ʼ����ַ
$action = "http://www.Webbotsspidersscreenscrapers.com/form_analyzer.php";
$ref = "";

# ָ���ύ����
$method = "POST";

#���ñ����ݺ�ֵ
$data_array['sessionid'] = "kfjlsdlkfjsdklf";
$data_array['email'] = "sales@schrenk.com";
$data_array['message'] = "This is a test message";
$data_array['status'] = "in school";
$data_array['gender'] = 'M';
$data_array['vol'] = 'on';

$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);


























