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



// �����ݿ�ļ�¼�����ѯ�����벢�Ҵ���ͼƬ�Ĵ���
#��ȡ��������ݿ⺯��
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_mysql.php");

#��URL�ϵı���ת����һ���µı���
$image_id = $_GET['img_id'];

#�����ݿ��л�ȡ64���Ƶ�ͼƬ
$sql = "select IMAGE from table where IMAGE_ID='".$image_id."'";
list($img) = exe_sql(DATABASE, $sql);

#��ͼƬ���ݽ��벢������Ϊһ���ļ�����
header("Content-type:image/jpeg");
echo base64_decode($img);
exit;

























