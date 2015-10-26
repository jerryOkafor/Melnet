<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{$title}</title>
	<link rel="shortcut icon" href="../css/images/icon.ico">
	<link rel="stylesheet"  href="../css/themes/default/jquery.mobile-1.4.2.min.css">	
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css" media="screen">
	
	<link rel="stylesheet"  href="../css/mainstyle.css" media="screen">
	<link rel="stylesheet" href="../css/jquery.mobile.datepicker.css" />
	<link rel="stylesheet" href="../css/jquery.mobile.datepicker.theme.css" />
	<link rel="stylesheet"  href="../css/invoice.css" media="screen">	
	<link rel="stylesheet"  href="../css/print.css" media="print">
	
	  <script src="../js/jquery.min.js"></script>
	
	
	
	


</head>
<body>
 
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="false" data-msgtext="" data-inline="true">Icon (default)</button>
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext="" data-inline="true">Icon + text</button>
<button class="show-page-loading-msg" data-textonly="true" data-textvisible="true" data-msgtext="Text only loader" data-inline="true">Text only</button>
<button class="hide-page-loading-msg" data-inline="true" data-icon="delete">Hide</button>

<div data-role="page" class="jqm-demos jqm-home" data-ajax="false">
	<!-- /header -->
	<div data-role="header" class="jqm-header hide" class="header">
	  <h2><img class="logo" src="../css/images/mandilaslogo1.png" alt="Mandilas"></h2>
		<p><a href="../?action=logout" data-ajax="false">Logout</a></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->
	
	<!-- content -->
      <div role="main" class="ui-content jqm-content">	
	<p class="center error"><strong >{$fdbk}</strong></p>
		{$slider}
		{$mainContent}

	</div><!-- /content -->
	
<!-- panel -->
<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
<li data-filtertext="demos homepage" data-icon="home" ><a href="../?view=homeView" data-ajax="false">Main Home</a></li>
<li data-filtertext="demos homepage" data-icon="home"  ><a href="../ubnk" data-ajax="false">Home</a></li>

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
  <h3>New Entry</h3>
	<ul>
		
		<li data-filtertext="pm"><a href="../ubnk/?view=newCmJobView" data-ajax="false">New CM Job</a></li>		
		<li data-filtertext="pm"><a href="../ubnk/?view=newPmJobView" data-ajax="false">New PM Job</a></li>
		<li data-filtertext="pm"><a href="../ubnk/?view=newLocation" data-ajax="false">New Location(Branch)</a></li>
		<li data-filtertext="pm"><a href="../ubnk/?view=newPart" data-ajax="false">New Spare Part</a></li>
	</ul>
  </li>
  
  
  <!--Update Menu-->
  <li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
  <h3>Update Entry</h3>
	<ul>
		
		<li data-filtertext="cm"><a href="../ubnk/updateDialog.html" data-ajax="false">Update CM Job</a></li>
	  
		<li data-filtertext="pm"><a href="../ubnk/updatePmDialog.html" data-ajax="false">Update PM Job</a></li>
	</ul>
  </li>

<!----Generate report Menu-------->

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Generate Report</h3>
	<ul>
		<li data-filtertext="pm"><a href="../ubnk/monthlyReportDialog.html" data-transition="pop"data-ajax="false" >Monthly Report</a></li>
		<li data-filtertext="pm"><a href="../ubnk/index.php?view=locationReport" data-ajax="false">Location Monthly Report</a></li>
		<li data-filtertext="pm"><a href="../ubnk/unitReportDialog.php" data-transition="pop" data-ajax="false">Unit Report</a></li>		
		<li data-filtertext="pm"><a href="../ubnk/?view=allReport" data-transition="pop" data-ajax="false">All Report</a></li>
	</ul>
</li>
<!--Prefformer Menu-->
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Preformer</h3>
	<ul>
		<li data-filtertext="pm"><a href="#popupPreformer" data-rel="popup" data-transition="pop" data-position-to="window">New Preformer</a></li>
		<li data-filtertext="pm"><a href="../ubnk/index.php?view=locationReport" data-ajax="false">View All Preformer</a></li>
      </ul>
