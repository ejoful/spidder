<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/28
 * Time: 16:50
 */

/*
 * ��fopen()���������Ҫ�����ļ����
 * ���ؽ����һ�����飬�����ļ��е�ÿһ�ж��������һ��Ԫ��
 *
 */

// ����Ŀ���ļ�
$target = "https://www.hao123.com/";
$dowmloaded_page_array = file($target);

// ����ļ�����
for($xx = 0; $xx < count($dowmloaded_page_array); ++$xx)
{
    echo $dowmloaded_page_array[$xx];
}






























