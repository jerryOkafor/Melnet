<?php
require_once 'core/config.php';
$templatePath = "$path/temp/smarty/templates";
require "$path/Smarty/libs/Smarty.class.php";
require_once 'core/smarty.init.php';
require_once 'classes/Authenticate.php';
require_once 'classes/Connection.php';
ob_start();
session_start();
//echo $_SERVER["REMOTE_ADDR"];
$auth = new Authenticate();
//$pass1 = $auth->resetPassword("user1",2);
//$pass2 = $auth->resetPassword("user2",3);
//$pass3 = $auth->resetPassword("admin",12);
//$smarty->assign("pass",$pass1."<br/>".$pass2."<br>".$pass3);

$token = isset($_SESSION['token'])? $_SESSION["token"]:"";
$id = isset($_SESSION['user_id'])? $_SESSION["user_id"]:0;

if (!$auth->isLogedin($token, $id)) {
	//Not logged in, send to login page.
  $msg = isset($_GET['loginerrorfeed'])? $_GET["loginerrorfeed"]:"";
  $smarty->assign("message",$msg);
   	  go_homeforlogin();
	
	$smarty->display("index.tpl");
	  
	  
	  }
	  else {
	      //user is loged in and making request
          
	      if (isset($_GET["view"])) {
		   $view =htmlspecialchars( $_GET["view"]);

		 if ($view == "homeView") {     
		   go_homeforlogedin();

		 }else if ($view == "adminView")   {

		     //include_once 'adminmainpage.php';
		  if(!$auth->isAdmin($_SESSION["user_id"]))
		    {
		    //direct user to the admin main page
		    header("Location:../melnet/admin");
			
		     }else//user is loged in but not as admin
			  {

		go_homeforlogedin();
			  }
	  }//end admin view code
	  else if ($view == "totalView")   {

		     //check if user has acces to total view
		  if($auth->isUser1($auth->selectSessionData($_SESSION["user_id"])))
		    {
		    //direct user to the total homepage
		    header("Location:../melnet/total");
			
		     }else//user is loged in but not as admin
			  {

				   go_homeforlogedin();
			  }
	 }//end total view code.
	 else if ($view == "ubnkView")   {

		     //ceck if user has acces to view uba
		  if($auth->isUser1($auth->selectSessionData($_SESSION["user_id"])))
		    {
		    //direct user to the admin main page
		    header("Location:../melnet/ubnk");
			
		     }else//user is loged in but has no access to ubaView
			  {

				   go_homeforlogedin();
				   //add error notice
			  }
		 }//end uba view codes
		 else if ($view == "nlngView")   {

		     //include_once 'adminmainpage.php';
		  if($auth->isUser1($auth->selectSessionData($_SESSION["user_id"])))
		    {
		    //direct user to the admin main page
		    header("Location:../melnet/nlng");
			
		     }else//user is loged in but not as admin
			  {

				   go_homeforlogedin();
			  }
	}//end nlng view codes
	 else //no specific access of the index page
			   {

			     go_homeforlogedin();
			   }
			 }//end if isset get_View
			 else {
			   //user is loged in but not accsessing any particular page/view, view not set
			   
				 go_homeforlogedin();
			 }

	     $msg = isset($_GET['loginerrorfeed'])? $_GET["loginerrorfeed"]:"";
	     $smarty->assign("message",$msg);
			 $smarty->display("index.tpl");


	       }//end else user is loged in and making request
	       


if(isset($_POST["submit"]))
	{	
	$username =  htmlentities(htmlspecialchars($_POST["username"]));
	$password =  htmlentities(htmlspecialchars($_POST["password"]));
	
	
	if(!empty($username)&&!empty($password))
	{
	 // echo $username.$password.$logintype;
	  $reply = $auth->login($username, $password);
	  
	 if($reply==1)//bad login combination
	  {
	    header("Location:../melnet/?sid=".$_SESSION['user_id']."&token=".$token = $_SESSION['token']."&loginerrorfeed=".rawurlencode(" Invalid username and password combination! ::.."));
		      
	  }else if($reply==2)//user not active
	  {
	    header("Location:../melnet/?sid=".$_SESSION['user_id']."&token=".$token = $_SESSION['token']."&loginerrorfeed=".rawurlencode(" User-is-Temporary-Disabled! ::.."));
				
	  }  else if($reply==3)//user not verified
	    {
	    header("Location:../melnet/?sid=".$_SESSION['user_id']."&token=".$token = $_SESSION['token']."&loginerrorfeed=".rawurlencode(" User have not verified Registration! ::.."));
				
	  }else if($reply==0)//login successful
	    {
	    
	   header("Location:../melnet/index.php?sid=".$_SESSION['user_id']."&token=".$token = $_SESSION['token']."&loginerrorfeed=".rawurlencode(" Login Successful! ::.."));
			
	  }
	 	}//end if not empty
		}//end if;
		
		
if(isset($_GET['action']))
	{
	$action = htmlspecialchars($_GET['action']);

	  if($action == "logout")
	     {
	      $auth->logout();
	     }
	  
      header('Location:../melnet/index.php');
	}

		
		
		

function go_homeforlogedin()
	  {
	    global $smarty;
			
			$smarty->assign('slider',$smarty->fetch('slider.tpl'));
			$smarty->assign('mainContent',$smarty->fetch("logedin.tpl"));
			$smarty->assign('title', '..::MelNet:homeView');

	  }

function go_homeforlogin()
	    {
	      global $smarty;


			  $smarty->assign('slider',$smarty->fetch('slider.tpl'));
			  $smarty->assign('mainContent',$smarty->fetch("logedout.tpl"));
			  $smarty->assign('title', '..::MelNet:homeView');

	    }


	      