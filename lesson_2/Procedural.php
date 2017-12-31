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
    //echo $max['a'] . ' ' . $max['b'] . ' ' . $max['c'] . '<br>';
} while (0);

echo 'размеры трапеции, у которой максимальная площадь, но не больше 1400';
var_dump(AlmostMaxNumber($array_combine));

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


echo '<table border="1">';
echo '<tr>';
echo '<th>a</th>';
echo '<th>b</th>';
echo '<th>c</th>';
echo '<th>площадь трапеции</th>';
echo '<th>результат формулы F</th>';
echo '</tr>';

for ($i = 0; $i<count($array_combine); $i++) {
        echo '<tr>';
        echo '<td>' . $array_combine[$i]['a'] . '</td>';
        echo '<td>' . $array_combine[$i]['b'] . '</td>';
        echo '<td>' . $array_combine[$i]['c'] . '</td>';
        echo '<td>' . $array_combine[$i]['s'] . '</td>';
        echo '<td>' . $array_combine[$i]['f'] . '</td>';
        echo '</tr>';
}
echo '</table>';

//----------------------
echo '<br>';

echo '<table border="1">';
echo '<tr>';
echo '<th>a</th>';
echo '<th>b</th>';
echo '<th>c</th>';
echo '<th>площадь трапеции</th>';
echo '<th>результат формулы F</th>';
echo '</tr>';

for ($i = 0; $i<count($array_combine); $i++) {
       if (($array_combine[$i]['s'] % 2) == 1) {
    echo '<tr>';
    echo '<td>' . $array_combine[$i]['a'] . '</td>';
    echo '<td>' . $array_combine[$i]['b'] . '</td>';
    echo '<td>' . $array_combine[$i]['c'] . '</td>';
    echo '<td>' . $array_combine[$i]['s'] . '</td>';
    echo '<td>' . $array_combine[$i]['f'] . '</td>';
    echo '</tr>';
     }
}
echo '</table>';



