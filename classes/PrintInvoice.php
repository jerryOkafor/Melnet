<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrintInvoice
 *
 * @author DABBY(3pleMinds)
 */


require_once 'Connection.php';
class PrintInvoice
{
  //put your code here
  private $invoiceID;
  private $query;
  private $query_row;
  private $invoiceRows;
  
  public function __construct($invoieID)
    {
    $this->invoiceID = $invoieID;
    $this->query = "SELECT * FROM   `invoice` WHERE `invoiceID` = '$this->invoiceID'";   
    $this->query_row = "SELECT * FROM   `invoice_row` WHERE `invoice_id` = '$this->invoiceID'";
    $this->invoiceRows = "";
    
      }
  public function ejectInvoice()
    {
     $con = new Connection();
	      $link = $con->getConnection();
	      $stmt = $link->prepare($this->query);
	      $stmt->execute(); 
	      $row = $stmt->fetch(PDO::FETCH_BOTH);
	      
	      //execute the second query
	      $stmt1 = $link->prepare($this->query_row);
	      $stmt1->execute(); 
	      $row1 = $stmt1->fetch(PDO::FETCH_BOTH);
	      
       //convert the material to an array and iterate
      $codes = explode("*",$row1["stock_code"]);
      $desc = explode("*",$row1["item_description"]);    
      $qty = explode("*",$row1["qty"]);
      $rate = explode("*",$row1["unit_price"]);  
      $value = explode("*",$row1["value"]);

      
      //print_r($materials);
      
      for ($i= 0; $i < sizeof($codes)-1 ;$i++)
	{
	
	 $this->invoiceRows .= ' <tr class="item-row" id="itemID"><td>'.($i+1).'</td>
		    <td class="item-name"><div class="delete-wpr"><textarea data-role="none" class="item_name">'.$codes[$i].'</textarea></div></td>
		    <td class="description"><textarea disabled data-role="none" class="item_description">'.html_entity_decode($desc[$i]).'</textarea></td>
		      <td><span disabled  class="cost" data-role="none" id="re-unitCost"><del>N</del>'.$rate[$i].'</span></td>
		      <td><textarea  disabled  class="qty" data-role="none" id="re-quantity">'.$qty[$i].'</textarea></td>
		      <td><span class="price" ><del>N</del>'.$value[$i].'</span></td>
		  </tr>';
	}       
	  
      
      
	      
	      return array("invoiceDate"=> $row["invoiceDate"],"jobid"=>$row["jobNumber"],"invoiceNumber"=> $row["invoiceNumber"],"subtotal"=> $row["subTotal"],
		  "total"=> $row["total"],"invoiceRows"=>$this->invoiceRows, "amountPaid"=> $row["amountPaid"], "balanceDue"=> $row["balanceDue"], "vat"=> $row["vat"],
		  "labourCost"=> $row["labourcost"],"customer"=>$row["customerTitle"]);	
	      
		    
    }
}
