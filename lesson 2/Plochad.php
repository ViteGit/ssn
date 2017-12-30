<?php

/**
 * Created by PhpStorm.
 * User: Вован
 * Date: 29.12.2017
 * Time: 13:52
 */
class Plochad
{
    public static $r;

    public static function plotrap($a, $b, $c)
    {
        self::$r = 1 / 2 * ($a + $b) * $c;
        return self::$r;
    }
}
