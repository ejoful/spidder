<?php
/**
 * Created by PhpStorm.
 * User: TopSage
 * Date: 2015/11/25
 * Time: 14:09
 *
 * ��ʼ���۸������������
 *
 */

# ��ʼ��
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_http.php");
include("./WebbotsSpidersScreenScraper_Libraries_REV2_0/LIB_parse.php");
$product_array = [];
$product_count = 0;

# ����Ŀ�꣨��ϰ�̵꣩��ҳ
$target = "http://webbotsspidersscreenscrapers.com/example_store";
$web_page = http_get($target, "");

#����������һ��������
$table_array = parse_array($web_page['FILE'], "<table", "</table>");


# ���ÿһ����񣬲���·���ı��Ƿ����
for($xx = 0; $xx < count($table_array); $xx++)
{
    $table_landmark = "Products For Sale";
    if(stristr($table_array[$xx], $table_landmark)) {
        echo "FOUND: Product table\n";
        $product_row_array = parse_array($table_array[$xx], "<tr", "</tr>");

        for($table_row = 0; $table_row < count($product_row_array); $table_row++)
        {
            # ̽���������ݵĿ�ʼλ��(��ͷ�У�
            $heading_landmark = "Condition";
            if((stristr($product_row_array[$table_row], $heading_landmark))) {
                echo "Found: Table heading row\n";

                # ��ȡ�����ͷ��λ��
                $table_cell_array = parse_array($product_row_array[$table_row], "<td", "</td>");
                for($heading_cell = 0; $heading_cell < count($table_cell_array); ++$heading_cell)
                {
                    if(stristr(strip_tags(trim($table_cell_array[$heading_cell])), "ID#")) {
                        $id_column = $heading_cell;
                    }
                    if(stristr(strip_tags(trim($table_cell_array[$heading_cell])), "Product name")) {
                        $name_column = $heading_cell;
                    }
                    if(stristr(strip_tags(trim($table_cell_array[$heading_cell])), "Price")) {
                        $price_column = $heading_cell;
                    }
                }

                echo "FOUND: id_column = $id_column\n";
                echo "FOUND: price_column = $price_column\n";
                echo "FOUND: name_column = $name_column\n";

                # �����ͷ�й�����ʹ��
                $heading_row = $table_row;
            }

            #���Ŀ�����ݱ�Ľ���
            $ending_landmark = "Calculate";
            if((stristr($product_row_array[$table_array], $ending_landmark))) {
                echo "PARSING COMPLETE!\n";
                break;
            }

            #������Ʒ�ͼ۸�����
            if(isset($heading_row) && $heading_row < $table_row) {
                $table_cell_array = parse_array($product_row_array[$table_row], "<td", "</td>");
                $product_array[$product_count]['ID'] = strip_tags(trim($table_cell_array[$id_column]));
                $product_array[$product_count]['NAME'] = strip_tags(trim($table_cell_array[$name_column]));
                $product_array[$product_count]['PRICE'] = strip_tags(trim($table_cell_array[$price_column]));

                ++$product_count;
                echo "PROCESSED: Item #$product_count\n";
            }
        }
    }
}





# չʾ�ռ���������
for($xx = 0; $xx < count($product_array); $xx++)
{
    echo "$xx. ";
    echo "ID: " . $product_array[$xx]['ID'] . ", ";
    echo "NAME: " . $product_array[$xx]['NAME'] . ", ";
    echo "PRICE: " . $product_array[$xx]['PRICE'] . "\n";
}







