<?php
namespace Model{
	class User{
		
		private $iduser = NULL;
		private $username = NULL;
		private $password = NULL;		
		private $firstname = NULL;
		private $lastname = NULL;
		private $email = NULL;
		private $level = NULL;
		private $enabled = NULL;
		
		
		// ------------------
		// Getters and Setters
		// ------------------
		
		
		// Get e Set -- IdUser
		public function getIduser() {
			return $this->iduser;
		}
		public function setIduser($iduser) {
			$this->iduser = $iduser;
			return $this;
		}
		
		// Get e Set -- UserName
		public function getUsername() {
			return $this->username;
		}
		public function setUsername($username) {
			$this->username = $username;
			return $this;
		}
		
		// Get e Set -- Password
		public function getPassword() {
			return $this->password;
		}
		public function setPassword($password) {
			$this->password = $password;
			return $this;
		}
		
		// Get e Set -- FirstName
		public function getFirstname() {
			return $this->firstname;
		}
		public function setFirstname($firstname) {
			$this->firstname = $firstname;
			return $this;
		}
		
		
		// Get e Set -- LastName
		public function getLastname() {
			return $this->lastname;
		}
		public function setLastname($lastname) {
			$this->lastname = $lastname;
			return $this;
		}
		
		// Get e Set -- Email
		public function getEmail() {
			return $this->email;
		}
		public function setEmail($email) {
			$this->email = $email;
			return $this;
		}
		
		// Get e Set -- Level
		public function getLevel() {
			return $this->level;
		}
		public function setLevel($level) {
			$this->level = $level;
			return $this;
		}
		
		// Get e Set -- Enabled
		public function getEnabled() {
			return $this->enabled;
		}
		public function setEnabled($enabled) {
			$this->enabled = $enabled;
			return $this;
		}
		
		// ------------------
		// Constructor / Destructor
		// ------------------
		
		function __construct(){
			//Verifica o nъmero de parвmetros no construtor, e executa funзгo com o nъmero de parвmetros correto.
			$args = func_get_args();
			$numberOfArgs = func_num_args();
			if (method_exists($this,$funtion='__construct'.$numberOfArgs)) {
				call_user_func_array(array($this,$funtion),$args);
			}
		}
		
		function __construct1($id){
			$this->setIduser($id);
		}
		
		function __construct2($user,$pass){
			$this->setUsername($user);
			$this->setPassword($pass);
		}
		
		function __construct6($user,$pass,$firstname,$lastname,$mail,$level){
			$this->setUsername($user);
			$this->setPassword($pass);
			$this->setFirstname($firstname);
			$this->setLastname($lastname);
			$this->setEmail($mail);
			$this->setLevel($level);
		}
		
		function __construct8($id,$user,$pass,$firstname,$lastname,$mail,$level,$enabed){
			$this->setIduser($id);
			$this->setUsername($user);
			$this->setPassword($pass);
			$this->setFirstname($firstname);
			$this->setLastname($lastname);
			$this->setEmail($mail);
			$this->setLevel($level);
			$this->setEnabled($enabed);
		}
		
		// Empty Constructor
		public function __construct0(){}
		// Destructor
		public function __destruct(){}
		
	}
}
?>