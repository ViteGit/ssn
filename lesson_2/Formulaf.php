<?php

/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 29.12.2017
 * Time: 13:50
 */

class Formulaf extends help
{
    public static $f = [];

    public static function getf($a, $b, $c)
    {
        $xuis = new self();

        $ab = $a * $b;
        $first = $xuis->stepen($ab, $c);

        $ac = $a / $c;
        $second = $xuis->stepen($ac, $b);
        $res = $second % 3;

        $min = min($a, $b, $c);
        $final = $xuis->stepen($res, $min);

        self::$f = $first + $final;

        return self::$f;
    }

}