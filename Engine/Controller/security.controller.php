<?php

namespace Controller {

	class Security {
		public static function lockInfo($info) {
			$count = strlen ( $info );
			if ($count > 20) {
				$count = 20;
			} else if ($count < 10) {
				$count = 10;
			}
			
			$options = [ 
					'cost' => $count,
					'salt' => mcrypt_create_iv ( 22, MCRYPT_DEV_URANDOM ) 
			];
			
			$locked = password_hash ( $info, PASSWORD_BCRYPT, $options );
			
			return $locked;
		}
		public static function unlockInfo($pass, $lock) {
			$info = password_verify ( $pass, $lock );
			return $info;
		}
	}
}

?>