<script src="../js/newJobJs.js" ></script>
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
	      
		<em class="customer-titles">Branch:{$customer}</em>
		    </label>
		    </p>
			
            <table id="meta">             
		
		<tr>
                    <td class="meta-head1">Job ID</td>
                    <td>{$jobid}</td>
                </tr>
                <tr>

                    <td class="meta-head1">Date</td>
                    <td>{$date}</td>
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
		  <td colspan="3" class="blank_1">{$location}</td>
		  </tr>
		  <tr class="item-row1">
		  <td>2</td>
		  <td>Report Code:</td>
		  <td colspan="3" class="blank_1">{$rcode}</td>
		  </tr>
		  <tr class="item-row1">
		  <td>3</td>
		  <td>maintenance Type:</td>
		  <td colspan="3" class="blank_1">{$maintype}</td>
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
	
	</div>