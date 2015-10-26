<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PreventiveMaintenance
 *
 * @author DABBY(3pleMinds)
 */

require_once '../core/Core.php';
require_once 'Connection.php';

class PreventiveMaintenance
{
  //put your code here
   private $total_num_of_houses ;
   private $expected_rate;
   private $total_num_of_houses_serviced;
   private $total_calls_gen;
   private $total_calls_comp;
   private $no_access_loc;
   private $total_expected;
   private $table,$core;
   private $start,$end,$all;
   private $month_1,$month_2;
   private $query, $loc_table;
  
  public function __construct($table,$loc_table,$start,$end,$all,$month1,$month2)
    {
   $this->total_num_of_houses = 0;
   $this->expected_rate = 0;
   $this->total_num_of_houses_serviced =0;
   $this->total_calls_gen = 0;
   $this->total_calls_comp = 0;
   $this->no_access_loc =0;
   $this->total_expected =0;
   $this->table=$table;
   $this->core = new Core();
   $this->start = $start;
   $this->end = $end;
   $this->all=$all;
   $this->month_1 = $month1;
   $this->month_2 = $month2;
   $this->query="";
   $this->initPM();
   $this->loc_table =$loc_table;
    }
    
    private function initPM(){
      if($this->all==1)//user wants to view all pm
	{
	$this->query= "SELECT * FROM `$this->table` ORDER BY `job_id` ASC";
	
	}else{//user wants to view some pm
	  
	$this->query= "SELECT * FROM `$this->table` WHERE `day_done` BETWEEN '$this->start' AND '$this->end'  AND (`date_done` LIKE '%$this->month_1%' OR `date_done` LIKE '%$this->month_2%') ORDER BY `job_id` ASC";
	
	  
	}
	
    }
  public function showPPMReport()
    {
      $tabelHead = "
	<table border='1' class='ppmtable' data-role='tabele'><thead><tr>   
      <th>S/N</th>
      <th>Job_Id</th>
      <th>Location</th>
      <th>No.Of Houses</th>
      <th>Frequency</th>
      <th>Rate /Yr</th>
      <th>Expected Rate /Yr</th>
      <th>Actual Rate /Yr</th>
      <th>Expected Status (%)</th>
      <th>Current Status(%)</th>
      <th>Last Inspection</th>
      <th>Next Inspection</th>
      <th>Calls Generated</th>
      <th>Calls Completed</th>
      <th>Field Inspections</th>
      <th>No Accsess Resolved</th>
      <th>No Access</th>
      <th>Remarkes</th></tr></thead><tbody>";
      
      //execute the query here
      $con = new Connection();
	      $link = $con->getConnection();
	      $stmt = $link->prepare($this->query);
	      $stmt->execute(); 
	      $tableRows="";
	      $counter = 1;
	      while ($row = $stmt->fetch(PDO::FETCH_BOTH))
		  {

		  $tableRows.=$this->populatePPMTable($counter, $row);
		  $counter ++;
		  }
		$stmt = null;     
      		$tableFooter="<tr id='last_row'><td>Total</td>
			<td>N/A</td>
			<td>All Locations</td>
			<td>$this->total_num_of_houses</td>
			<td>Monthly</td>
			<td>$this->total_expected</td>
			<td>$this->expected_rate</td>
			<td>$this->total_num_of_houses_serviced</td>
			<td>".$this->core->getStatusTillDate($this->total_expected,$this->expected_rate)." % </td>
			<td>".$this->core->getcurrentStatus($this->total_num_of_houses_serviced,$this->total_expected,"January")." % </td>
			<td>Nill</td>
			<td>Nill</td>
			<td>$this->total_calls_gen</td>
			<td>$this->total_calls_comp</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>$this->no_access_loc</td>
			<td>N/A</td>
			</tr><tbody></table>";
		
    return $tabelHead.$tableRows.$tableFooter;
    
    }
   private function populatePPMTable($counter,$result_row)
    {
     
     $core = new Core();
     $number_Of_houses = $core->getNumberofHouses($this->loc_table,$result_row['location']);
     $this->total_num_of_houses+=$number_Of_houses;
     $per_street_year = $number_Of_houses*12;
     $this->total_expected+= $per_street_year;
     $date_done =$result_row['date_done'];
     $done_till_date = $core->getTillDate($number_Of_houses,$date_done);
     $this->expected_rate+=$done_till_date;
     $houses_serviced =$result_row['houses_serviced']; 
     $this->total_num_of_houses_serviced+=$houses_serviced;
     $status_tiil_date = $core->getStatusTillDate($number_Of_houses,$houses_serviced);
     $current_satus = $core->getcurrentStatus($houses_serviced,$number_Of_houses,$status_tiil_date );
     $calls_generated =$result_row['calls_gen'];
     $this->total_calls_gen+=$calls_generated;
     $calls_completed =$result_row['calls_comp'];
     $this->total_calls_gen+=$calls_completed;
     $no_access = ($number_Of_houses-$houses_serviced);
     $this->no_access_loc+= $no_access;
	
     $out="";
     $id= $result_row['S/N'];$out.= " <tr>";
	$out.="<td >$counter</td>
	<td ondblclick='myFunction(this,".$id.")' id='job_id'>".$result_row['job_id']."</td>
	<td>".$result_row['location']."</td><td>".$number_Of_houses."</td><td>Monthly</td>";
	$out.="<td>".$per_street_year."</td><td>".$done_till_date."</td>";
	$out.="<td ondblclick='myFunction(this,".$id.")' id='houses_serviced'>".$houses_serviced."</td>";	
	$out.="<td >".$status_tiil_date." % </td><td>".$current_satus." % </td>
	<td ondblclick='myFunction(this,".$id.")' id='date_done'>".$result_row['date_done']."</td>
	<td ondblclick='myFunction(this,".$id.")' id='date_nect'>".$result_row['date_next']."</td>";	
	$out.="<td ondblclick='myFunction(this,".$id.")' id='calls_gen'>$calls_generated</td>";	
	$out.="<td ondblclick='myFunction(this,".$id.")' id='calls_comp'>$calls_completed</td>
	<td ondblclick='myFunction(this,".$id.")' id='inspection'>".$result_row['inspection']."</td>
	<td ondblclick='myFunction(this,".$id.")' id='noaccesslocresolved'>".$result_row['noaccesslocresolved']."</td>";
	$out.="<td>".$no_access."</td><td ondblclick='myFunction(this,".$id.")' id='engineers_remark'>".$result_row['engineers_remark']."</td></tr>";
					
	return $out;							
	}//end for
}//edn of class