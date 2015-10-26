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
	<link rel="shortcut icon" href="css/images/icon.ico">
	<link rel="stylesheet"  href="css/style.css">	
	<link rel="stylesheet"  href="css/jquery.treeview.css">
	<link rel="stylesheet"  href="css/mainstyle.css">	
	<link rel="stylesheet"  href="css/qtipv2css.css">
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.4.2.min.css">	
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
	<script src="js/jquery.min.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/index.js"></script>
	<script src="js/jquery.mobile-1.4.2.min.js" ></script>	
	<script src="js/jquery.treeview.min.js" ></script>		
	<script src="js/qtipv2js.js" ></script>	
	<script src="js/sliderConfig.js"></script>
	
	

</head>
<body>
 
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="false" data-msgtext="" data-inline="true">Icon (default)</button>
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext="" data-inline="true">Icon + text</button>
<button class="show-page-loading-msg" data-textonly="true" data-textvisible="true" data-msgtext="Text only loader" data-inline="true">Text only</button>
<button class="hide-page-loading-msg" data-inline="true" data-icon="delete">Hide</button>

<div id="page" data-role="page" class="jqm-demos jqm-home" data-ajax="false">
	<!-- /header -->
	<div data-role="header" class="jqm-header">
	  <h2><img src="css/images/mandilaslogo1.png" alt="Mandilas"></h2>
		<p><a href="../melnet/?action=logout" data-ajax="false" >Logout</a></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->
	<!-- content -->
      <div role="main" class="ui-content jqm-content" id="forummaindiv" >
	<div id="error_div"class="error">{$message}</div>
		{$mainContent}
	</div><!-- /content -->
	
<!-- panel -->
<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
<li data-filtertext="homepage" data-icon="home" ><a href="../melnet/?view=homeView" data-ajax="false">Home</a></li>
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../melnet/?view=ubnkView" data-ajax="false">Union Bank</a></li>
<!--total-->
<!--<li data-filtertext="homepage" data-icon="caret-r" ><a href="../melnet/?view=totalView" data-ajax="false">Total</a></li>-->
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../melnet/total/underConstruction.html" data-ajax="false">Total</a></li>

<!--Projects Menu-->
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../melnet/total/underConstruction.html" data-ajax="false">Projects</a></li>

<!--Inventory Menu-->
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../melnet/total/underConstruction.html" data-ajax="false">Inventory</a></li>

<!--Installation History-->
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../melnet/total/underConstruction.html" data-ajax="false">Installation History</a></li>

<!----ADMIN-------->
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../melnet/?view=adminView" data-ajax="false">Administrations</a></li>
</ul>
  </div>
<!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="true" class="jqm-footer">
		<p>melnet 1.0.1</p>
		<p>Copyright &COPY; mandilas ent. ltd. Bonny Island Rivers state.<br/>Designed by <a href='www.solightec.com'>Solight E &AMP; C Ltd. </a><br/>Phone: 08030520715,07082867101,<br/>Email: hanksjerry_dedon@yahoo.com, jerryhanksokafor@gmail.com</p>
	
	</div><!-- /footer -->

	
	
	
</div><!-- /page -->

</body>
</html>
