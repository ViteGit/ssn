<?php

/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 29.12.2017
 * Time: 13:51
 */

class Formulaf2 extends Chelp
{
    public $f2 = [];

    public function getf($a, $b, $c)
    {
        $abc = $this->stepen($a + $b, $c);
        $ac = $a / $c;
        $abcac = $abc * $ac;

        $arr = [$a, $b, $c];
        $abc_min = $this->custom_min($arr);

        $this->f2 = $this->stepen($abcac, $abc_min);

        return $this->f2;
    }

}