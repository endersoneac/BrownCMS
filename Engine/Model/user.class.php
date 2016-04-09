<?php
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
		
		
		// Empty Constructor
		public function __construct(){}
		
		// Destructor
		public function __destruct(){}
		
	}
?>