<?php

namespace Controller {

	use Engine\Index;
	use Persistent\User as Persist;
	use Model\User as UserM;

	Index::importModel ();
	Index::importPersistent ();
	
	class User{
		
		public static function validate($user, $pass){}
		
		public static function loadInfos($id){}
		
		public static function register($user,$pass,$firstname,$lastname,$mail,$level){
			
			$user = new UserM($user,$pass,$firstname,$lastname,$mail,$level);
			
			try{
				$result = Persist::register($user);
				return $result;
			}catch (Exception $e){
				throw $e;
			}
		}
		
		public static function alteration(){}
		
		public static function exclude($id){}
		
		public static function listAll(){
			return UserP::listAll();
		}
		
		public static function countAll(){
			return UserP::countAll();
		}
		
		
	}
}
?>