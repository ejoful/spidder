<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/20
 * Time: 16:20
 *
 * ʹ�ü򵥵�������ʽ���ֽ��ַ���
 * �÷���$result_array = preg_split(pattern, subject);
 * �����Ŀ���ַ������ҵ�ģʽ����ģʽ�зֽ�Ŀ���ַ���
 * $result_array[0] = "this is the "
 * $result_array[1] = " string"
 *
 */

$result_array = preg_split("/test/", "This is the test string");


echo "<pre>";

print_r($result_array);


echo "</pre>";





























