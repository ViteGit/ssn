<?php

/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 29.12.2017
 * Time: 13:50
 */

class Formulaf extends Chelp
{
    public $f = [];

    public function getf($a, $b, $c)
    {
        $first = $this->stepen($a * $b, $c);

        $second = $this->stepen($a / $c, $b);
        $res = $second % 3;

        $arr = [$a, $b, $c];
        $min = $this->custom_min($arr);
        $final = $this->stepen($res, $min);

        $this->f = $first + $final;

        return $this->f;


    }



}