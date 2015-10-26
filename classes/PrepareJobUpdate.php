<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrepareJobUpdate
 *
 * @author DABBY(3pleMinds)
 */
require_once 'Connection.php';

class PrepareJobUpdate
{
  //put your code here
  private $jobid;
  private $query;
  
  
  public function  __construct($jobid)
  {
      $this->jobid = $jobid;
      $this->query = "SELECT `ID`, `jobid`, `location`,`date`,`reportcode`, `maintype` FROM `ubnkrecords` WHERE `jobid` = '$this->jobid'";
  }
  
  
  public function prpare()
    {
      
	      $con = new Connection();
	      $link = $con->getConnection();
	      $stmt = $link->prepare($this->query);
	      $stmt->execute(); 
	      $row = $stmt->fetch(PDO::FETCH_BOTH);
    return array("dategenerated"=>$row['date'],"location"=>  html_entity_decode($row["location"]),"reportcode"=>$row["reportcode"],"maintype"=>$row["maintype"]);
    }
}
