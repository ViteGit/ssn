<?php

/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 29.12.2017
 * Time: 13:51
 */

class Formulaf2 extends help
{
    public static $f2 = [];

    public function getf($a, $b, $c)
    {
        $xuis = new self();

        $ab = $a + $b;
        $abc = $xuis->stepen($ab, $c);
        $ac = $a / $c;
        $abcac = $abc * $ac;
        $abc_min = $xuis->min($a, $b, $c);
        self::$f2 = $xuis->stepen($abcac, $abc_min);

        return self::$f2;
    }

}