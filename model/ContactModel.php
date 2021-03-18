<!-- model/ContactModel.php -->
<?php
    require_once "Database.php";

    class ContactModel
    {
        private $database;
        public function __construct()
        {
            // Instanciation de la DB
            $this->database = new Database();
        }
        public function insert($prenom, $nom, $telephone)
        {
            // Preparez la requete
            $queryPrepare = $this->database->ds->prepare("INSERT INTO contact(prenom, nom, telephone) VALUES (?, ?, ?)");  
            // Execution de la requete
            return $queryPrepare->execute(array($prenom, $nom, $telephone));
        }

        public function modifier($prenom, $nom, $telephone, $id)
        {
            $queryPrepare = $this->database->ds->prepare("UPDATE contact SET prenom = ?, nom = ?, telephone = ? WHERE id = ?");  
            return $queryPrepare->execute(array($prenom, $nom, $telephone, $id));
        }

        public function supprimer($id)
        {
            $req = $this->database->ds->prepare("DELETE FROM contact WHERE id = ?");
            
            // $req->bindValue(":idContact",$id);

            return $req->execute(array($id));
        }
        
        public function lister()
        {
            $req = $this->database->ds->prepare("SELECT * FROM contact ORDER BY nom");
            $req->execute();
            return $req->fetchAll();
        }

        public function findContactById($id)
        {
            $req = $this->database->ds->prepare("SELECT * FROM contact WHERE id = ?");
            $req->execute(array($id));
            return $req->fetch();
        }
    }