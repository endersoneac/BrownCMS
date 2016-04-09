<?php
	class Stack{
		
		private $idStack = null;
		private $author = null;
		private $contact = null;
		private $name = null;
		private $description = null;
		private $version = null;
		private $type = null;		
		private $licence = null;
		
		// ------------------
		// Getters and Setters
		// ------------------
		
		// Get e Set -- IdStack
		public function getIdStack() {
			return $this->idStack;
		}
		public function setIdStack($idStack) {
			$this->idStack = $idStack;
			return $this;
		}
		
		// Get e Set -- Author
		public function getAuthor() {
			return $this->author;
		}
		public function setAuthor($author) {
			$this->author = $author;
			return $this;
		}
		
		// Get e Set -- Contact
		public function getContact() {
			return $this->contact;
		}
		public function setContact($contact) {
			$this->contact = $contact;
			return $this;
		}
		
		// Get e Set -- Name
		public function getName() {
			return $this->name;
		}
		public function setName($name) {
			$this->name = $name;
			return $this;
		}
		
		// Get e Set -- Description
		public function getDescription() {
			return $this->description;
		}
		public function setDescription($description) {
			$this->description = $description;
			return $this;
		}
		
		// Get e Set -- Version
		public function getVersion() {
			return $this->version;
		}
		public function setVersion($version) {
			$this->version = $version;
			return $this;
		}
		
		// Get e Set -- Type
		public function getType() {
			return $this->type;
		}
		public function setType($type) {
			$this->type = $type;
			return $this;
		}
		
		// Get e Set -- Licence
		public function getLicence() {
			return $this->licence;
		}
		public function setLicence($licence) {
			$this->licence = $licence;
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