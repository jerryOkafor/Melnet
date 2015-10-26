<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../classes/Connection.php';

if(isset($_POST["column"]))
  {
  $column  = htmlentities(htmlentities($_POST["column"]));
  $row = htmlentities(htmlentities($_POST["row"]));
  $content = htmlentities(htmlentities($_POST["content"]));  
  $table = htmlentities(htmlentities($_POST["table"]));
  $id = htmlentities(htmlentities($_POST["id"]));
  
   $con = new Connection();
      $query = "UPDATE `$table` SET `$column` = '$content' WHERE `$id` = '$row'";
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
	      if($stmt->execute())
		{
		echo "Cell Updated Succesfully";
		}else
		  {
		  echo "Failed To Update Cell";
		  
		  }
	      	      
  }
  if(isset($_POST["savePrefInvoice"]))
    {
    //grab some values
    $invoiceDate = htmlspecialchars(htmlentities($_POST["invoiceDate"]));
    $invoiceNumber = htmlspecialchars(htmlentities($_POST["invoiceNumber"]));
    $jobNumber = htmlspecialchars(htmlentities($_POST["jobNumber"]));
    $amountDue  =htmlspecialchars(htmlentities($_POST["amountDue"]));
    $subtotal = htmlspecialchars(htmlentities($_POST["subtotal"]));
    $total = htmlspecialchars(htmlentities($_POST["total"]));
    $amountPaid = htmlspecialchars(htmlentities($_POST["amountPaid"]));
    $balanceDue = htmlspecialchars(htmlentities($_POST["balanceDue"]));
    $invoiceLines = htmlspecialchars(htmlentities($_POST["invoiceLines"]));
    $vat = htmlspecialchars(htmlentities($_POST["vat"]));
    $labourcost = htmlspecialchars(htmlentities($_POST["labourcost"]));
    
    
    $stockCode = html_entity_decode($_POST["stockcode"]);
    $itemDescription = html_entity_decode($_POST["itemDescription"]);
    $unitCost = html_entity_decode($_POST["unitCost"]);
    $quantity = html_entity_decode($_POST["quantity"]);
    $price = html_entity_decode($_POST["price"]);
    
    
    
    $query = "INSERT INTO `pref_invoice` (`invoiceID`, `invoiceNumber`, `jobNumber`, `invoiceDate`,"
	    . " `labourcost`,`vat`, `balanceDue`, `amountPaid`, `subTotal`, `total`, `customerTitle`) "
	    . "VALUES (NULL,?,?,?,?,?,?,?,?,?,?)";
    
    $sql = "SELECT `invoiceNumber` FROM `pref_invoice` WHERE `invoiceNumber` = '$invoiceNumber'";
    //this query string is used to get the last row inserted and used to prepare the invoice rows
    $query1="SELECT `invoiceID` FROM `pref_invoice` ORDER BY `invoiceID` DESC LIMIT 1";
    
    //this query is for invoice row inserted
    $queryInvoiceRow="INSERT INTO `pref_invoice_row`(`ID`, `invoice_id`, `stock_code`, `item_description`, `unit_price`, `qty`, `value`) VALUES (NULL,?,?,?,?,?,?)";
    //echo $invoiceNumber." ".$invoiceDate." ".$labourcost." ".$vat." ".$balanceDue." ".$amountPaid." ".$invoiceLines." ".$subtotal." ".$total." "."Union Bank";
    //the save invoice design should be able to check if the particular invoice has been save and re return an error report
    $con = new Connection();
	$link = $con->getConnection();
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_BOTH);
	if($result["invoiceNumber"]===$invoiceNumber)
	  {
	  	  echo 'Invoice Already Saved with invoice number: '.$result["invoiceNumber"];
	  }
		else
	  {
	$stmt = $link->prepare($query);
	if($stmt->execute(array($invoiceNumber,$jobNumber,$invoiceDate,$labourcost,$vat,$balanceDue,$amountPaid,$subtotal,$total,"Union Bank")))
			{
	      echo "Invoice Saved Succesfully!";//the invoice has been inserted succesfully so process the individual rows
	      $stmt2 = $link->prepare($query1);
	      $stmt2->execute();
	      $reply=$stmt2->fetch(PDO::FETCH_ASSOC);	      
	      $invoiceIDr = $reply["invoiceID"];	      
	      //run the insert query into the corresponding invoice row table
	      $stmt3 = $link->prepare($queryInvoiceRow);
	      $stmt3->execute(array($invoiceIDr,$stockCode,$itemDescription,$unitCost,$quantity,$price));
	      
	      }else{
	      echo "Failed to save the Invoice! An Error Occured";
	      }
	  
	    }
	   
    } 
  if(isset($_POST["saveinvoice"]))
    {
    //grab some values
    $invoiceDate = htmlspecialchars(htmlentities($_POST["invoiceDate"]));
    $invoiceNumber = htmlspecialchars(htmlentities($_POST["invoiceNumber"]));
    $jobNumber = htmlspecialchars(htmlentities($_POST["jobNumber"]));
    $amountDue  =htmlspecialchars(htmlentities($_POST["amountDue"]));
    $subtotal = htmlspecialchars(htmlentities($_POST["subtotal"]));
    $total = htmlspecialchars(htmlentities($_POST["total"]));
    $amountPaid = htmlspecialchars(htmlentities($_POST["amountPaid"]));
    $balanceDue = htmlspecialchars(htmlentities($_POST["balanceDue"]));
    $invoiceLines = htmlspecialchars(htmlentities($_POST["invoiceLines"]));
    $vat = htmlspecialchars(htmlentities($_POST["vat"]));
    $labourcost = htmlspecialchars(htmlentities($_POST["labourcost"]));
    
    $stockCode = html_entity_decode(htmlentities($_POST["stockcode"]));
    $itemDescription =html_entity_decode(htmlentities($_POST["itemDescription"]));
    $unitCost = html_entity_decode(htmlentities($_POST["unitCost"]));
    $quantity = html_entity_decode(htmlentities($_POST["quantity"]));
    $price = html_entity_decode(htmlentities($_POST["price"]));
    
    $query = "INSERT INTO `invoice` (`invoiceID`, `invoiceNumber`, `jobNumber`, `invoiceDate`,"
	    . " `isPaid`, `labourcost`,`vat`, `balanceDue`, `amountPaid`, `subTotal`, `total`, `customerTitle`) "
	    . "VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?)";
    $sql = "SELECT `invoiceNumber` FROM `invoice` WHERE `invoiceNumber` = '$invoiceNumber'";
    //this query string is used to get the last row inserted and used to prepare the invoice rows
    $query1="SELECT `invoiceID` FROM `invoice` ORDER BY `invoiceID` DESC LIMIT 1";
    
    //this query is for invoice row inserted
    $queryInvoiceRow="INSERT INTO `invoice_row`(`ID`, `invoice_id`, `stock_code`, `item_description`, `unit_price`, `qty`, `value`) VALUES (NULL,?,?,?,?,?,?)";
    //echo $invoiceNumber." ".$invoiceDate." ".$labourcost." ".$vat." ".$balanceDue." ".$amountPaid." ".$invoiceLines." ".$subtotal." ".$total." "."Union Bank";
    //the save invoice design should be able to check if the particular invoice has been save and re return an error report
    $con = new Connection();
	$link = $con->getConnection();
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_BOTH);
	if($result["invoiceNumber"]===$invoiceNumber)
	  {
	  	  echo 'Invoice Already Generated with invoice number:'.$result["invoiceNumber"];
	  }
		else
	  {
		  $con = new Connection();
	$link = $con->getConnection();
	$stmt = $link->prepare($query);
	if($stmt->execute(array($invoiceNumber,$jobNumber,$invoiceDate,1,$labourcost,$vat,$balanceDue,$amountPaid,$subtotal,$total,"Union Bank")))
			{
	      echo "Invoice Saved Succesfully!";//the invoice has been inserted succesfully so process the individual rows
	      $stmt2 = $link->prepare($query1);
	      $stmt2->execute();
	      $reply=$stmt2->fetch(PDO::FETCH_ASSOC);	      
	      $invoiceIDr = $reply["invoiceID"];	      
	      //run the insert query into the corresponding invoice row table
	      $stmt3 = $link->prepare($queryInvoiceRow);
	      $stmt3->execute(array($invoiceIDr,$stockCode,$itemDescription,$unitCost,$quantity,$price));
	      
	      }else{
	      echo "Failed to save the Invoice";
	      }
	  
	    }
	   
    }
    
    if(isset($_POST["newpartlist"]))
  {
  $description  = htmlentities(htmlentities($_POST["description"]));
  $partnumber = htmlentities(htmlentities($_POST["partnumber"]));
  $price = htmlentities(htmlentities($_POST["price"]));  
  
   $con = new Connection();
      $query = "INSERT INTO `partspricelist`(`ID`, `description`, `part_number`, `price`) "
	      . "VALUES (NULL,?,?,?)";
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
	      if($stmt->execute(array($description,$partnumber,$price)))
		{
		header("location:../ubnk/?view=newPart&feedback=New Stock added succesfully");
		}else
		  {
		header("location:../ubnk/?view=newPart&feedback=Failed to add stock");
		  
		  }
	      	      
  }
  
  if(isset($_POST["newlocation"]))
  {
  $branchname  = htmlentities(htmlentities($_POST["branchname"]));
  $splitunit = htmlentities(htmlentities($_POST["splitunit"]));
  $packageunit = htmlentities(htmlentities($_POST["packageunit"]));  
  $region = htmlentities(htmlentities($_POST["region"]));
  
   $con = new Connection();
      $query = "INSERT INTO `unionbanklocations`(`ID`, `location`, `split_unit`, `package_unit`, `region`) "
	      . "VALUES (NULL,?,?,?,?)";
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
	      if($stmt->execute(array($branchname,$splitunit,$packageunit,$region)))
		{
		header("location:http:../ubnk/index.php?view=newLocation&feedback=Location added Succesfully");
		}else
		  {
		  header("location:http:../ubnk/index.php?view=newLocation&feedback=Failed To add New Location. One or more errors occured");
		  
		  }
	      	      
  }
  
  
  //this code works for invoice update
  if(isset($_POST["updateInvoice"]))
    {
    //grab some values
    $amountDue  =htmlspecialchars(htmlentities($_POST["amountDue"]));
    $amountPaid = htmlspecialchars(htmlentities($_POST["amountPaid"]));
    $invoiceID = htmlspecialchars(htmlentities($_POST["invoiceID"]));
   
    
    $query = "UPDATE `invoice` SET `balanceDue` = ? ,`amountPaid`= ? WHERE `invoiceID` = ?";
     $con = new Connection();
     $link = $con->getConnection();
	      $stmt = $link->prepare($query);
	      if($stmt->execute(array($amountDue,$amountPaid,$invoiceID)))
		{
		echo "Invoice updated succesfully";
		}else
		  {
		echo "Failed to update Invoice";
		  
		  }
    }