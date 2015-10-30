<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/10/30
 * Time: 19:44
 */
# 引入相关函数
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");


# 下载一个网页
$web_page = http_get($target = 'http://www.hao123.com', $referer = "");




# 提取该网页的标题，包含标题前后的标签
$title_incl = return_between($web_page['FILE'], '<title>', '</title>', INCL);



# 提取该网页的标题，不包含标题前后的标签
$title_excl = return_between($web_page['FILE'], '<title>', '</title>', EXCL);


# 输出提取到的文本
echo '<xmp>';
echo 'title_incl = '.$title_incl;
echo '                    ';
echo 'title_excl = '.$title_excl;

echo '</xmp>';














