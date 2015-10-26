<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UnionBank
 *
 * @author DABBY(3pleMinds)
 */
require_once 'Connection.php';
require_once '../core/Core.php';

class UnionBankNewJob
{
    //put your code here
   private $jobid;
   private $location;
   private $date;
   private $day;
   private $month;
   private $year;
   private $maintype;
   private $reportcode;
   
  
  public function __construct($jobid,$location,$dategenerated ,$reportcode, $maintype)
    {
    $core = new Core();
    $date = $core->splitDate($dategenerated);
    $this->date = $dategenerated;
    $this->day = $date['day'];
    $this->month = $date["month"];
    $this->year = $date["year"];
   $this->jobid = $jobid;
   $this->location = $location;
   $this->maintype = $maintype;
   $this->reportcode =$reportcode;
   $this->region=$this->getLocationDetails($location,"region");
    }
    public function uplaodNew()    {
	      $con = new Connection();
	       $query = "INSERT INTO `ubnkrecords`(`ID`, `jobid`, `location`, `customer`, `region`, `date`, `day`, `month`,"
		       . " `year`, `reportcode`, `maintype`, `unittype`, `unitid`, `hours`, `faultcode`, `repaircode`, "
		       . "`rootcausecode`, `material`, `status`, `materialcost`, `labourcost`, `totalcost`)"
		       . " VALUES (NULL,'$this->jobid','$this->location','Union Bank Nig. Plc.','$this->region','$this->date',"
		       . "'$this->day','$this->month','$this->year','$this->reportcode','$this->maintype','','','','','','','','','',"
		       . "'','')";
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
    if(!$stmt->execute())
      {
      return false;
      }else{
      return true;
      }
	      
      
      
      }
    
    private function getLocationDetails($location,$col)
      {
      //connect to database
      $con = new Connection();
      $query = "SELECT * FROM `unionbanklocations` WHERE `location` LIKE '%$location%'";
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $row = $stmt->fetch(PDO::FETCH_BOTH);
	      
	      return $row[$col];
	      
      }
}
