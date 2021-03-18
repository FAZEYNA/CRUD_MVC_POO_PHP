<!-- controller/contactController.php -->
<?php

    require_once 'model/ContactModel.php';

    class ContactController
    {
        public function __construct()
        {
            $this->contactModel = new ContactModel();
        }

        // Méthode gestionnaire de vues
        public function viewManager()
        { 
            $view = isset($_GET['view']) ? $_GET['view'] : NULL;
            switch ($view) {
                case 'add':
                    $this->includeView("ajout");
                    break;
                case 'update':
                    $this->includeView("modification");
                    break;
                default:
                    $this->includeView("liste");
                break;
            }

            $action = isset($_GET['action']) ? $_GET['action'] : NULL;
            switch ($action) {
                case 'add':
                    if(isset($_POST["add"]))
                    {
                        extract($_POST);
                        $this->contactModel->insert($prenom, $nom, $telephone);
                        header("location:/COURS/PHP_L2/POO/CRUD_MVC_POO/index.php");
                    }
                    break;
                case 'supprimer':
                    if(isset($_GET["id"]))
                    {
                        $resultat = $this->contactModel->supprimer($_GET["id"]);
                        if($resultat)
                        {
                            echo "<script> location.replace('index.php'); </script>";
                            // header("location:/COURS/PHP_L2/POO/CRUD_MVC_POO/index.php");
                        }
                    }
                    break;
                case 'modifier':
                    if(isset($_POST["modifier"]))
                    {
                        extract($_POST);
                        $this->contactModel->modifier($prenom, $nom, $telephone, $id);
                        header("location:/COURS/PHP_L2/POO/CRUD_MVC_POO/index.php");
                    }
                    break;
                default:
                    # code...
                    break;
            }
        }

        public function includeView($view)
        {
            // include_once "../view/liste.php"; no ..
            if($view  == "liste"){
                $contacts = $this->contactModel->lister();
            }
            else 
            {
                if($view == "modification" && isset($_GET["id"]))
                {
                    $contact = $this->contactModel->findContactById($_GET['id']);
                }
            }
            include "view/contact/".$view.".php";
        }
    }
