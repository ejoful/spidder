<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/20
 * Time: 16:02
 *
 * ʹ��������ʽ������һ���ַ�������һ���ַ����г��ֵ�����ʵ��
 * �÷���preg_match_all(pattern, subject, result_array);
 * $result = 1 (true) �����Ŀ���ַ������ҵ�ģʽ
 * $result = 0 (false) ���û����Ŀ���ַ������ҵ�ģʽ
 * $result_array = ������Ŀ���ַ�������ģʽƥ���ʵ��
 *
 */


$result = preg_match_all("/test/", "This is a test of the test string", $result_array);

echo "<pre>";
print_r($result);

echo "<br>";

print_r($result_array);


echo "</pre>";






