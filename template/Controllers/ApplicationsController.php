<?php

class ApplicationsController{

    public function applications(){
        $applicationsView = new ApplicationsView();
        $applicationsView->render();
    }
}

?>