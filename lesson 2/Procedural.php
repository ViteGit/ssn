<?php
/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 27.12.2017
 * Time: 0:45
 */

/**
 * @param $n
 * @return array
 */
function sieve($n)
{
    $s = [];
    for ($i = 10; $i <= $n; $i++) {
        $s[] = $i;
    }

    foreach ($s as $key => $value) {
        for ($k = 2; $k * $k <= $n; $k++) {
            if ($value % $k == 0 && $value != $k) {
                unset ($s[$key]);
            }
        }
    }
    return $s;
}

$s = sieve(53);
$array_keys = ['a', 'b', 'c'];
$array_chunk = array_chunk($s, 3);

foreach ($array_chunk as $key => $value) {
    $array_combine[] = array_combine($array_keys, $value);
}

/**
 * @param $arr
 * @return float|int
 */
function plotrap($arr)
{
    $res = 1 / 2 * ($arr['a'] + $arr['b']) * $arr['c'];
    return $res;
}

foreach ($array_combine as $key => $value) {
    $res = plotrap($value);
    $array_combine[$key]['s'] = $res;
}


/**
 * @param $array
 * @return mixed
 */

function AlmostMaxNumber($array)
{
    $max = max($array);
    if ($max['s'] > 1400) {
        $IndexToDelete = array_search($max, $array);
        unset($array[$IndexToDelete]);
        $max = max($array);
        return $max;
    }
}

do {
    $max = AlmostMaxNumber($array_combine);
    echo $max['a'] . ' ' . $max['b'] . ' ' . $max['c'] . '<br>';
} while (0);

/**
 * @param $o
 * @param $s
 * @return mixed
 */
function powww($o, $s)
{
    $r = $o;
    for ($i = 1; $i < $s; $i++) {
        $r = $r * $o;
    }
    return $r;
}

/**
 * @param $arr
 * @return int|string
 */
function MinNumber($arr)
{
    $min = 0;
    for ($i = 0; $i < count($arr); $i++) {
        foreach ($arr[$i] as $key => $val) {
            if (is_numeric($val) && $min == 0) {
                $min = $val;
            }
            if (is_numeric($val) && $val < $min) {
                $min = $val;
            }
        }
    }
    return $min;
}

/**
 * @param $a
 * @param $b
 * @param $c
 * @return mixed
 */

function minf($a, $b, $c)
{
    if ($a <= $b && $a <= $c) {
        return $a;
    } else if ($b <= $a && $b <= $c && $b) {
        return $b;
    } else if ($c <= $a && $c <= $b) {
        return $c;
    }
}

/**
 * @param $a
 * @param $b
 * @param $c
 * @return mixed
 */

function raschet($a, $b, $c)
{
    $ab = $a * $b;
    $first = (powww($ab, $c));

    $ac = $a / $c;
    $second = (powww($ac, $b));
    $res = $second % 3;

    $min = minf($a, $b, $c);
    $final = powww($res, $min);

    $f = $first + $final;

    return $f;

}

foreach ($array_combine as $key => $value) {
    $f = raschet($value['a'], $value['b'], $value['c']);
    $array_combine[$key]['f'] = $f;
}

//----------------------

for ($i = 0; $i < count($array_combine); $i++) {
    if (($array_combine[$i]['s'] % 2) == 1) {
        $array_combine[$i]['s'] &= $array_combine[$i]['s'];

    }

}

?>