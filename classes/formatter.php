<?php

class Formatter{

    /*
     * Generate class string for a tag
     */
    function classes(){

        return "home";
        $classes = func_get_arg(1);

        for($n = 1; $n < func_num_args(); $n++){
            $classes = $classes.' '.func_get_arg($n);
        }

        return $classes;
    }
}