<?php

class HomeController{

    public function home(){
        $homeModel = new HomeModel();
        $arrayData = $homeModel->getData();

        $homeView = new HomeView();
        $homeView->render($arrayData);
    }
}

?>