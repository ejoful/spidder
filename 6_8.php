<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 13:45
 *
 * һ����������嵥6_7�б�һ���ύ�ļ��Ľű�
 */



$post = array("uploadedfile"=>"@".$full_path_name_of_file);
//������Ҫ�ϴ����ļ���

// ��ʼ��php/CURL
$ch = curl_init();

//ָ���������
curl_setopt($ch, CURLOPT_URL, $form_action_URL);

//ָ��POST����
curl_setopt($ch, CURLOPT_POST, true);

//���Ҫ������post����
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

//���Ҫ������post����
$response = curl_exec($ch);





















