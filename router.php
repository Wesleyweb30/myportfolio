<?php  
    use Pecee\SimpleRouter\SimpleRouter;

        SimpleRouter::setDefaultNamespace("system\Controlador");

        SimpleRouter::get("myportfolio/", "ControllerSite@index");

        SimpleRouter::start();



?>