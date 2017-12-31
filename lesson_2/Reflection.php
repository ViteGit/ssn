<?php

/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 26.12.2017
 * Time: 18:00
 */


/**
 * Class Reflect
 */
class Reflect extends Help
{
    public static $array;

    public function init ()
    {
        self::$array = Simplenum::prost(10, 53);

        foreach (self::$array as $key => $val) {
            $s = Plochad::plotrap($val['a'], $val['b'], $val['c']);
            $f1 = Formulaf::getf($val['a'], $val['b'], $val['c']);
            $f2 = Formulaf2::getf($val['a'], $val['b'], $val['c']);
            self::$array[$key]['s'] = $s;
            self::$array[$key]['f1'] = $f1;
            self::$array[$key]['f2'] = $f2;
        }
        return  self::$array;
    }


    public function table ()
    {
        $reflectionClass = new ReflectionClass('Reflect');
        $arr = $reflectionClass->getProperty('array')->getValue();


echo '<table border="1">';
echo '<tr>';
echo '<th>a</th>';
echo '<th>b</th>';
echo '<th>c</th>';
echo '<th>площадь</th>';
echo '<th>результат формулы F</th>';
echo '<th>результат формулы F2</th>';
echo '</tr>';

for ($i = 0; $i<count($arr); $i++) {
 //   if (($arr[$i]['s'] % 2) == 1) {
    echo '<tr>';
    echo '<td>' . $arr[$i]['a'] . '</td>';
    echo '<td>' . $arr[$i]['b'] . '</td>';
    echo '<td>' . $arr[$i]['c'] . '</td>';
    echo '<td>' . $arr[$i]['s'] . '</td>';
    echo '<td>' . $arr[$i]['f1'] . '</td>';
    echo '<td>' . $arr[$i]['f2'] . '</td>';
    echo '</tr>';
   // }
}
echo '</table>';

        return TRUE;
    }
}
