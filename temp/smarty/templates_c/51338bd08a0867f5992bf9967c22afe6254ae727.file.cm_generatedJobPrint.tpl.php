<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-01 07:52:11
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\cm_generatedJobPrint.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2001855e53d0bcbd150-35515534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51338bd08a0867f5992bf9967c22afe6254ae727' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\cm_generatedJobPrint.tpl',
      1 => 1440847839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2001855e53d0bcbd150-35515534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customer' => 0,
    'jobid' => 0,
    'date' => 0,
    'location' => 0,
    'rcode' => 0,
    'maintype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e53d0bdb7187_66728471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e53d0bdb7187_66728471')) {function content_55e53d0bdb7187_66728471($_smarty_tpl) {?><?php echo '<script'; ?>
 src="../js/newJobJs.js" ><?php echo '</script'; ?>
>
<div id="page-wrap" data-role="none">
  
		<h2 id="invoice_header" class="center">NEW JOB</h2>
		
		<div id="identity">
		
        <div id="logo_carrier">
              <img id="image_carrie" src="../css/images/carrierLogo.png" alt="logo" />
            </div>
		
            <p data-role="none" id="address_job_card">
	      <strong class="main-title">Norman Industries Ltd.</strong>
	      <br/><strong>Mandilas Building:</strong>35 Simpsons Street, P.O.Box 35 Lagos.Tel:234-0-8129017302,08129017310 
	     <br/>email:-norman@mandilasng.com,website:-www.mandilasng.com.
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
                    <td class="meta-head1">Job ID</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
</td>
                </tr>
                <tr>

                    <td class="meta-head1">Date</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</td>
                </tr>
                </table><!--End of meta table-->
		
		</div>
		
		<table id="items">
		
		  <tr>
		    <th class="small-th">S/N:</th>
		      <th>Description:</th>
		      <th colspan="3" class="blank_1">Value</th>
		     
		  </tr>
		  
		  <tr class="item-row1">
		  <td>1</td>
		  <td>Location:</td>
		  <td colspan="3" class="blank_1"><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</td>
		  </tr>
		  <tr class="item-row1">
		  <td>2</td>
		  <td>Report Code:</td>
		  <td colspan="3" class="blank_1"><?php echo $_smarty_tpl->tpl_vars['rcode']->value;?>
</td>
		  </tr>
		  <tr class="item-row1">
		  <td>3</td>
		  <td>maintenance Type:</td>
		  <td colspan="3" class="blank_1"><?php echo $_smarty_tpl->tpl_vars['maintype']->value;?>
</td>
		  </tr>
		  <tr class="item-row1">
		  <td>4</td>
		  <td>Date Done:</td>
		  <td colspan="3" class="blank_1"></td>
		  </tr>
		  <tr class="item-row1">
		  <td>5</td>
		  <td>Unit Type:</td>
		  <td colspan="3" class="blank_1"></td>
		  </tr>
		  <tr class="item-row1">
		  <td>6</td>
		  <td>Unit ID:</td>
		  <td colspan="3" class="blank_1"></td>
		  </tr>
		  <tr class="item-row1">
		  <td>7</td>
		  <td>Hours:</td>
		  <td colspan="3" class="blank_1"></td>
		  </tr>
		  <tr class="item-row1">
		  <td>8</td>
		  <td>Fault Code:</td>
		  <td colspan="3" class="blank_1"></td>
		  </tr>
		  <tr class="item-row1">
		  <td>9</td>
		  <td>Repaire Code:</td>
		  <td colspan="3" class="blank_1"></td>
		  </tr>
		  <tr class="item-row1">
		  <td>10</td>
		  <td>RootCause Code:</td>
		  <td colspan="3" class="blank_1"></td>
		  </tr>
		  <tr class="item-row1">
		  <td>11</td>
		  <td>Material Used:</td>
		  <td colspan="3" class="blank_1"></td>
		  </tr>
		   <tr class="item-row1">
		  <td>12</td>
		  <td>Job Status:</td>
		  <td colspan="3" class="blank_1"></td>
		  </tr>
		  
			  
		  <tr id="hiderow_1">
		    <td colspan="5">&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/></td>
		  </tr>
		  
		  
		  <tr>

		      <td colspan="2" class="blank_1"> </td>
		      <td colspan="1" class="new-job-footer">Name:</td>		      
		      <td colspan="1" class="new-job-footer">Signature:</td>
		      <td class="new-job-footer">Date:</td>
		  </tr>
		  
		  <tr>
		      <td colspan="1" class="blank_1"></td>
		      <td colspan="1" class="new-job-footer">Customer:</td>
		      <td colspan="1" class="new-job-footer"></td>	
		      <td colspan="1" class="new-job-footer"></td>
		      <td class="new-job-footer"></td>
		  </tr>
		  <tr>
		      <td colspan="1" class="blank_1"></td>
		      <td colspan="1" class="new-job-footer">Technician:</td>
		      <td colspan="1" class="new-job-footer"></td>	
		      <td colspan="1" class="new-job-footer"></td>
		      <td class="new-job-footer"></td>
		  </tr>
		  <tr>
		      <td colspan="1" class="blank_1"></td>
		      <td colspan="1" class="new-job-footer">Supervisor:</td>
		      <td colspan="1" class="new-job-footer"></td>	
		      <td colspan="1" class="new-job-footer"></td>
		      <td class="new-job-footer"></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <p>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</p>		  
		  <p>A 15% VAT is applied to the overall purchase</p>
		  <p><button data-role="none" id="print_job" class="invoice_button">Print Job</button>
		    <button data-role="none" id="save_job" class="invoice_button">Save</button></p>
		</div>
	
	</div><?php }} ?>
