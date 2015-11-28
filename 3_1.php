<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/28
 * Time: 16:29
 */
/*
 * fopen()建立一个到下载文件的网络连接，他通过一个文件句柄$file_handle来使用这个连接。
 * fgets()依次以4096个字节块为单位来获取并输出数据，直到3下载并输出整个文件。最后使用fclose()关闭句柄。
 * fopen()建立一个到下载文件的网络连接，他通过一个文件句柄$file_handle来使用这个连接。
 * fgets()依次以4096个字节块为单位来获取并输出数据，直到3下载并输出整个文件。最后使用fclose()关闭句柄。
 *
*/

# 定义你要下载的文件
$target = "https://www.hao123.com/";
$file_handle = fopen($target, "r");


#下载该文件
while(!feof($file_handle)) {
    echo fgets($file_handle, 4096);
}
fclose($file_handle);














