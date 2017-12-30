<?php

/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 29.12.2017
 * Time: 13:47
 */

class Simplenum extends help
{
    public static $s = [];

    public static function prost($f, $n)
    {
        for ($i = $f; $i <= $n; $i++) {
            self::$s[] = $i;
        }

        foreach (self::$s as $key => $value) {
            for ($k = 2; $k * $k <= $n; $k++) {
                if ($value % $k == 0 && $value != $k) {
                    unset (self::$s[$key]);
                }
            }
        }

        $obj = new self();
        self::$s = $obj->megamassive(self::$s);

        return self::$s;
    }
}






