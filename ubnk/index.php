<?php
require_once '../core/config.php';
require_once '../core/Core.php';
$templatePath = "$path/temp/smarty/templates";
require "$path/Smarty/libs/Smarty.class.php";
require_once '../core/smarty.init.php';
require_once '../classes/Authenticate.php';
require_once '../classes/Connection.php';
require_once '../classes/CorrectiveMaintenance.php';
require_once '../classes/PreventiveMaintenance.php';
require_once '../classes/UnionBankNewJob.php';
require_once '../classes/UpdateUnionBankJob.php';
require_once '../classes/UnionBankReport.php';
require_once '../classes/PrepareJobUpdate.php';
require_once '../classes/Invoice.php';
require_once '../classes/PreformerInvoice.php';
require_once '../classes/InvoiceView.php';
require_once '../classes/PrintInvoice.php';
ob_start();
session_start();
$auth = new Authenticate();
$core = new Core();


$fdbk = isset($_GET["fdbk"])? $_GET["fdbk"]:"";

$smarty->assign("fdbk",$fdbk);	

$smarty->assign("locations",$core->getLoactions("unionbanklocations"));
$smarty->assign("materials",$core->getAllPriceList());
//this codes intercepts view and redirects
if (!isset($_SESSION['user_id'])) {
	//Not logged in, send to login page.
	header("Location:../index.php");
	  
	  
	  }else if(isset($_GET["view"]))
	 {
      $view = htmlentities(htmlspecialchars($_GET["view"]));
      if($view == "newCmJobView")
	{
	  $smarty->assign("title",".::MelNet:Union Bank|New CM Job");
	  $smarty->assign("slider",'');	  
	  $smarty->assign("dategenerated",date("m/d/Y",time()));
	  $smarty->assign("reportCodeOptions",$core->getAllReportCode());	  
	  $smarty->assign("jobid",$core->generateCmJobId());
	  $smarty->assign("locationOptions",$core->getLoactions("unionbanklocations"));
	   $smarty->assign("mainContent",$smarty->fetch("cm_genrateJob.tpl"));
	   $smarty->display("ubnk.tpl");
	   
	}elseif($view == "newPmJobView")
	{
	  $smarty->assign("title",".::MelNet:Union Bank|New PM Job");
	  $smarty->assign("slider",'');	  	  
	  $smarty->assign("ubnk_locations",$core->getLoactions("unionbanklocations"));
	   $smarty->assign("mainContent",$smarty->fetch("pm_generateJob.tpl"));
	   $smarty->display("ubnk.tpl");
	
	}else if($view == "locationReport")
	{
	  $smarty->assign("title",".::MelNet:Union Bank|Location Report");
	  $smarty->assign("slider",'');	  
	  $smarty->assign("locationOptions",$core->getLoactions("unionbanklocations"));
	   $smarty->assign("mainContent",$smarty->fetch("locationReportDialog.tpl"));
	   $smarty->display("ubnk.tpl");
	   
	}else if($view == "unitReport")
	{
	  $smarty->assign("title",".::MelNet:Union Bank|New Job");
	  $smarty->assign("slider",'');	  
	  $smarty->assign("dategenerated",date("m/d/Y",time()));
	  $smarty->assign("reportCodeOptions",$core->getAllReportCode());	  
	  $smarty->assign("jobid",$core->generateJobId());
	  $smarty->assign("locationOptions",$core->getLoactions("unionbanklocations"));
	   $smarty->assign("mainContent",$smarty->fetch("genrateJob.tpl"));
	   $smarty->display("ubnk.tpl");
	   
	}else if($view == "updateJobView")
	  {
	  //get the job id.
	  $jobid =htmlspecialchars(htmlentities($_GET["jobid"]));	  
	  $id =htmlspecialchars(htmlentities(isset($_GET["id"])?$_GET["id"]:""));
	  //check if the job invoice has already been generated
			$invoice = new Invoice($id);
		
			if($invoice->checkInvoiceStatus()) 		  
			  {
			  //invoice already genrated so stop 
			//further actions and direct user to a page
			  header("Location:../ubnk/editStatus.html");
			  }else
			  {
			    
	  //invoice not genrated already go ahead
	  $smarty->assign("title",".::MelNet:Union Bank|New Update");
	  $smarty->assign("slider",'');
	  
	  $smarty->assign("jobid",$jobid);	 
	  //prepare
	  $prapred = new PrepareJobUpdate($jobid);
	  $preparedJob = $prapred->prpare();
	  $smarty->assign("dategenerated",$preparedJob["dategenerated"]);
	  $smarty->assign("location",$preparedJob["location"]);
	  $smarty->assign("reportcode",$preparedJob["reportcode"]);
	  $smarty->assign("maintype",$preparedJob["maintype"]);
	  $smarty->assign("faultCodeOptions",$core->getAllFaultCode());
	  $smarty->assign("repairCodeOptions",$core->getAllRepairCode());
	  $smarty->assign("rootCauseCodeOptions",$core->getAllRootCauseCode());
	  $smarty->assign("locationOptions",$core->getLoactions("unionbanklocations"));
	  $smarty->assign("materialOptions",$core->getAllPriceList());
	   $smarty->assign("mainContent",$smarty->fetch("updateJob.tpl"));
	   $smarty->display("ubnk.tpl");
			  }
	}elseif($view == "allInvoice")
	{
	 
	  $date =htmlspecialchars(htmlentities($_GET["date"]));
	   $invoiceView = new InvoiceView($date);
	  $smarty->assign("slider",'');	  
	  $smarty->assign("title",".::MelNet:Union Bank|All Invoice");
	  $smarty->assign("reportTitle","Invoice");
	  $smarty->assign("date",  date("M Y",  time()));
	  $smarty->assign("report",$invoiceView->showInvoice());
	  $smarty->display("ubnkReport.tpl");	
	  
	}else if($view == "newPart")
	{
	  $feedback =   isset($_GET["feedback"])? $_GET["feedback"] : "";
	  $smarty->assign("title",".::MelNet:Union Bank|New Part|Material");
	  $smarty->assign("slider",'');
	   $smarty->assign("feedback",$feedback);
	   $smarty->assign("mainContent",$smarty->fetch("newPartList.tpl"));
	   $smarty->display("ubnk.tpl");
	   
       }else if($view == "newLocation")
	{
	  $feedback =   isset($_GET["feedback"])? $_GET["feedback"] : "";
	  $smarty->assign("title",".::MelNet:Union Bank|New Location");
	  $smarty->assign("slider","");
	   $smarty->assign("feedback", $feedback);
	   $smarty->assign("mainContent",$smarty->fetch("newLocation.tpl"));
	   $smarty->display("ubnk.tpl");
	   
       }else if($view == "allReport")
	{
	 
	   $ubnkReport = new UnionBankReport(date("dd/mm/YY"),"allReport");
		  $smarty->assign("title","All Report");
		  $smarty->assign("reportTitle","All Report");
		  $smarty->assign("date",  date("M Y",  time()));
		  $smarty->assign("report",$ubnkReport->showReport());
		  $smarty->display('ubnkReport.tpl');
	   
       }else {
	    goHomeForUbnk();
       }
    }else if(isset($_POST["cm_generateNewJob"]))
		{
				$jobid =htmlspecialchars(htmlentities($_POST["jobid"]));
				$location = htmlentities($_POST["location"]);//this neeeds to be 
				
				$dategenerated =htmlspecialchars(htmlentities($_POST["dategenerated"]));
				$maintype =htmlspecialchars(htmlentities($_POST["maintype"]));
				$reportCode =htmlentities($_POST["reportCode"]);			
				
				$ubnk = new UnionBankNewJob($jobid, $location, $dategenerated,$reportCode,$maintype);
		
				if($ubnk->uplaodNew()) //this is where i made the last cahnages
				  {
				  //echo 'Uploaded';				  
				    //header("Location:../ubnk/index.php?fdbk=Job Generated Succesfully");
				    //start displaying the new job details for printing and evelaution
				$smarty->assign("title",".::MelNet:Union Bank|New Job");
			        $smarty->assign("slider",'');	
				$smarty->assign("customer",'');
				$smarty->assign("jobid",$jobid);
				$smarty->assign("location",$location);
				$smarty->assign("rcode",$reportCode);
				$smarty->assign("maintype",$maintype);
				$smarty->assign("date",$dategenerated);
				$smarty->assign("mainContent",$smarty->fetch("cm_generatedJobPrint.tpl"));
				$smarty->display("ubnk.tpl");
				  
				  }else
				    {
				    //echo'failed to upload';
				    header("Location:../ubnk/index.php?fdbk=Failed to Generate Job");
				    }
				    
		    ////end of codes for newJobjobInvoice
		}else if(isset($_POST["updateJob"]))  
		  
		{
				$jobid =htmlspecialchars(htmlentities($_POST["jobid"]));
				$location = htmlspecialchars(htmlentities($_POST["location"]));
				$maintype =htmlspecialchars(htmlentities($_POST["maintype"]));
				$datedone =htmlspecialchars(htmlentities($_POST["datedone"]));
				$unittype =htmlspecialchars(htmlentities($_POST["unittype"]));
				$unitid =htmlspecialchars(htmlentities($_POST["unitid"]));
				$hours =htmlspecialchars(htmlentities($_POST["hours"]));
				$faultcode =htmlspecialchars(htmlentities($_POST["faultcode"]));
				$repaircode =htmlspecialchars(htmlentities($_POST["repaircode"]));
				$rootcausecode =htmlspecialchars(htmlentities($_POST["rootcausecode"]));
				
				$mat = $_POST["materials"] ;
				//the materials option is a multiple select option
				$materials = implode("+",$mat);
//				
				if($faultcode==""||$repaircode==""||$rootcausecode=="")
				  {		
				  $status = "Open";
				}else
				{
				$status =htmlspecialchars(htmlentities($_POST["status"]));
				}
				
				
				$ubnk = new UpdateUnionBankJob($jobid,$location,$maintype,$datedone,$unittype,$unitid,$hours,$faultcode,$repaircode,$rootcausecode,$materials,$status);

		
				if($ubnk->update())
				  {
				  //echo 'Uploaded';
				   header("Location:".$_SERVER["HTTP_REFERER"]."&fdbk=Job updated successfully");
				  
				  }else
				    {
				    //echo'failed to upload';
				    header("Location:".$_SERVER["HTTP_REFERER"]."&fdbk=Failed to update job to data base");
				    }
				    
		    ////end of codes for newJobjobInvoice
		}else if(isset($_GET["monthlyReport"]))
		  {
		
		  $date = htmlentities(htmlspecialchars($_GET['monthlyReportDate']));
		  $ubnkReport = new UnionBankReport($date,"monthly");
		  $smarty->assign("title","Monthly Report");
		  $smarty->assign("reportTitle","Monthly Report");
		  $smarty->assign("date",  date("D M Y",  time()));
		  $smarty->assign("report",$ubnkReport->showReport());
		  $smarty->display('ubnkReport.tpl');
		  
		} else if(isset($_GET["locationReportView"]))
		  {
		
		  $location = htmlentities(htmlspecialchars($_GET["location"]));
		  $ubnkReport = new UnionBankReport($location,"location");
		  $smarty->assign("title","Location Report");
		  $smarty->assign("reportTitle","AC Location/Branch Rerport");
		  $smarty->assign("date",  date("D M Y",  time()));
		  $smarty->assign("report",$ubnkReport->showReport());
		  $smarty->display('ubnkReport.tpl');
		  
		 } else if(isset($_GET["unitReportView"]))
		  {
		   //grab the unit
		  $unitid = htmlentities(htmlspecialchars($_GET['unitid']));
		  //grab the locatxion as wll		  
		  $location = htmlentities(htmlspecialchars($_GET['location']));
		  $ubnkReport = new UnionBankReport($param,"unit");
		  $param  = $unitid."/".$location;
		  $smarty->assign("title","Unit Report");
		  $smarty->assign("reportTitle","AC Unit Report");
		  $smarty->assign("date",  date("D M Y",  time()));
		  $smarty->assign("report",$ubnkReport->showReport());
		  $smarty->display('ubnkReport.tpl');
		  
		 } else if(isset($_GET["jobInvoice"]))
		      {
		      $jobid = htmlentities(htmlspecialchars($_GET['jobid']));
		      	$invoice = new Invoice($jobid);
			if($invoice->checkInvoiceStatus()) 		  
			  {
			  //invoice already genrated so stop 
			//further actions and direct user to a page
			  header("Location:../ubnk/invoiceStatus.html");
			  }else//invoice not genrated already go ahead
			  {
			$reply = $invoice->genrateInvoice();			
			$smarty->assign("jobid",$reply["jobid"]);
			$smarty->assign("invoiceNumber",$reply["invoicenumber"]);			
			$smarty->assign("customer",$reply["customer"]);
			$smarty->assign("stockcode",$reply["stockcode"]);
			$smarty->assign("description",$reply["description"]);
			$smarty->assign("unitcost",$reply["unitcost"]);
			$smarty->assign("quantity",$reply["quantity"]);
			$smarty->assign("labour",$reply["labour"]);
			 $smarty->assign("title",".::MelNet:Union Bank: Invoice"); 
			$smarty->assign("slider","");
			$smarty->assign("mainContent",$smarty->fetch("cm_invoice.tpl"));
			$smarty->display("ubnk.tpl");
			  
			  }
	}else if(isset($_GET["action"]))
		  {
		  
		    $action =  htmlentities(htmlspecialchars($_GET["action"]));
		   //use a triplr argument fixer $jobid = htmlentities(htmlspecialchars($_GET["jobid"]));
		if($action == "generateinvoice")
		      {
			$jobid = htmlentities(htmlspecialchars($_GET['jobid']));
			$invoice = new Invoice($jobid);
			if($invoice->checkInvoiceStatus()) 		  
			  {
			  //invoice already genrated so stop 
			//further actions and direct user to a page
			  header("Location:../ubnk/invoiceStatus.html");
			  }else//invoice not genrated already go ahead
			  {
			$reply = $invoice->genrateInvoice();			
			$smarty->assign("jobid",$reply["jobid"]);
			$smarty->assign("invoiceNumber",$reply["invoicenumber"]);			
			$smarty->assign("customer",$reply["customer"]);			
			$smarty->assign("stockRows",$reply['stockRows']);
						
			$smarty->assign("labour",$reply["labour"]);
			 $smarty->assign("title",".::MelNet:Union Bank: Invoice"); 
			$smarty->assign("slider","");
			$smarty->assign("mainContent",$smarty->fetch("cm_invoice.tpl"));
			$smarty->display("ubnk.tpl");
			  
			  }

		  }else if($action == "newPreformer")
			{
			
			//grab the material.\
			$material = isset($_GET["material"])? $_GET["material"]:"";
			$invoice = new PreformerInvoice($material);
			$reply = $invoice->genrateInvoice();			
			$smarty->assign("jobid",$reply["jobid"]);
			$smarty->assign("invoiceNumber",$reply["invoicenumber"]);			
			$smarty->assign("customer",$reply["customer"]);			
			$smarty->assign("stockRows",$reply['stockRows']);
			$smarty->assign("labour",$reply["labour"]);
			
			
			  $smarty->assign("title",".::MelNet:Union Bank|New PM Preformer");
			  $smarty->assign("slider",'');	  	  
			   $smarty->assign("mainContent",$smarty->fetch("preformer_invoice.tpl"));
			   $smarty->display("ubnk.tpl");

		  }else if($action == "editjob")
			{
			goHomeForUbnk();
		  }else if ($action =="mailInvoiice") {
			      //grab the invoice id
			  $invoiceID = htmlentities(htmlspecialchars($_GET["invoiceID"]));
			  goHomeForUbnk();
		  }else if ($action =="printInvoice") {
			      //grab the invoice id
			  $invoiceID = htmlentities(htmlspecialchars($_GET["invoiceID"]));
			  $invoicePrint =  new PrintInvoice($invoiceID);
			  $invoice = $invoicePrint->ejectInvoice(); 
			  $smarty->assign("title",".::MelNet:Re-Invoice Print"); 
			  $smarty->assign("slider",'');
			  $smarty->assign("customer",$invoice["customer"]);			  
			  $smarty->assign("invoiceNumber",$invoice["invoiceNumber"]);
			  $smarty->assign("invoiceDate",$invoice["invoiceDate"]);
			  $smarty->assign("amountDue",$invoice["balanceDue"]);
			  $smarty->assign("jobid",$invoice["jobid"]);			  
			  
			  $smarty->assign("labourCost",$invoice["labourCost"]);
			  $smarty->assign("subtotal",$invoice["subtotal"]);
			  $smarty->assign("vat",$invoice["vat"]);
			  $smarty->assign("total",$invoice["total"]);
			  $smarty->assign("paid",$invoice["amountPaid"]);
			  $smarty->assign("amountDue",$invoice["balanceDue"]);
			  
			  
			  $smarty->assign("invoiceRows",$invoice["invoiceRows"]);
			  $smarty->assign("mainContent",$smarty->fetch("re_cm_invoice.tpl"));
			  $smarty->display("ubnk.tpl");
			  
		  }else if ($action =="updateInvoice") {
			      //grab the invoice id
			  $invoiceID = htmlentities(htmlspecialchars($_GET["invoiceID"]));
			  $invoicePrint =  new PrintInvoice($invoiceID);
			  $invoice = $invoicePrint->ejectInvoice(); 
			  $smarty->assign("title",".::MelNet:Re-Invoice Print"); 
			  $smarty->assign("slider",'');			  
			  $smarty->assign("invoiceID",$invoiceID);
			  $smarty->assign("customer",$invoice["customer"]);			  
			  $smarty->assign("invoiceNumber",$invoice["invoiceNumber"]);
			  $smarty->assign("invoiceDate",$invoice["invoiceDate"]);
			  $smarty->assign("amountDue",$invoice["balanceDue"]);
			  $smarty->assign("jobid",$invoice["jobid"]);
			  $smarty->assign("stockCode",$invoice["stockCode"]);
			  $smarty->assign("description",$invoice["description"]);
			  $smarty->assign("unitCost",$invoice["unitCost"]);
			  $smarty->assign("quantity",$invoice["quantity"]);
			  $smarty->assign("price",$invoice["price"]);
			  $smarty->assign("labourCost",$invoice["labourCost"]);
			  $smarty->assign("subtotal",$invoice["subtotal"]);
			  $smarty->assign("vat",$invoice["vat"]);
			  $smarty->assign("total",$invoice["total"]);
			  $smarty->assign("paid",$invoice["amountPaid"]);
			  $smarty->assign("amountDue",$invoice["balanceDue"]);
			  $smarty->assign("mainContent",$smarty->fetch("UpdateInvoice.tpl"));
			  $smarty->display("ubnk.tpl");
			  
		}else if ($action =="deleteEntry")
		  {
			//grab the invoice id
			 $repID = htmlentities(htmlspecialchars($_GET["id"]));
			 $co = new Core(); //$core->deleteEntry($repID)
			 if($core->deleteEntry($repID))
			   {
			   echo 'Job Deleted Succesfully';
			   }else{
			   echo 'Job Delete Failed';
			   }
		  }//end delert entry				 
			else {   
			  goHomeForUbnk();		
			}
			
		  }else 
		    {
		      goHomeForUbnk();		
			}
			
        //end of view and redirectpage codes
	function goHomeForUbnk(){
		  global $smarty;
		  $smarty->assign("title",".::MelNet:Union Bank"); 
		  $smarty->assign("slider",$smarty->fetch('sliderForPages.tpl'));
		   $smarty->assign("mainContent",$smarty->fetch("ubnkHome.tpl"));
		  $smarty->display("ubnk.tpl");
		}  
    

	