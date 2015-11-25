<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 16:55
 *
 *
 *
 */



// 从数据库的记录里面查询、解码并且创建图片的代码
#获取所需的数据库函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_mysql.php");

#将URL上的变量转换成一个新的变量
$image_id = $_GET['img_id'];

#从数据库中获取64进制的图片
$sql = "select IMAGE from table where IMAGE_ID='".$image_id."'";
list($img) = exe_sql(DATABASE, $sql);

#对图片数据解码并将其作为一个文件返回
header("Content-type:image/jpeg");
echo base64_decode($img);
exit;

























