<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-22 12:42:50
         compiled from "C:\wamp\www\mandinet.com\temp\smarty\templates\invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27277550dfafaf08164-97973477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b48b54d1d3c1c8ff78ac006f99a4a9e6f67b28cb' => 
    array (
      0 => 'C:\\wamp\\www\\mandinet.com\\temp\\smarty\\templates\\invoice.tpl',
      1 => 1427021419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27277550dfafaf08164-97973477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550dfafb069e91_41633698',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550dfafb069e91_41633698')) {function content_550dfafb069e91_41633698($_smarty_tpl) {?><div id="page-wrap" data-role="none">

		<h2 id="header" class="center">INVOICE</h2>
		
		<div id="identity">
		
            <p data-role="none" id="address">
	      Mandilas Enterprises Ltd.,
	      35 Simpsons Street, P.O.Box 35 Lagos.
	      <br/>Mandilas Phone:0814138089,090093309918,09093309919
	      <br/>email:-acservice.parts@mandilasng.com
	      <br/>website:-www.mandilasng.com
	    </p>

            <div id="logo">
              <img id="image" src="../css/images/mandilaslogo1.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer" data-role="none">

            <p data-role="none" id="customer-title">
			Widget Corp.
			c/o Steve Widget</p>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea data-role="none" id="invoiceNumber">000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="invoiceDate" data-role="none">December 15, 2009</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><span class="due" data-role="none" id="amountDue">$875.00</span></td>
                </tr>

            </table><!--End of meta table-->
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row" id="itemID">
		    <td class="item-name"><div class="delete-wpr"><textarea data-role="none" class="item_name">Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea data-role="none" class="item_description">Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td>
		      <td><textarea class="cost" data-role="none" class="unitCost">$650.00</textarea></td>
		      <td><textarea class="qty" data-role="none" class="quantity">1</textarea></td>
		      <td><span class="price" >$650.00</span></td>
		  </tr>
		  
		  <tr class="item-row" id="itemID">
		    <td class="item-name"><div class="delete-wpr"><textarea data-role="none" class="item_name">SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		    <td class="description"><textarea data-role="none" class="item_description">Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
		      <td><textarea class="cost" data-role="none" class="unitCost">$75.00</textarea></td>
		      <td><textarea class="qty" data-role="none" class="quantity">3</textarea></td>
		      <td><span class="price" data-role="none">$225.00</span></td>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add an Item</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea  data-role="none" id="paid">$0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due" id="due">$875.00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <p>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</p>
		  <p><button data-role="none" id="print_invoice" class="invoice_button">Print Invoice</button><button data-role="none" id="save_invoice" class="invoice_button">Save Invoice</button></p>
		</div>
	
	</div><?php }} ?>
