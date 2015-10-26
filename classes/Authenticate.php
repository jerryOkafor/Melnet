<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Connection.php';

class Authenticate{
	

	public function __construct()
  	{
		$this->siteKey ='don13';
	}
	
	
	private function randomString($length = 10)
	  {
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	$string ="";    
		
	for ($p = 0; $p < $length; $p++) {
		$string .= $characters[mt_rand(0, 61)];
	}
		
      	return $string;
	      }
	    
	public function isLogedin($token,$id)
	  {
	  if(isset($_SESSION['token']))
	    {
	    if($this->matchToken($token, $id))
	      {
	      return true;
	      
	      }
	    	    else
	      {
	      return false;
	      }
	      
	    
	    }
	  }
	 public function matchToken($token,$id)
	   {
	   $sql = "SELECT * FROM `logedin_member` WHERE `user_id`=? AND token=?";
	   $con = new Connection();
	    $link = $con->getConnection();
	    $stmt = $link->prepare($sql);
	    $stmt->execute(array($id,$token));
	    $resultSet = $stmt->fetchAll(PDO::FETCH_BOTH);
	    if($resultSet)
	      {
	      return true;
	      }
	    	    else
	      {
	      return false;
	      }
		   }
	   

	 public function login($usn,$pswd)
	      {   
	//Select users row from database based on $email/username	   
	$selection = $this->selectData($usn);		
	//Salt and hash password for checking	
	$pswd_salt = $selection['avatar'].$pswd;
	$password = $this->hashData($pswd_salt);
	//Check email and password hash match database row
	$match = $this->matchDetails($usn, $selection['username'], $password, $selection['password']);
	//Convert to boolean
	$is_active  =(boolean) $selection['user_status'];
	$verified  =(boolean) $selection['verified'];
	if($match == true) {
		if($is_active==true)
		      {
			      if($verified == true) {
				//Email/Password combination exists, set sessions First, generate a random string.
				$random = $this->randomString();
				//Build the token
				$token = $_SERVER['HTTP_USER_AGENT'] . $random;
				$token = $this->hashData($token);					
				//Setup sessions vars
				//session_start();
				$_SESSION['token'] = $token;
				$_SESSION['user_id'] = $selection['ID'];
				$_SESSION['username'] = $selection['username'];
				$sid = $this->hashData(session_regenerate_id());					
				//Insert new logged_in_member record for user
				$this->insertData($selection['ID'],$sid,$token,$selection['logintype']);
				$this->updateLastLogin($selection['ID']);
				
				return 0;
					
			} else {
				//Not verified
				return 3;
				}
		      }
			else {
			//USER not activ
			return 2;
			}
	    
		}else{
		  
		//No match, reject
		return 1;
		}
		
}



protected function hashData($data)
    	{
		return hash_hmac('sha512',$data,$this->siteKey);
	}
	
	

public function isAdmin($selection)
{		
	//$selection being the array of the row returned from the database.
	if($selection['login_type'] == 2) {
		return true;
	}
		
	return false;
}

public function isUser1($selection)
{		
	//$selection being the array of the row returned from the database.
if($selection['login_type'] == 1||$selection['login_type'] == 0||$selection['login_type'] == 2) {
		return true;
	}
		
	return false;
}
	
	

public function checkSession($token)
{
	//Select the row
	$selection = $this->selectSessionData($_SESSION['user_id']);
		
		
	if($selection) {
		//Check ID and Token
		if($token ==$selection['token']) {
		//Id and token match, refresh the session for the next request
		//$this->refreshSession();
			return true;
		}
	}
		
	return false;
}

/*private function refreshSession()
{
	//Regenerate id
	session_regenerate_id();
		
	//Regenerate token
	$random = $this->randomString();
	//Build the token
	$token = $_SERVER['HTTP_USER_AGENT'] . $random;
	$token = $this->hashData($token); 
		
	//Store in session
	$_SESSION['token'] = $token;



}*/
public function getToken($usid)
{  
  $con = new Connection();
  $link = $con->getConnection();
  $query = "SELECT * FROM `logedin_member` WHERE `user_id`=?";
  $stmt = $link->prepare($query);
  $stmt->execute(array($usid));
  $result = $stmt->fetch(PDO::FETCH_BOTH); 
  $stmt = null;
  return $result["token"];
}

private function selectData($usn)
{  
  $con = new Connection();
  $link = $con->getConnection();
  $query = "SELECT * FROM `users` WHERE `username`=?";
  $stmt = $link->prepare($query);
  $stmt->execute(array($usn));
  $result = $stmt->fetch(PDO::FETCH_BOTH); 
  $stmt->closeCursor;
  $stmt = null;
  return $result;
}
public function selectSessionData($usid)
{  
  $con = new Connection();
  $link = $con->getConnection();
  $query = "SELECT * FROM `logedin_member` WHERE `user_id`=?";
  $stmt = $link->prepare($query);
  $stmt->execute(array($usid));
  $result = $stmt->fetch(PDO::FETCH_BOTH); 
  $stmt = null;
  return $result;
}

private function insertData($uid,$ssid,$tok,$logtype)
{
 $sql = "INSERT INTO `logedin_member` (`ID`, `user_id`, `ssid`, `token`,`login_type`) VALUES (NULL, ?, ?,?,?)";
  $con = new Connection();
  $link = $con->getConnection();
  $stmt = $link->prepare($sql);
  if($stmt->execute(array($uid,$ssid,$tok,$logtype)))
  {  
    $stmt->closeCursor;
	  $stmt = null;
	  return true;
  
  }
  else {
    returnfalse;
  
  }
}
private function updateLastLogin($uid)
{
 $sql = "UPDATE `users` SET `last_login` = '".date("Y-m-d H:i:m",time())."' WHERE `users`.`ID` = ?";
  $con = new Connection();
  $link = $con->getConnection();
  $stmt = $link->prepare($sql);
  if($stmt->execute(array($uid)))
  {  
    $stmt->closeCursor;
	  $stmt = null;
	  return true;
  
  }
  else {
    returnfalse;
  
  }
}
private function deleteSectionData($id){
  $sql = "DELETE FROM `logedin_member` WHERE `user_id` = ?";
  $con = new Connection();
  $link = $con->getConnection();
  $stmt = $link->prepare($sql);
  if($stmt->execute(array($id)))
  {  
	  $stmt = null;
	  return true;
  
  }
  else {
    returnfalse;
  
  }
}
public function createUser($email, $usname, $pass,$loginType)
{	
  
  //Generate users salt
	$avater = $this->randomString();
	$signupdate = date("Y-m-d H:i:m",time());		
	//Salt and Hash the password
	$password = $avater . $pass;
	$password = $this->hashData($password);			
	//Create verification code
	$code = $this->randomString();
	//Commit values to database here.
	//
	$query = "INSERT INTO `users`(`ID`, `username`, `password`, `logintype`, `email`, `avatar`, `signup_date`, `user_status`, `last_login`, `ver_code`, `verified`) VALUES (NULL,?,?,?,?,?,?,?,?,?,?)";
	$query1="SELECT `ID` FROM `users` ORDER BY `ID` DESC LIMIT 1";
	$con = new Connection();
	$link = $con->getConnection();
	$stmt = $link->prepare($query);
	if($stmt->execute(array($usname,$password,$loginType,$email,$avater,$signupdate,1,$signupdate,$code,1)))
	{ 
	  $stmt = $link->prepare($query1);
	 $stmt->execute();
	  $r=$stmt->fetch(PDO::FETCH_ASSOC);
	  return true;

	}
	else {
	  return false;

	}
}
//this function matches username and paswword
    function matchDetails($usn1,$usna2,$pswd1,$pswd2)
	      {
		if($usn1===$usna2&&$pswd1===$pswd2)
		{
		return true;
		}  else {
		  return false;
		}
	      }
	      
    function logout()
    {
      
      //Delete old logged_in_member records for user
      if(isset($_SESSION['user_id']))
	{
      $this->deleteSectionData($_SESSION['user_id']);
	}
      session_destroy();
      
    }
    
  function getFullName($user_id)
    {
      $con = new Connection();
      $link = $con->getConnection();
      $query = "SELECT * FROM `profile_data` WHERE `user_id`=?";
      $stmt = $link->prepare($query);
      $stmt->execute(array($user_id));
      $result = $stmt->fetch(PDO::FETCH_BOTH); 
      //$stmt->closeCursor;
     $stmt = null;
      return $result["f_name"]." ".$result["l_name"]." ".$result["m_name"];
    
    }
    

}


