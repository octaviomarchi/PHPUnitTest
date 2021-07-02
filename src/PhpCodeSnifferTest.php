<?php

/**
 * File doc
 * PHP version 7.4
 * 
 * @category Category
 * @package  Package
 * @author   Octavio <octavio.marchi@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     5
 */
/**
 * Class doc
 * 
 * @category Category
 * @package  Package
 * @author   Octavio <octavio.marchi@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     5
 */
class PhpCodeSnifferTest
{

    public $string = "Some text here";

    /**
     *  Func doc
     * 
     * @return void
     */
    function test() {
        if( $this->string) {
            print_r ($this->string );
        }
    }
}
