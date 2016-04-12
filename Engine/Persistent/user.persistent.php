<?php

namespace Persistent {

	use Engine\Index;
	use Model\User as UserM;

	Index::importModel ();
	
	include ("core.persistent.php");
	class User {
		public static function validate($user, $pass) {
			// Select para verificar login e pegar informa��es do usu�rio.
		}
		public static function loadInfos($id) {
			// Select para carregar informa��es de um usu�rio espec�fico.
		}
		public static function register($u) {
			$user = new UserM($u);
			try {
				$table = "user";
				$columns = array("user","pass","firstname","lastname","mail","level","enabled");
				$values = array(
						$user->getUsername(),
						$user->getPassword(),
						$user->getFirstname(),
						$user->getLastname(),
						$user->getEmail(),
						$user->getLevel(),
						0);
					
				$result = CorePDO::insert($table, $columns, $values);
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