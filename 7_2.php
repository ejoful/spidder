<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 17:25
 *
 * 使用insert()函数的例子
 */

$data_array['NAME'] = 'Jill Monroe';
$data_array['CITY'] = 'Irvine';
$data_array['STATE'] = 'CA';
$data_array['ZIP'] = '55410';
insert(DATABASE, $table="people", $data_array);


































