<?php

class ErrorController{

    public function error(){
        $errorView = new ErrorView();
        $errorView->render();
    }
}

?>