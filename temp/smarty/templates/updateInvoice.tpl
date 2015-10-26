     
	<script src="../js/invoice.js" ></script>
<div id="page-wrap" data-role="none" >
  <input type="hidden" value="{$invoiceID}"  id="invoiceID" name="invoiceID">
		<h2 id="invoice_header" class="center">INVOICE</h2>
		
		<div id="identity">
		
            <p data-role="none" id="address">
	      Norman Industries Ltd.,
	      35 Simpsons Street, P.O.Box 35 Lagos.
	      <br/>Mandilas Phone:01 791 8387,01 793 6522
	      <br/>email:-norman@mandilasng.com, normna_mandilas@multilinks.com
	      <br/>website:-www.mandilasng.com
	    </p>

            <div id="logo">
              <img id="image" src="../css/images/norman.jpg" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer" data-role="none">
		  <p data-role="none"><label  class="customer-title">Customer:</label>
		    <label data-role="none" id="customer-name"  >
	      Union Bank Nig. Plc,<br/>	      
	      Major Projects Department,<br/>	      
	      3<sup>rd</sup> Floor, Stallion Plaza,<br/>
	      36 Marina Lagos.<br/><br/>
	      
		<em class="customer-titles">Branch:{$customer}</em>
		    </label>
		    </p>
			
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea data-role="none" id="invoiceNumber">{$invoiceNumber}</textarea></td>
                </tr>
		<tr>
                    <td class="meta-head">TIN:</td>
                    <td>01669305-0001</td>
                </tr>
		<tr>
                    <td class="meta-head">VAT REG NO:</td>
                    <td>1KV 160029679</td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="invoiceDate" class="date" data-role="none">{$invoiceDate}</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><span class="due" data-role="none" id="amountDue">{$amountDue}</span></td>
                </tr>
		<tr>
                    <td class="meta-head">Job ID</td>
                    <td><span class="jobid" data-role="none" id="jobid">{$jobid}</span></td>
                </tr>

            </table><!--End of meta table-->
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Stock Code</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row" id="itemID">
		    <td class="item-name"><div class="delete-wpr"><textarea data-role="none" class="item_name">{$stockCode}</textarea></div></td>
		    <td class="description"><textarea disabled data-role="none" class="item_description">{$description}</textarea></td>
		      <td><del>N</del><span disabled  class="cost" data-role="none" id="re-unitCost">{$unitCost}</span></td>
		      <td><textarea  disabled  class="qty" data-role="none" id="re-quantity">{$quantity}</textarea></td>
		      <td><span class="price" >{$price}</span></td>
		  </tr>
			  
		  <tr id="hiderow">
		    <td colspan="5">&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/></td>
		  </tr>
		  
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Labour</td>
		      <td class="total-value"><div id="labourcost"><del>N</del>{$labourCost}</div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">{$subtotal}</div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">VAT</td>
		      <td class="total-value"><div id="vat">{$vat}</div></td>
		  </tr>
		  <tr>

		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Total</td>
		      <td class="total-value"><div id="total">{$total}</div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Amount Paid</td>
		      <td class="total-value"><span><del>N</del><textarea  data-role="none" id="paid">{$paid}</textarea></span></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due" id="due">{$amountdue}</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <p>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</p>		  
		  <p>A 15% VAT is applied to the overall purchase</p>
		  <p><button data-role="none" id="print_invoice" class="invoice_button">Print Invoice</button><button data-role="none" id="update_invoice" class="invoice_button">Update Invoice</button></p>
		</div>
	
	</div>
		