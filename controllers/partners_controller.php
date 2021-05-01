<?php 
    require "../admin/config.php";
    require_once("../models/partners_model.php");

    $partners = new PartnerModel();
    $resultados= $partners->get_partners();

    
    require '../views/fundaciones.view.php';

?>