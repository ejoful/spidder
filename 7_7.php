<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 18:44
 *
 * 从网站服务器上请求压缩之后的文件
 */

$header[] = "Accept-Encoding:gzip, deflate, sdch";
curl_setopt($curl_session, CURLOPT_HTTPHEADER, $header);















