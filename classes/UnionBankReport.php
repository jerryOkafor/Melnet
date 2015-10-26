<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UnionBankReport
 *
 * @author DABBY(3pleMinds)
 */
require_once '../core/Core.php';
require_once 'Connection.php';
class UnionBankReport
{
  //put your code here
  
  private $totalLabourCost;
  private $totalMaterialCost;
  private $totalCost;
  private $month,$year;
  private $query;
  private $totalhours;
  
  public function __construct($key,$typeSearch)
    {
    $core = new Core();
    $this->totalLabourCost=0;
    $this->totalMaterialCost = 0;
    $this->totalCost = 0;
    if ($typeSearch=="location") {
      
    $this->query ="SELECT * FROM `ubnkrecords` WHERE `location` = '$key'";
    }elseif ($typeSearch=="unit") 
      {
      $unitid = substr($key,0,strpos($key,'/'));
      $location = substr($key,(strpos($key,"/")+1));
     // echo $location;
    $this->query ="SELECT * FROM `ubnkrecords` WHERE `unitid`= '$unitid' AND `location` LIKE '%$location%'";
    }elseif ($typeSearch=="allReport") 
      {
    $this->query ="SELECT * FROM `ubnkrecords` WHERE 1";
    }
    else
      {
      $splitDate = $core->splitDate($key);
    $this->month = $splitDate["month"];
    $this->year = $splitDate["year"];
    $this->query ="SELECT * FROM `ubnkrecords` WHERE `month`= '$this->month' AND `year` = '$this->year'";    
        
      }
      
    $this->totalhours = 0;
    }
   public function showReport()
    {
      $tabelHead = "<div>
<table border='1' data-role='none' class='reporttable ui-responsive'><thead><tr> 
      <th class='no_border hide noExl' colspan='3'>Actions</th>
      <th>S/N</th>
      <th>Job Id</th>
      <th>Location</th>
      <th>Call Date</th>
      <th>R. Code</th>
      <th>Main. Type</th>
      <th>Unit Type</th>
      <th>Unit Id</th>       
      <th>F. Code</th>
      <th>RP. Code</th>
      <th>R. C. Code</th>
      <th>Date Completed</th>
      <th>Hours</th>
      <th>Material Used</th>
      <th>Status</th>
      <th>Material Cost</th>
      <th>Labour Cost</th>
      <th>Total</th>
   </tr></thead><tbody>";
      
      //execute the query here
      $con = new Connection();
	      $link = $con->getConnection();
	      $stmt = $link->prepare($this->query);
	      $stmt->execute(); 
	      $tableRows="";
	      $counter = 1;
	      while ($row = $stmt->fetch(PDO::FETCH_BOTH))
		  {

		  $tableRows.=$this->populateReportTable($counter, $row);
		  $counter ++;
		  }
		  
		  $this->totalCost+=($this->totalLabourCost+$this->totalMaterialCost);
		$tableFooter="<tr class='last_row'>
			<td class='no_border hide noExl'></td>
			<td class='no_border hide noExl'></td>			
			<td class='no_border hide noExl'></td>
			<td>Total</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>".$this->totalhours."</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>".$this->totalMaterialCost."</td>
			<td>".$this->totalLabourCost."</td>
			<td>".$this->totalCost."</td>
			</tr><tbody></table>";
		
    return $tabelHead.$tableRows.$tableFooter.'</div><p class="center hide"><button data-role="none" id="print_report" class="report_button">Print Report</button>'
	    . '&nbsp;&nbsp;&nbsp;<button data-role="none" id="export_report" class="report_button">Export Report</button></p>';
	
    
    }
    
    private function populateReportTable($counter,$result_row)
	{
	  $materialCost = $result_row['materialcost'];
	  $this->totalMaterialCost += $materialCost;
	  $labourCost = $result_row['labourcost'];
	  $this->totalLabourCost +=$labourCost;
	  $hours = $result_row['hours'];
	  $this->totalhours +=$hours;
     $id= $result_row['ID'];
     $printed=$result_row['invoiceStatus'];     
     $jobid=$result_row['jobid'];
  
	
     $out="";
     if($counter%2==0)
       {$out.="<tr class='even'><td class='no_border hide noExl'>";}else {$out.="<tr class='odd'><td class='no_border hide noExl' >";}
     $out.= " <a data-ajax='false' href='../ubnk/index.php?action=generateinvoice&jobid=$id' class='invoice_icon";
     
     if($printed)
       {
        $out.=" printed_invoice'";
       }else
	 {
	 $out.=" unprinted_invoice' ";
	 }
		$out.= " title='Generate Invoice For Job'><img src='../_assets/img/invoice.jpg'>Invoice</a></td><td "
			. "class='no_border hide noExl'><a data-ajax='false' class='edit_icon' "
			. "href='../ubnk/index.php?view=updateJobView&id=$id&jobid=$jobid&jobid_for_update_job=Submit' title='Update Job Record'>"
			. "<img src='../_assets/img/b_edit.png'>Update</a></td><td "
			. "class='no_border hide noExl'><a data-ajax='false' jobid='$jobid' class='del_icon edit_icon' href='#' title='Delete Job Entry'>"
			. "<img src='../_assets/img/b_drop.png'>Delete</a></td>";
	$out.="<td>$counter</td>"
		. "<td>".$result_row['jobid']."</td>"
		. "<td>".html_entity_decode($result_row['location'])."</td>"
		. "<td>".$result_row['date']."</td>"		
		. "<td ondblclick='tableUpdate(this,$id)' col='reportcode'>".$result_row['reportcode']."</td>"
		. "<td>".$result_row['maintype']."</td>"
		. "<td>".$result_row['unittype']."</td>"
		. "<td ondblclick='tableUpdate(this,$id)' col='unitid'>".$result_row['unitid']."</td>"		
		. "<td ondblclick='tableUpdate(this,$id)' col='faultcode'>".$result_row['faultcode']."</td>"
		. "<td ondblclick='tableUpdate(this,$id)' col='repaircode'>".$result_row['repaircode']."</td>"
		. "<td ondblclick='tableUpdate(this,$id)' col='rootcausecode'>".$result_row['rootcausecode']."</td>"		
		. "<td>".$result_row['datedone']."</td>"
		. "<td>".$result_row['hours']."</td>"
		. "<td>".$result_row['material']."</td>"
		. "<td ondblclick='tableUpdate(this,$id)' col='status'>".$result_row['status']."</td>"
		. "<td>".$materialCost."</td>"
		. "<td>".$labourCost."</td>"
		. "<td>".$result_row['totalcost']."</td>";
						
	return $out;							
	}//end for
  
}
