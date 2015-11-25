<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 18:50
 * 分析http标头信息来判断文件是不是压缩传输的
 *
 */

if(stristr($http_header, 'zip')) {
    $compressed = true;
}


































