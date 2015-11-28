<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/28
 * Time: 16:50
 */

/*
 * 与fopen()相比他不需要创建文件句柄
 * 返回结果是一个数组，下载文件中的每一行都是数组的一个元素
 *
 */

// 下载目标文件
$target = "https://www.hao123.com/";
$dowmloaded_page_array = file($target);

// 输出文件内容
for($xx = 0; $xx < count($dowmloaded_page_array); ++$xx)
{
    echo $dowmloaded_page_array[$xx];
}






























