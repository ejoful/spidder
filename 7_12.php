<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/25
 * Time: 11:10
 *
 * 生成图片的缩略图
 *
 * 展示使用LIB_thumbnail库创建缩略图的方式
 *
 */

# 展示LIB_thumbnail.php库

# 引入该库
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_thumbnail.php");

# 从互联网上获取图片
$target     = "http://www.schrenk.com/north_beach.jpg";
$ref        = "";
$method     = "GET";
$data_array = "";
$image   = http_get($target, $ref, $method, $data_array, EXCL_HEAD);

# 将获取的图片保存到本地磁盘
$handle = fopen("test.jpg", "w");
fputs($handle, $image['FILE']);
fclose($handle);

# 给刚保存到本地的图片创建缩略图
$org_file = "test.jpg";
$new_file_name = "thumbnail.jpg";

# 给缩略图设置最大宽度和高度
$max_width = 90;
$max_height = 90;

# 创建缩略图
create_thumbnail($org_file, $new_file_name, $max_width, $max_height);
?>

Full-size image<br>
<img src="test.jpg">
<p>Thumbnail image<br>
<img src="thumbnail.jpg"></p>





























