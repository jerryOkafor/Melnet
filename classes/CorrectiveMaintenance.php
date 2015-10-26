<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CorrectiveMaintenance
 *
 * @author DABBY(3pleMinds)
 */
class CorrectiveMaintenance
{
  //put your code here
  public function insertNewCall($tabele,$jobId,$location,$maintype,$day,$datestarted,$timestarted,$jobdesc,
		$planner,$tech,$superv)
    {
    $query = "INSERT INTO `$tabele` (ID,job_id,location,maintenancetype,day_done,datestarted,
		timestarted,job_desc,planner,technician,supervisor)
		VALUES (NULL,'$jobId','$location','$maintype','$day','$datestarted','$timestarted','$jobdesc', 
		'$planner','$tech','$superv')";
    //execute query and direct user accordingly
    
    header('Location:cmlogin.php?updatetoken='.urlencode('Unable to Add the Specified job').'#newCall');	
			
    }
    
    public function newPlusUpdate($table,$jobId,$location,$maintype,$day,$datestarted,$timestarted,$jobdesc,$planner,$tech,$superv,$reportcode,$faultcode,$repaircode,
		$rtcode,$dateended,$timeended,$engr_remark)
      {
      $sql = "INSERT INTO `$table` (ID, job_id,location,maintenancetype,day_done,datestarted,timestarted,job_desc,
		planner,technician,supervisor,report_code,fault_code,repair_code,root_cause_code,dateended,
		timended,engr_remark)VALUES (NULL,'$jobId','$location','$maintype','$day','$datestarted','$timestarted',
		'$jobdesc','$planner','$tech','$superv','$reportcode','$faultcode','$repaircode',
		'$rtcode','$dateended','$timeended','$engr_remark')";
      }
      
      //this code handles cm searches

  public function cmMonthlySearch($table,$start,$stop)
  {
    		
    
  }
  
  public function cmWeeklySearch($table,$week)
    {
    $query = "SELECT * FROM `report` WHERE `day_done` BETWEEN '$sd' AND '$ed'  AND (`datestarted` LIKE '%$demonth1%' OR `datestarted` LIKE '%$demonth2%') ORDER BY `job_id` ASC";
	
    }
    
    public function cmLocationSearch($table,$location)
      {
      	$query = "SELECT * FROM `report` WHERE `location` LIKE '%$location%' ORDER BY `job_id` ASC";
      }
      
      
    public function populateCmSearch($resultset)
      {
      $out = "<div id='divtoscrollforcm'><div id='scrollingdivforcm'><div id='ppmtitle'>
			<p><img src='../css/images/mandilaslogo.jpg'></p>
			<p>MANDILAS ENTERPRISES LIMITED</p>
			<p>CORRECTIVE MAINTENANCE REPORT SHEET OVERVIEW</p>
			</div><table border='1' id='reporttable'><thead><tr>    
      <th>S/N</th>
      <th>Job Id</th>
      <th>Location</th>
      <th>Job_Desc</th>
      <th>Planner</th>
      <th>Date_Started</th>
      <th>Time_Started</th>
      <th>Technician</th>
      <th>Supervisor</th>
      <th>Main.Type</th>
      <th>Report_Code</th>
      <th>Fault_Code</th>
      <th>Repir_Code</th>
      <th>RootCause Code</th>
      <th>Date_Ended</th>
      <th>Time_Ended</th>
      <th>Engr's Remark</th></tr>
  </thead><tbody>";		
      
		for($counter = 1; $counter <= $resultset;$counter++)
		  {
		    if($counter%2==0)
		      {
		      $out.=" <tr class='even'>";
		      }
			else
			  {
			$out.=" <tr>";
			  }
			  $id = $query_result_rows['ID'];
			$out.="<td>$counter</td>									
			<td ondblclick='mycmFunction(this,".$id.")' id='job_id'>".$query_result_rows['job_id']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='location'>".$query_result_rows['location']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='job_desc'>".$query_result_rows['job_desc']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='planner'>".$query_result_rows['planner']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='datestarted'>".$query_result_rows['datestarted']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='timestarted'>".$query_result_rows['timestarted']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='technician'>".$query_result_rows['technician']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='supervisor'>".$query_result_rows['supervisor']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='maintenancetype'>".$query_result_rows['maintenancetype']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='report_code'>".$query_result_rows['report_code']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='fault_code'>".$query_result_rows['fault_code']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='repair_code'>".$query_result_rows['repair_code']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='root_cause_code'>".$query_result_rows['root_cause_code']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='dateended'>".$query_result_rows['dateended']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='timended'>".$query_result_rows['timended']."</td>
			<td ondblclick='mycmFunction(this,".$id.")' id='engr_remark'>".$query_result_rows['engr_remark']."</td>";
			print("</tr>");								
					}//end for
		print("</tbody></table></div></div>");
      }//end function populate search
      
      
}//end of class CorrectiveMaintenance



