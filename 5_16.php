<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/21
 * Time: 15:05
 *
 * 改进的提取电话号码的脚本
 */


$test_string = "
Example #01:100 000 0001                        Example #02:200 010-0002
Example #03:300.010.0003                        Example #04:400 000 0004.
Example #05:<td>500 000-0005</td>               Example #06:<li> 600.111-0006</li>
Example #07:(700) 111 0007                      Example #08:(800) 111-0008
Example #09:(900) 111.0009                      Example #10:(111) 222 0010.
Example #11:(222) 222-0011.                     Example #12:(333) 222.0012.
";


// 定义描述/匹配电话号码的模式

// 匹配不带圆括号的电话号码的模式
$wo_parentheses = "\d{3}(.)\d{3}(.)\d{4}";
// 匹配带圆括号的电话号码的模式
$w_parentheses = "\(\d{3}\)(.)\d{3}(.)\d{4}";
// 使用逻辑或来拼接模式
$pattern = "/(".$w_parentheses."|".$wo_parentheses.")/";

// 执行该正则表达式
preg_match_all($pattern, $test_string, $matches_array);




echo "<pre>";

// 展示匹配结果
var_dump($matches_array[0]);


echo "</pre>";

















