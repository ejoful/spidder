<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/25
 * Time: 10:03
 *
 * 压缩下载下来的文件
 *
 */

# 展示php的文件压缩方法

# 包含cURL库
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");


# 获取网页
$target     = "http://www.schrenk.com";
$ref        = "";
$method     = "GET";
$data_array = "";
$web_page   = http_get($target, $ref, $method, $data_array, EXCL_HEAD);


# 获取该网页压缩版本的大小和非压缩版本的大小
$uncompressed_size  = strlen($web_page['FILE']);
$compressed_size    = strlen(gzcompress($web_page['FILE'], $compression_value = 9));
$noformat_size      = strlen(strip_tags($web_page['FILE']));

# 展示该网页压缩之前和之后版本的大小
?>
<table border="1">
    <tr>
        <th colspan="3">Compression report for <?php echo $target; ?></th>
    </tr>
    <tr>
        <th>Uncompressed</th>
        <th>Compressed</th>
        <th>Format Removed</th>
    </tr>
    <tr>
        <td align="right"><?php echo $uncompressed_size;?> bytes</td>
        <td align="right"><?php echo $compressed_size;?> bytes</td>
        <td align="right"><?php echo $noformat_size;?> bytes</td>
    </tr>
</table>

































