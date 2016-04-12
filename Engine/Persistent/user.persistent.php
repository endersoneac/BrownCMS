<?php

namespace Persistent {

	use Engine\Index;
	use Model\User as UserM;
	use Model\User;

	Index::importModel ();
	
	include ("core.persistent.php");
	class User {
		public static function validate(UserM $user) {
			// Select para verificar login e pegar informações do usuário.
			$table = "User";
			$columns = "*";
			$where = "username='" . $user->getUsername () . "'";
			
			$consult = CorePDO::consult ( $table, $columns, $where );
			
			$user = new UserM ( $consult[0] );
			return $user;
		}
		public static function loadInfos($id) {
			// Select para carregar informações de um usuário específico.
		}
		public static function register(UserM $user) {
			try {
				$table = "user";
				$columns = array (
						"user",
						"pass",
						"firstname",
						"lastname",
						"mail",
						"level",
						"enabled" 
				);
				$values = array (
						$user->getUsername (),
						$user->getPassword (),
						$user->getFirstname (),
						$user->getLastname (),
						$user->getEmail (),
						$user->getLevel (),
						0 
				);
				
				$result = CorePDO::insert ( $table, $columns, $values );
				return $result;
			} catch ( Exception $e ) {
				throw $e;
			}
		}
		public static function alteration() {
		}
		public static function exclude($id) {
		}
		public static function listAll() {
			// Select para pegar tudo.
		}
		public static function countAll() {
			// Select que conta tudo.
		}
	}
}
?>