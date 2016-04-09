<?php
	class Contact{
		
		private $idcontact = null;
		private $date = null;
		private $subject = null;
		private $content = null;
		private $idsender = null; // externo
		private $read = null;
		
		// ------------------
		// Getters and Setters
		// ------------------
		
		// Get e Set -- IdContact
		public function getIdcontact() {
			return $this->idcontact;
		}
		public function setIdcontact($idcontact) {
			$this->idcontact = $idcontact;
			return $this;
		}
		
		// Get e Set -- Date
		public function getDate() {
			return $this->date;
		}
		public function setDate($date) {
			$this->date = $date;
			return $this;
		}
		
		// Get e Set -- Subject
		public function getSubject() {
			return $this->subject;
		}
		public function setSubject($subject) {
			$this->subject = $subject;
			return $this;
		}
		
		// Get e Set -- Content
		public function getContent() {
			return $this->content;
		}
		public function setContent($content) {
			$this->content = $content;
			return $this;
		}
		
		// Get e Set -- IdSender
		public function getIdsender() {
			return $this->idsender;
		}
		public function setIdsender($idsender) {
			$this->idsender = $idsender;
			return $this;
		}
		
		// Get e Set -- Read
		public function getRead() {
			return $this->read;
		}
		public function setRead($read) {
			$this->read = $read;
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