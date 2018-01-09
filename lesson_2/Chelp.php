<?php


class Chelp
{
    public static function debug($test)
    {
        echo '<pre>';
        print_r ($test);
        echo '</pre>';
    }

    protected function prost($f, $n)
    {
        $s = [];

        for ($i = $f; $i <= $n; $i++) {
            $s[] = $i;
        }

        foreach ($s as $key => $value) {
            for ($k = 2; $k * $k <= $n; $k++) {
                if ($value % $k == 0 && $value != $k || $value == 1 || $value == 2) {
                    unset ($s[$key]);
                }
            }
        }
        return $s;
    }

    protected function megamassive($arr)
    {
        $array = [];
        $array_keys = ['a', 'b', 'c'];
        $array_chunk = array_chunk($arr, 3);

        foreach ($array_chunk as $key => $value) {
        $array[] = array_combine($array_keys, $value);
        }

        return $array;
    }

    protected function stepen($a, $b)
    {
        $r = $a;
        if ($r !== 0) {
            for ($i = 1; $i < $b; $i++) {
                $r *= $a;
            }
        } else $r = 1;

        return $r;
    }

    protected function custom_min($ar)
    {
        $r = 0;

        foreach ($ar as $k => $v) {
            if ($r == 0) {
                $r = $v;
            } elseif ($r > $v) {
                $r = $v;
            }
        }
            return $r;
    }

    protected function plotrap($a, $b, $c)
    {
        $r = 1 / 2 * ($a + $b) * $c;
        return $r;
    }

}

