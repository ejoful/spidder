<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/25
 * Time: 11:10
 *
 * ����ͼƬ������ͼ
 *
 * չʾʹ��LIB_thumbnail�ⴴ������ͼ�ķ�ʽ
 *
 */

# չʾLIB_thumbnail.php��

# ����ÿ�
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_thumbnail.php");

# �ӻ������ϻ�ȡͼƬ
$target     = "http://www.schrenk.com/north_beach.jpg";
$ref        = "";
$method     = "GET";
$data_array = "";
$image   = http_get($target, $ref, $method, $data_array, EXCL_HEAD);

# ����ȡ��ͼƬ���浽���ش���
$handle = fopen("test.jpg", "w");
fputs($handle, $image['FILE']);
fclose($handle);

# ���ձ��浽���ص�ͼƬ��������ͼ
$org_file = "test.jpg";
$new_file_name = "thumbnail.jpg";

# ������ͼ��������Ⱥ͸߶�
$max_width = 90;
$max_height = 90;

# ��������ͼ
create_thumbnail($org_file, $new_file_name, $max_width, $max_height);
?>

Full-size image<br>
<img src="test.jpg">
<p>Thumbnail image<br>
<img src="thumbnail.jpg"></p>





























