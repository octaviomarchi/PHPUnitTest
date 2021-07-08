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
class codestyle {
	public $foo = "bar";

	/**
	 * small description
	 *
	 * @param string $bar bar
	 *
	 * @return void
	 */
	function foo($bar)
	{
		if(!empty($bar)) {
			echo $bar;
		}
	}
}
