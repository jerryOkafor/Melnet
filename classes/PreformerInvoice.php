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
class PreformerInvoice
{
 private $invoiceNumber;
 private $jobNumber;
 private $customer;
 private $labour;
 private $invoiceStatus;
 private $stockRows;
 private $materials;
 public function __construct($materials)
    {
     
      $this->labour = 0;      
      $this->stockRows = "";
      $this->initInvoice();
      $this->materials = $materials;
      
      
    }
    private function initInvoice()
      {
      $core = new Core();
      $this->invoiceNumber = $core->generatePreformerInvoiceNumber();
     
      $this->jobNumber = $core->generateCmJobId();
	$details = $core->getAllStockDetails($this->materials);
	
	$this->stockRows.='<tr class="item-row" id="item0">'
		. '<td>1</td>'
		. '<td class="item-name"><textarea data-role="none" class="item_name" >'.$details['part_number'].'</textarea></td>'
		. '<td class="description"><textarea disabled data-role="none" class="item_description">'.$details['description'].'</textarea></td>'
		. '<td><span disabled  class="cost" data-role="none" id="unitCost1"><del>N</del>'.$details['price'].'</span></td>'
		. '<td><textarea  disabled  class="qty" data-role="none" id="quantity1">1</textarea></td>'
		. '<td><span class="price" >0.00</span></td></tr>';
	
       
	  
      
      }
  //put your code here
    public function genrateInvoice(){
      
	return array("invoicenumber"=>$this->invoiceNumber,"jobid"=>$this->jobNumber,"customer"=>$this->customer,"stockRows"=>$this->stockRows,"labour"=>$this->labour);
      }
      
       public function checkInvoiceStatus(){
      
	return $this->invoiceStatus;
	 
       }
      
}


