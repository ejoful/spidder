<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/23
 * Time: 17:29
 *
 * ���±������ݵĽű�����
 */

$data_array['NAME'] = 'Jill Monroe';
$data_array['CITY'] = 'Irvine';
$data_array['STATE'] = 'CA';
$data_array['zip'] = '92604';

update(DATABASE, $table="people", $data_array, $key_column="ID", $id="3");


































