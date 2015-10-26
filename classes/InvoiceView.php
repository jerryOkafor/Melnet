<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InvoiceView
 *
 * @author DABBY(3pleMinds)
 */
require_once 'Connection.php';
require_once '../core/Core.php';
class InvoiceView
{
  //put your code here
  private $date;
  private $query;
  
  
  public function __construct($date)
    {
    $this->date = $date;
    $this->query= "SELECT * FROM `invoice` WHERE 1";
    }
    
 public function showInvoice()
    {
      $tabelHead = "<div>
<table border='1' data-role='none' class='reporttable ui-responsive'><thead><tr> 
      <th class='no_border hide' colspan='3'>Actions</th>
      <th>S/N</th>
      <th>Invoice Number</th>
      <th>Job Number</th>
      <th>Job Type</th>
      <th>Invoice Date</th>
       <th>Customer</th>
      <th>Labour Cost</th>
      <th>VAT</th>
      <th>Balance Due</th>
      <th>Amount Paid</th>       
      <th>Stock Code</th>
      <th>Description</th>
      <th>Unit Cost</th>
      <th>Qty</th>
      <th>Price</th>
      <th>Subtotal</th>
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
		  
		$tableFooter="<tr class='last_row'>
			<td class='no_border hide'></td>
			<td class='no_border hide'></td>
			<td class='no_border hide'></td>
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
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>		
			</tr><tbody></table>";
		
    return $tabelHead.$tableRows.$tableFooter.'</div><p class="center hide"><button data-role="none" id="print_report" class="report_button">Print Invoice Report</button>&nbsp;&nbsp;&nbsp;'
	    . '<button data-role="none" id="save_report" class="report_button">Export Invoice Report</button></p>';
	
    
    }
    
    private function populateReportTable($counter,$result_row)
	{
     $id= $result_row['invoiceID'];
  
     $out="";
     $printed = true;
     if($counter%2==0)
       {$out.="<tr class='even'><td class='no_border hide'>";}else {$out.="<tr class='odd'><td class='no_border hide'>";}
     $out.= " <a data-ajax='false' href='../ubnk/index.php?action=updateInvoice&invoiceID=$id' class='edit_icon";
     
     if(!$printed)
       {
        $out.=" printed_invoice'";
       }else
	 {
	 $out.=" unprinted_invoice' ";
	 }
		$out.= " title='Edit Invoice'><img src='../_assets/img/b_edit.png'>Update</a></td><td class='no_border"
			. " hide export_icon'><a data-ajax='false' class='' href='../ubnk/index.php?action=mailInvoice&invoiceID"
			. "=$id' title='Send Invoice to Client'><img src='../_assets/img/b_globe.gif'>Mail</a></td>"
			. "<td class='no_border hide export_icon'><a data-ajax='false' href='../ubnk/index.php?"
			. "action=printInvoice&invoiceID=$id' title='Print Invoice'><img src='../_assets/img/b_print.png'>Print</a></td>";
	$out.="<td>$counter</td>"
		. "<td>".$result_row['invoiceNumber']."</td>"
		. "<td>".$result_row['jobNumber']."</td>"
		. "<td>".$result_row['Job_type']."</td>"
		. "<td>".$result_row['invoiceDate']."</td>"		
		. "<td>".$result_row['customerTitle']."</td>"
		. "<td ondblclick='invoiceUpdate(this,$id)' col='labourcost' maintype='".$result_row['Job_type']."'>".$result_row['labourcost']."</td>"
		. "<td>".$result_row['vat']."</td>"
		. "<td>".$result_row['balanceDue']."</td>"		
		. "<td>".$result_row['amountPaid']."</td>"
		. "<td>".$result_row['stockCode']."</td>"
		. "<td>".html_entity_decode(html_entity_decode($result_row['itemDescription']))."</td>"
		. "<td>".$result_row['unitPrice']."</td>"
		. "<td>".$result_row['quantity']."</td>"
		. "<td>".$result_row['price']."</td>"
		. "<td>".$result_row['subTotal']."</td>"		
		. "<td>".$result_row['total']."</td>";
						
	return $out;							
	}//end for
}
