<?php


class help
{
    public static function debug($test)
    {
        echo '<pre>';
        print_r ($test);
        echo '</pre>';
    }

    protected function megamassive($arr)
    {
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
        for($i=1; $i<$b; $i++){
            $r = $r*$a;
        }
        return $r;
    }

    protected function min ($a, $b, $c){
        if ($a <= $b && $a <= $c) {
            return $a;
        }
        else if ($b <= $a && $b <= $c && $b) {
            return $b;
        }
        else if ($c <= $a && $c <= $b) {
            return $c;
        }
    }
}