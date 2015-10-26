<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Invoice
 *
 * @author DABBY(3pleMinds)
 */
require_once 'Connection.php';
require_once '../core/Core.php';
class Invoice
{
 private $invoiceNumber;
 private $jobNumber;
 private $customer;
 private $labour;
 private $jobidkey;
 private $invoiceStatus;
 private $stockRows;
 public function __construct($jobidkey)
    {
     
      $this->jobidkey = $jobidkey;
      $this->labour = 0;      
      $this->stockRows = "";
      $this->initInvoice();
      
    }
    private function initInvoice()
      {
      $core = new Core();
      //connnect t data base
      $query = "SELECT * FROM `ubnkrecords` WHERE `ID` = '$this->jobidkey' OR `jobid` = '$this->jobidkey'";
      $con = new Connection();
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $row = $stmt->fetch(PDO::FETCH_BOTH);
	
      $this->invoiceStatus =$row["invoiceStatus"];
	
	$this->invoiceNumber = $core->generateInvoiceNumber();
      $this->jobNumber = $row['jobid'];
      $this->quantity=1;
      $this->labour += $row["labourcost"];      
      $this->customer = $row["customer"];
      
      //convert the material to an array and iterate
      $materials = explode("+",$row["material"]);
      
      //print_r($materials);
      
      for ($i= 0; $i < sizeof($materials) ;$i++)
	{
	$details = $core->getAllStockDetails($materials[$i]);
	
	$this->stockRows.='<tr class="item-row" id="item'.$i.'"><td>'.($i+1).'</td>'
		. '<td class="item-name"><div class="delete-wpr"><textarea data-role="none" class="item_name" >'.$details['part_number'].'</textarea></div></td>'
		. '<td class="description"><textarea disabled data-role="none" class="item_description">'.$details['description'].'</textarea></td>'
		. '<td><span disabled  class="cost" data-role="none" id="unitCost'.$i.'"><del>N</del>'.$details['price'].'</span></td>'
		. '<td><textarea  disabled  class="qty" data-role="none" id="quantity'.$i.'">1</textarea></td>'
		. '<td><span class="price" >0.00</span></td></tr>';
	}
       
	  
      
      }
  //put your code here
    public function genrateInvoice(){
      
	return array("invoicenumber"=>$this->invoiceNumber,"jobid"=>$this->jobNumber,"customer"=>$this->customer,"stockRows"=>$this->stockRows,"labour"=>$this->labour);
      }
      
       public function checkInvoiceStatus(){
      
	return $this->invoiceStatus;
	 
       }
      
}


