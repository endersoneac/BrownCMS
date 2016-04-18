<?php

namespace Engine;

	if (!defined('HOME')) define("HOME", __DIR__."/");

	
	class Index{

		public static function importModel(){			
			spl_autoload_register(function ($class) {
				$nome = str_replace("\\", "/" , $class . '.class.php');
 				if( file_exists( HOME . $nome ) ){
 					include_once( HOME . $nome );
 				}
			});
		}
		
		public static function importController(){
			spl_autoload_register(function ($class) {
				$nome = str_replace("\\", "/" , $class . '.controller.php');
				if( file_exists( HOME . $nome ) ){
					include_once( HOME . $nome );
				}
			});
		}
		
		public static function importPersistent(){
			spl_autoload_register(function ($class) {
				$nome = str_replace("\\", "/" , $class . '.persistent.php');
				if( file_exists( HOME . $nome ) ){
					include_once( HOME . $nome );
				}
			});
		}
		
	}
?>