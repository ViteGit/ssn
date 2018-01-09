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
class Reflect extends Chelp
{
    public $array;

    public function init ()
    {
        $simples = [];
        $simples = $this->prost(11, 53);
        $simples = $this->megamassive($simples);

        $this->array = $simples;

        $form1 = new Formulaf;
        $form2 = new Formulaf2;

        foreach ($this->array as $key => $val) {
            $s = $this->plotrap($val['a'], $val['b'], $val['c']);
            $f1 = $form1->getf($val['a'], $val['b'], $val['c']);
            $f2 = $form2->getf($val['a'], $val['b'], $val['c']);
            $this->array[$key]['s'] = $s;
            $this->array[$key]['f1'] = $f1;
            $this->array[$key]['f2'] = $f2;
        }
        return  $this->array;
    }


    public function table ()
    {
        $arr = $this->array;

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
