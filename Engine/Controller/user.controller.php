<?php

namespace Controller {

	use Engine\Index;
	use Controller\Security as Security;
	use Persistent\User as Persist;
	use Model\User as UserM;

	Index::importModel ();
	Index::importPersistent ();
	class User {
		public static function validate($user, $pass) {
			$user = new UserM ( $user, $pass );
			
			if ($user = Persist::validate ( $user )) {
				if (Security::unlockInfo ( $pass, $user->getPassword () )) {
					//Criar Session e inserir dados do usuário
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}
		public static function loadInfos($id) {
		}
		public static function register($user, $pass, $firstname, $lastname, $mail, $level) {
			$pass = Security::lockInfo ( $pass );
			$user = new UserM ( $user, $pass, $firstname, $lastname, $mail, $level );
			
			try {
				$result = Persist::register ( $user );
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
			return UserP::listAll ();
		}
		public static function countAll() {
			return UserP::countAll ();
		}
	}
}
?>