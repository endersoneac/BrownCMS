<?php
namespace Model{
	class Sender{
		
		private $idsender = NULL;
		private $firstname = null;
		private $lastname = null;
		private $email = null;
		private $phone = null;
		

		// ------------------
		// Getters and Setters
		// ------------------
		
		
		// Get e Set -- IdSender
		public function getIdsender() {
			return $this->idsender;
		}
		public function setIdsender($idsender) {
			$this->idsender = $idsender;
			return $this;
		}
		
		// Get e Set -- First Name
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
		
		// Get e Set -- Phone
		public function getPhone() {
			return $this->phone;
		}
		public function setPhone($phone) {
			$this->phone = $phone;
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
}
?>