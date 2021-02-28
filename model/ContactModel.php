<!-- model/ContactModel.php -->
<?php
    require_once "Database.php";

    class ContactModel
    {
        private $database;
        public function __construct()
        {
            $this->database = new Database();
        }
        public function insert($prenom, $nom, $telephone)
        {
            
        }
        public function modifier($prenom, $nom, $telephone, $id)
        {
            
        }
        public function supprimer($id)
        {
            
        }
        public function lister()
        {
            
        }
    }