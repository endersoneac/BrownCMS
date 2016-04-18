<?php

namespace Stack;

	if (!defined('HOME')) define("HOME", __DIR__."/");

	
	class Index{

		public static function importStack(){			
			spl_autoload_register(function ($class) {
				$nome = str_replace("\\", "/" , $class . '.default.php');
 				if( file_exists( HOME . $nome ) ){
 					include_once( HOME . $nome );
 				}
			});
		}		
	}
?>