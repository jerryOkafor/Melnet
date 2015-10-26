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

class UpdateUnionBankJob
{
    //put your code here
   private $jobid;
   private $location;
   private $datedone;
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
   private $faultcode,$repaircode,$rootcausecode;
  
  public function __construct($jobid,$location,$maintype,$datedone,$unittype,$unitid,$hours,$faultcode,$repaircode,$rootcausecode,$materialused,$status)
    {
   
   $this->jobid = $jobid;
   $this->location = html_entity_decode($location);
   $this->maintype = $maintype;
   $this->datedone = $datedone;
   $this->faultcode =$faultcode;
   $this->rootcausecode = $rootcausecode;
   $this->repaircode = $repaircode;
   $this->unittype =$unittype;
   $this->unitid =$unitid;
   $this->hours = $hours;
   $this->material =$materialused;
   $this->status = $status;  
   $this->region=$this->getLocationDetails($this->location,"region");
   $this->materialcost = 0;
   $this->labourcost =0;
   $this->totalcost= 0; 
   $this->processReport();
   
  
    }

    private function  processReport()
      {
	if($this->maintype =="CM")
	  {
	    if($this->material=="none")
	      {
	      $this->materialcost +=0;
	      
	      }else{
		
		//split the string values here based on the sepration ; using substring and convert it to an array and get the 
		//overal material cost
		$materials = explode(";",$this->material,null);
		foreach ($materials as $material)
		  {
		  $this->materialcost += $this->getMaterialCost($material);
		  }
		  
		
	      }
	  
	  }else if($this->maintype=="PM")
	    {
	      //get the location zone and get the price for pm location
	      $this->processForPM();
      }
      $this->totalcost += $this->labourcost+$this->materialcost;
      }
      
    private function processForPM()
	{
		if($this->material=="none")
		  {
		  $this->materialcost += 0;

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
	    $query = "SELECT * FROM `ubnk_service_rate` WHERE `region` LIKE '%$region%'";
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
     public function update()    {
	      $con = new Connection();
	       $query = "UPDATE `ubnkrecords` SET `unittype`='$this->unittype', `unitid`='$this->unitid', `hours`='$this->hours', "
		       . "`faultcode`='$this->faultcode', `repaircode`='$this->repaircode',`rootcausecode`='$this->rootcausecode',"
		       . "`datedone`='$this->datedone', `material`='$this->material', `status`='$this->status', "
		       . "`materialcost`='$this->materialcost', `labourcost`='$this->labourcost', `totalcost`='$this->totalcost'"
		       . "WHERE `jobid` = '$this->jobid'";
		 
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
    if(!$stmt->execute())
      {
      return false;
      }else{
      return true;
      }
	      
      
      
      }
   
}
