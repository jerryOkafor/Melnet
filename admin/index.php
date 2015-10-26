<?php
require_once '../core/config.php';
$templatePath = "$path/temp/smarty/templates";
require "$path/Smarty/libs/Smarty.class.php";
require_once '../core/smarty.init.php';
require_once '../classes/Authenticate.php';
require_once '../classes/Connection.php';
ob_start();
session_start();
$auth = new Authenticate();
  
 $smarty->assign("title","Admin Page");



 
 	      if (isset($_GET["view"])) {
		   $view =htmlspecialchars( $_GET["view"]);

		 if ($view == "addAUser") {     
		//grab the feed back info if it is set already  
	      $fbk = isset($_GET['feedback'])? $_GET["feedback"]:"";	
	      $smarty->assign("feedback",$fbk);	      
	       $smarty->assign("mainContent",$smarty->fetch("addAUser.tpl"));

		 }else if ($view == "adminView")   {
		   
		   }else
		   {
		   $smarty->assign("mainContent","<p>Welcome to the admin main page where the admin can make the following changes listed in the menu by the side!</p>
		  <p>Select one fo the options by the side menu and carry out the function.</p>");
		   }

	      }
	    else
	      {
	       $smarty->assign("mainContent","<p>Welcome to the admin main page where the admin can make the following changes listed in the menu by the side!</p>
	<p>Select one fo the options by the side menu and carry out the function.</p>	
");
	      }
	      
	       $smarty->display("admin.tpl");
	       
	       
if(isset($_POST["addUserAction"]))
  {
  //start grabing useful values
  $username =  htmlentities(htmlspecialchars($_POST["userName"]));
  $password =  htmlentities(htmlspecialchars($_POST["password"]));  
  $email =  htmlentities(htmlspecialchars($_POST["email"]));
  $loginType =  htmlentities(htmlspecialchars($_POST["loginType"]));
  
  if ($loginType=="")
    {
    header("Location:../admin/index.php?view=addAUser&feedback=You must choose a privelege for the user you wish to add!");
    }
    else
    {
      if($auth->createUser($email, $username, $password,$loginType))
	{
	
	 header("Location:../admin/index.php?view=addAUser&feedback=User added succesfully! You can now login'");
    
	}
            else
	{
	 header("Location:../admin/index.php?view=addAUser&feedback='An Error ocured trying to add the user!'");
    
	}
    }
  }




	      