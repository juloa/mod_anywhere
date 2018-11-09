<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

class Anywhere {

	private	$blocks = array();

	function get($block) {
		if (isset($this->blocks[$block])) {
			return $this->blocks[$block];
		}
	}

	function set($block,$content) {
		$this->blocks[$block]=$content;
	}
	
   private static $_instance = null;
 
   private function __construct() {  
   }
 
   public static function getInstance() {
 
     if(is_null(self::$_instance)) {
       self::$_instance = new Anywhere();  
     }
 
     return self::$_instance;
   }
}

