<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/28
 * Time: 16:29
 */
/*
 * fopen()����һ���������ļ����������ӣ���ͨ��һ���ļ����$file_handle��ʹ��������ӡ�
 * fgets()������4096���ֽڿ�Ϊ��λ����ȡ��������ݣ�ֱ��3���ز���������ļ������ʹ��fclose()�رվ����
 * fopen()����һ���������ļ����������ӣ���ͨ��һ���ļ����$file_handle��ʹ��������ӡ�
 * fgets()������4096���ֽڿ�Ϊ��λ����ȡ��������ݣ�ֱ��3���ز���������ļ������ʹ��fclose()�رվ����
 *
*/

# ������Ҫ���ص��ļ�
$target = "https://www.hao123.com/";
$file_handle = fopen($target, "r");


#���ظ��ļ�
while(!feof($file_handle)) {
    echo fgets($file_handle, 4096);
}
fclose($file_handle);














