<?php
/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 02.01.2018
 * Time: 0:11
 */

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

//echo revstr($str, $substr);


$array = [['a' => 3], ['a' => 2, 'b' => 8], ['a' => 1, 'b' => 2], ['a' => 99, 'b' => 80], ['a' => 90, 'b' => 1]];


/**
 * @param $array
 * @param $param int 3|4
 * @param $field string 'a|b'
 * @return mixed
 */

function customMultiSort($array, $param, $field)
{

    $tmp_arr = array();
    foreach ($array as $key => $val) {
        $tmp_arr[$key] = $val[$field];
    }

    array_multisort($tmp_arr, $param, $array);

    return $array;
}

$ar = customMultiSort($array, SORT_DESC, 'a');

//debug($ar);