</li>
		


<!----Invoice Menu------->
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Invoice</h3>
	<ul>
		<li data-filtertext="pm"><a href="../ubnk/allInvoice.html" data-ajax="false" data-transition="pop" >Viw All Generated Invoice</a></li>
		<li data-filtertext="pm"><a href="../ubnk/invoiceChoice.html" data-transition="pop" >Generate From Job ID</a></li>
		<li data-filtertext="pm"><a href="../ubnk/monthlyReportDialog.html" data-transition="pop" data-ajax="false">Generate From Report</a></li>
</ul>
</li>

</div>
<!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="true" class="jqm-footer">
	  <p>melnet 1.0.1</p>
	  <p></p>
	  <p>Copyright &COPY; mandilas ent. ltd. Bonny Island Rivers state.<br/>Designed by <a href='www.solightec.com'>Solight E &AMP; C Ltd. </a><br/>Phone: 08030520715,07082867101,<br/>Email: hanksjerry_dedon@yahoo.com, jerryhanksokafor@gmail.com</p>
	
	<script src="../_assets/js/index.js"></script>
	<script src="../js/jquery.mobile-1.4.2.min.js" ></script>
	<script src="../js/jquery.mobile.datepicker.js"></script>
	<script src="../js/ubnk.js" ></script>
	
	</div><!-- /footer -->
	
	
<div data-role="popup" id="popupPreformer" data-theme="a" class="ui-corner-all" data-dismissible="false">
  <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
  <form method="POST" action="../pages/index.php" data-ajax="false"> 
        <div style="padding:10px 20px;">
            <h3>Please Enter the Item Details</h3>
	    
            <label for="customer" >Customer Name:</label>
            <select type="text" name="customer" id="customer" data-theme="a">
	      <option>Union Bank</option>
	    </select>
	    
	    <!--location-->
	    <label for="location">Location / Branch:</label>
            <select type="text" name="branch" id="customer" data-theme="a">
	      {$locations}
	    </select>
	    
	    <!--materials-->
	    <label for="materials">Material:</label>
            <select type="text" name="material" id="customer" data-theme="a">
	   {$materials}
	    </select>
	    
	    <!--quantity-->
	    	    
            <label for="pw">Quantity:</label>
            <input type="number" name="pass" placeholder="2" value="1" data-theme="a">
	    
            <button type="submit" name="generatePreformer" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Generate</button>
        </div>
    </form>
</div>
	    
<div data-role="popup" id="popupPreformerRow" data-theme="a" class="ui-corner-all" data-dismissible="false">
  <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
 
        <div style="padding:10px 20px;">
            <h3>Please Enter the Item Details</h3>
	     
	    <!--materials-->
	    <label for="materials">Material:</label>
            <select type="text" id="pref_material" data-theme="a">
	   {$materials}
	    </select>
	    
	    <!--quantity-->
	    	    
            <label for="pw">Quantity:</label>
            <input type="number" name="pass" id="pref_qty" value="1" placeholder="2" data-theme="a">
	    
            <button type="submit" name="generatePreformer" id="preformer_add_row_button" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Add Item</button>
        </div>
  
</div>

	    <!--small popup-->
<div data-role="popup" id="popupInfo" class="ui-content" data-theme="a" style="max-width:350px;">
  <p id="alert-pop"></p>
</div>
	
<!--Confirm dialog box-->

    <div id="confirmDialog" class="ui-content" data-role="popup" data-theme="a">

        <p id="confirmQuestion"></p>
	<div id="confirmQuestion1"></div>

         <div class="ui-grid-a">
            <div class="ui-block-a">
                <a id="yes" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="none" data-ajax="false">Yes</a>
            </div>
            <div class="ui-block-b">
                <a id="cancel" class="ui-btn ui-corner-all ui-mini ui-btn-a" data-rel="none" data-ajax="false">Cancel</a>
            </div>
        </div>

	</div><!-- /popup -->
	
	
	
</div><!-- /page -->

</body>
</html>
