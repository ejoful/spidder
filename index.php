<?php
$target = "http://www.hao123.com";


/*$file_handle = fopen($target, "r");

//echo '<xmp>';


while (!feof($file_handle))
	echo fgets($file_handle, 4096);
fclose($file_handle);





// '</xmp>';*/




$downloaded_page_array = file($target);


//输出文件内容
for($xx = 0; $xx < count($downloaded_page_array); ++$xx) {
	echo $downloaded_page_array[$xx];
}










