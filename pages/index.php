<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../core/Core.php';
session_start();
$core = new Core();
if (isset($_POST["generatePreformer"]))
  {
	  //getVariables
	  $materila = htmlentities(htmlspecialchars($_POST["pref_material"]));
  header("Location:../ubnk/index.php?action=newPreformer&materials=".$material);
	  
  }
    
  //this code is for getting the materials details for materials using ajax request
  if(isset($_POST["getMaterialDetails"]))
    {
    $mat = $_POST['material'];
    $reply = $core->getAllStockDetails($mat);
    echo json_encode($reply);
    
    
    }
    
	