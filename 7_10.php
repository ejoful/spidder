<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/25
 * Time: 10:03
 *
 * ѹ�������������ļ�
 *
 */

# չʾphp���ļ�ѹ������

# ����cURL��
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");


# ��ȡ��ҳ
$target     = "http://www.schrenk.com";
$ref        = "";
$method     = "GET";
$data_array = "";
$web_page   = http_get($target, $ref, $method, $data_array, EXCL_HEAD);


# ��ȡ����ҳѹ���汾�Ĵ�С�ͷ�ѹ���汾�Ĵ�С
$uncompressed_size  = strlen($web_page['FILE']);
$compressed_size    = strlen(gzcompress($web_page['FILE'], $compression_value = 9));
$noformat_size      = strlen(strip_tags($web_page['FILE']));

# չʾ����ҳѹ��֮ǰ��֮��汾�Ĵ�С
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

































