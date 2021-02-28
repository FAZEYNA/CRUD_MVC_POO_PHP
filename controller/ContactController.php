<!-- controller/contactController.php -->
<?php
    class ContactController
    {
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
        }

        public function includeView($view)
        {
            // include_once "../view/liste.php"; no ..
            include_once "view/contact/".$view.".php";
        }
    }
