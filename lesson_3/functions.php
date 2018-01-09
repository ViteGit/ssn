<?php
/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 02.01.2018
 * Time: 0:11
 */

//include 'baseException.php';


/**
 * @param $arr
 */
function debug($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

$str = "abcdbcebcab";
$substr = "ab";

/**
 * @param $str
 * @param $substr
 * @return bool|string
 */

function revstr($str, $substr)
{
    $del = "~($substr)~";
    $arr = preg_split($del, $str, -1, PREG_SPLIT_DELIM_CAPTURE);
    $del = $substr;
    $keys = array_keys($arr, $del);

    if (isset($keys[1])) {
        $revstr = $arr[$keys[1]];
        $revstr = strrev($revstr);
        $arr[$keys[1]] = $revstr;
    } else {
        return false;
    }

    $res = implode($arr);
    return $res;
}

$array = [['a' => 3], ['a' => 2, 'b' => 8], ['a' => 1, 'b' => 2], ['a' => 99, 'b' => 80], ['a' => 90, 'b' => 1]];


/**
 * @param $array
 * @param $param int 3|4
 * @param $field string 'a|b'
 * @return mixed
 */

function customMultiSort($array, $param, $field)
{
    if ($field !== 'a' && $field !== 'b') {
        throw new Exception('Неверное значение аргумента');
    }

    $tmp_arr = array();
    foreach ($array as $key => $val) {
        $tmp_arr[$key] = $val[$field];
    }

    array_multisort($tmp_arr, $param, $array);

    return $array;
}

//$ar = customMultiSort($array, SORT_DESC, 'd');


try {
    $ar = customMultiSort($array, SORT_DESC, 'b');
} catch (Exception $e) {
    echo 'Неправильное значение аргумента, допустимые значения: a | b';
}


var_dump($ar);

echo '<pre>';
var_export($ar);
echo '</pre>';

debug($ar);




