<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/10/30
 * Time: 19:44
 */
# ������غ���
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");


# ����һ����ҳ
$web_page = http_get($target = 'http://www.hao123.com', $referer = "");




# ��ȡ����ҳ�ı��⣬��������ǰ��ı�ǩ
$title_incl = return_between($web_page['FILE'], '<title>', '</title>', INCL);



# ��ȡ����ҳ�ı��⣬����������ǰ��ı�ǩ
$title_excl = return_between($web_page['FILE'], '<title>', '</title>', EXCL);


# �����ȡ�����ı�
echo '<xmp>';
echo 'title_incl = '.$title_incl;
echo '                    ';
echo 'title_excl = '.$title_excl;

echo '</xmp>';














