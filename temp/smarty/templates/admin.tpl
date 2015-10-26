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
	<link rel="stylesheet"  href="../css/style.css">
	<link rel="stylesheet"  href="../css/mainstyle.css">		
	<link rel="stylesheet"  href="../css/qtipv2css.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet"  href="../css/themes/default/jquery.mobile-1.4.2.min.css">	
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../js/jquery.min.js"></script>		
	<script src="../_assets/js/index.js"></script>
	<script src="../js/jquery.mobile-1.4.2.min.js" ></script>
	<script src="../js/qtipv2js.js" ></script>
	
	

</head>
<body>
 
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="false" data-msgtext="" data-inline="true">Icon (default)</button>
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext="" data-inline="true">Icon + text</button>
<button class="show-page-loading-msg" data-textonly="true" data-textvisible="true" data-msgtext="Text only loader" data-inline="true">Text only</button>
<button class="hide-page-loading-msg" data-inline="true" data-icon="delete">Hide</button>

<div id="page" data-role="page" class="jqm-demos jqm-home" data-ajax="false">
	<!-- /header -->
	<div data-role="header" class="jqm-header">
	  <h2><img src="../css/images/mandilaslogo1.png" alt="Mandilas"></h2>
		<p><a href="../?action=logout" data-ajax="false">Logout</a></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->
	<!-- content -->
      <div role="main" class="ui-content jqm-content" id="forummaindiv" >
	<h3>Admin Main Page</h3>
	
		{$mainContent}

	</div><!-- /content -->
	
<!-- panel -->
<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
<li data-filtertext="demos homepage" data-icon="home" ><a href="../?view=homeView" data-ajax="false">Main Home</a></li>
<li data-filtertext="demos homepage" data-icon="home" ><a href="../admin" data-ajax="false">Admin Home</a></li>


<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Users</h3>
	<ul>
		<li data-filtertext="pm"><a href="../admin/?view=addAUser" data-ajax="false">Add A User</a></li>
		<li data-filtertext="pm"><a href="../admin/?view=dropAUser" data-ajax="false">Drop A User</a></li>
	
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Reports</h3>
	<ul>
	  <li data-filtertext="pm"><a href="../admin/?view=generateReport" data-ajax="false">Generate Report</a></li>
		<li data-filtertext="pm"><a href="../admin/?view=editReport" data-ajax="false">Edit Reports</a></li>
	</ul>
</li>

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Invoice</h3>
	<ul>
	  <li data-filtertext="pm"><a href="../admin/?view=viewInvoice" data-ajax="false">View Invoices</a></li>
		<li data-filtertext="pm"><a href="../admin/?view=printInvoice" data-ajax="false">Print Invoice</a></li>
	</ul>
</li>


</div>
<!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="true" class="jqm-footer">
		<p>melnet 1.0.1</p>
		<p>Copyright &COPY; mandilas ent. ltd. Bonny Island Rivers state.<br/>Designed by <a href='www.solightec.com'>Solight E &AMP; C Ltd. </a><br/>Phone: 08030520715,07082867101,<br/>Email: hanksjerry_dedon@yahoo.com, jerryhanksokafor@gmail.com</p>
	
	</div><!-- /footer -->

	
	
	
</div><!-- /page -->

</body>
</html>
