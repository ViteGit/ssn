<?php
/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 02.01.2018
 * Time: 0:11
 */

$str = "abcdbcebcab";
$substr = "ab";

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


echo revstr($str, $substr);
