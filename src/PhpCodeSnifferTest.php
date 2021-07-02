<?php


class PhpCodeSnifferTest
{

    public $string = "Some text here";

    function test () {
        if($string  ){  
            print_r($string);
        }
    }
}