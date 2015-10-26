<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 17:44:32
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\UpdateInvoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7506552aa8c536cdf2-52265417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e722ee9f77853997cd435d0f3214b5928f6fb5af' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\UpdateInvoice.tpl',
      1 => 1429199069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7506552aa8c536cdf2-52265417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552aa8c56850f9_89237259',
  'variables' => 
  array (
    'invoiceID' => 0,
    'customer' => 0,
    'invoiceNumber' => 0,
    'invoiceDate' => 0,
    'amountDue' => 0,
    'jobid' => 0,
    'stockCode' => 0,
    'description' => 0,
    'unitCost' => 0,
    'quantity' => 0,
    'price' => 0,
    'labourCost' => 0,
    'subtotal' => 0,
    'vat' => 0,
    'total' => 0,
    'paid' => 0,
    'amountdue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552aa8c56850f9_89237259')) {function content_552aa8c56850f9_89237259($_smarty_tpl) {?>     
	<?php echo '<script'; ?>
 src="../js/invoice.js" ><?php echo '</script'; ?>
>
<div id="page-wrap" data-role="none" >
  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['invoiceID']->value;?>
"  id="invoiceID" name="invoiceID">
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
	      
		<em class="customer-titles">Branch:<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
</em>
		    </label>
		    </p>
			
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea data-role="none" id="invoiceNumber"><?php echo $_smarty_tpl->tpl_vars['invoiceNumber']->value;?>
</textarea></td>
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
                    <td><textarea id="invoiceDate" class="date" data-role="none"><?php echo $_smarty_tpl->tpl_vars['invoiceDate']->value;?>
</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><span class="due" data-role="none" id="amountDue"><?php echo $_smarty_tpl->tpl_vars['amountDue']->value;?>
</span></td>
                </tr>
		<tr>
                    <td class="meta-head">Job ID</td>
                    <td><span class="jobid" data-role="none" id="jobid"><?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
</span></td>
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
		    <td class="item-name"><div class="delete-wpr"><textarea data-role="none" class="item_name"><?php echo $_smarty_tpl->tpl_vars['stockCode']->value;?>
</textarea></div></td>
		    <td class="description"><textarea disabled data-role="none" class="item_description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea></td>
		      <td><del>N</del><span disabled  class="cost" data-role="none" id="re-unitCost"><?php echo $_smarty_tpl->tpl_vars['unitCost']->value;?>
</span></td>
		      <td><textarea  disabled  class="qty" data-role="none" id="re-quantity"><?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
</textarea></td>
		      <td><span class="price" ><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</span></td>
		  </tr>
			  
		  <tr id="hiderow">
		    <td colspan="5">&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/></td>
		  </tr>
		  
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Labour</td>
		      <td class="total-value"><div id="labourcost"><del>N</del><?php echo $_smarty_tpl->tpl_vars['labourCost']->value;?>
</div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">VAT</td>
		      <td class="total-value"><div id="vat"><?php echo $_smarty_tpl->tpl_vars['vat']->value;?>
</div></td>
		  </tr>
		  <tr>

		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Total</td>
		      <td class="total-value"><div id="total"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line">Amount Paid</td>
		      <td class="total-value"><span><del>N</del><textarea  data-role="none" id="paid"><?php echo $_smarty_tpl->tpl_vars['paid']->value;?>
</textarea></span></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="1" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due" id="due"><?php echo $_smarty_tpl->tpl_vars['amountdue']->value;?>
</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <p>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</p>		  
		  <p>A 15% VAT is applied to the overall purchase</p>
		  <p><button data-role="none" id="print_invoice" class="invoice_button">Print Invoice</button><button data-role="none" id="update_invoice" class="invoice_button">Update Invoice</button></p>
		</div>
	
	</div>
		<?php }} ?>
