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

class UnionBankJob
{
    //put your code here
   private $jobid;
   private $location;
   private $date;
   private $day;
   private $month;
   private $year;
   private $maintype;
   private $unittype;
   private $unitid;
   private $hours;
   private $material;
   private $status;
   private $materialcost;
   private $labourcost;
   private $totalcost;
   private $region;
  
  public function __construct($jobid,$location,$datedone,$maintype,$unittype,$unitid,$hours,$materialused,$status)
    {
    $core = new Core();
    $date = $core->splitDate($datedone);
    $this->date = $datedone;
    $this->day = $date['day'];
    $this->month = $date["month"];
    $this->year = $date["year"];
   $this->jobid = $jobid;
   $this->location = $location;
   $this->maintype = $maintype;
   $this->unittype =$unittype;
   $this->unitid =$unitid;
   $this->hours = $hours;
   $this->material =$materialused;
   $this->status = $status;  
   $this->region=$this->getLocationDetails($location,"region");
   $this->materialcost = 0;
   $this->labourcost =0;
   $this->totalcost= 0; 
   $this->processReport();
   
  
    }
    public function uplaod()    {
	      $con = new Connection();
	       $query = "INSERT INTO `ubnkrecords`(`ID`, `jobid`, `location`,`customer`, `region`,`date`, `day`,`month`,`year` ,`maintype`, `unittype`, `unitid`, `hours`, `material`, `status`, `materialcost`, `labourcost`, `totalcost`)"
		       . " VALUES (NULL,$this->jobid,'$this->location','Union Bank Nig. Plc.','$this->region','$this->date',$this->day,$this->month,$this->year,'$this->maintype','$this->unittype','$this->unitid','$this->hours','$this->material','$this->status','$this->materialcost','$this->labourcost','$this->totalcost')";
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
    if(!$stmt->execute())
      {
      return false;
      }else{
      return true;
      }
	      
      
      
      }
    private function  processReport()
      {
	if($this->maintype =="CM")
	  {
	    if($this->material=="none")
	      {
	      $this->materialcost +=0;
	      
	      }else{
		$this->materialcost += $this->getMaterialCost($this->material);
	      }
	  
	  }else if($this->maintype=="PM")
	    {
	      //get the location zone and get the price for pm location
	      $this->processForPM();
      }
      $this->totalcost = $this->labourcost+$this->materialcost;
      }
      
    private function processForPM()
	{
		if($this->material=="none")
		  {
		  $this->materialcost +=0;

		  }else{
		    $this->materialcost += $this->getMaterialCost($this->material);
		  }
		   
	$this->labourcost += $this->getPriceForPM($this->region, $this->unittype);
	}
	
   private function getPriceForPM($region,$unittype)
     {
	  
	  if($unittype=="split")
	    {
	    $rateChoice="split_rate";
	    }else
	      {
	      $rateChoice = "package_rate";
	      }
           $con = new Connection();
	    $query = "SELECT * FROM `ubnk_service_rate` WHERE `region` LIKE '$region'";
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $row = $stmt->fetch(PDO::FETCH_BOTH);
	       
	      
	      return $row[$rateChoice];
     }

    private function getMaterialCost($material){
      //connect to a database
      $con = new Connection();
      $query = "SELECT * FROM `partspricelist` WHERE `part_number` = '$material'";
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $row = $stmt->fetch(PDO::FETCH_BOTH);
	      $stmt = null;  
	      
	      return $row['price'];
      
      
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
