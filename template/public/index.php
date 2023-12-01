<?php
    // header("Location: http://localhost:8888/GSM/templates/home.php");
    
    include('../Includes/requireInIndex.php');


    $page = isset($_GET["page"]) ? $_GET["page"] : "Accueil";
    echo $page;
    if(isset($page)){
        switch ($page) {
            case 'Accueil':
                $homeController = new HomeController();
                $homeController->home();
                break;
            case 'Applications':
                $applicationsController = new ApplicationsController();
                $applicationsController->applications();
                break;
            case 'Produits':
                // $homeController->products();
                break;
            
            default:
                $errorController = new ErrorController();
                $errorController->error();
                break;
        }
    }

    echo  $page;
?>