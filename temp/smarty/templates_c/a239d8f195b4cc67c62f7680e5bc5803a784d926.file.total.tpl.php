<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-21 09:01:01
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\total.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10367550fee798ad880-46554238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a239d8f195b4cc67c62f7680e5bc5803a784d926' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\total.tpl',
      1 => 1440140330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10367550fee798ad880-46554238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550fee79a18d54_28378492',
  'variables' => 
  array (
    'title' => 0,
    'fdbk' => 0,
    'slider' => 0,
    'mainContent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550fee79a18d54_28378492')) {function content_550fee79a18d54_28378492($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="shortcut icon" href="../css/images/icon.ico">
	<link rel="stylesheet"  href="../css/mainstyle.css" media="screen">
	<link rel="stylesheet"  href="../css/invoice.css" media="screen">	
	<link rel="stylesheet"  href="../css/print.css" media="print">
	<link rel="stylesheet"  href="../css/themes/default/jquery.mobile-1.4.2.min.css">	
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css" media="screen">
	<link rel="stylesheet" href="../css/jquery.mobile.datepicker.css" />
	<link rel="stylesheet" href="../css/jquery.mobile.datepicker.theme.css" />
	<?php echo '<script'; ?>
 src="../js/jquery.min.js"><?php echo '</script'; ?>
>	
	
	


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
	<p class="center error"><strong ><?php echo $_smarty_tpl->tpl_vars['fdbk']->value;?>
 Still under construction!</strong></p>
		<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['mainContent']->value;?>


	</div><!-- /content -->
	
<!-- panel -->
<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
<li data-filtertext="demos homepage" data-icon="home" ><a href="../?view=homeView" data-ajax="false">Main Home</a></li>
<li data-filtertext="demos homepage" data-icon="home"  ><a href="../total" data-ajax="false">Home</a></li>

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
  <h3>New Entry</h3>
	<ul>
		
		<li data-filtertext="pm"><a href="../total/?view=newJobView" data-ajax="false">Genrate Job</a></li>
		<li data-filtertext="pm"><a href="../total/updateDialog.html" data-ajax="false">Update Job</a></li>
		<li data-filtertext="pm"><a href="../total/?view=newLocation" data-ajax="false">New Location</a></li>
		<li data-filtertext="pm"><a href="../total/?view=newPart" data-ajax="false">New Part List</a></li>
	</ul>
  </li>

<!----CM-------->

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Generate Report</h3>
	<ul>
		<li data-filtertext="pm"><a href="../total/monthlyReportDialog.html" data-transition="pop" >Monthly Report</a></li>
		<li data-filtertext="pm"><a href="../total/index.php?view=locationReport" data-ajax="false">Location Monthly Report</a></li>
		<li data-filtertext="pm"><a href="../total/unitReportDialog.php" data-transition="pop" >Unit Report</a></li>
		<li data-filtertext="pm"><a href="../total/?view=allReport" data-transition="pop" >All Report</a></li>
	</ul>
</li>
<!----PM-------->

<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Invoice</h3>
	<ul>
		<li data-filtertext="pm"><a href="../total/allInvoice.html" data-ajax="false" data-transition="pop" >Viw All Generated Invoice</a></li>
		<li data-filtertext="pm"><a href="../total/invoiceChoice.html" data-transition="pop" >Generate From Job ID</a></li>
		<li data-filtertext="pm"><a href="../total/monthlyReportDialog.html" data-transition="pop" data-ajax="false">Generate From Report</a></li>
			</ul>
</li>

</div>
<!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="true" class="jqm-footer">
	  <p>melnet 1.0.1</p>
	  <p></p>
	  <p>Copyright &COPY; mandilas ent. ltd. Bonny Island Rivers state.<br/>Designed by <a href='www.solightec.com'>Solight E &AMP; C Ltd. </a><br/>Phone: 08030520715,07082867101,<br/>Email: hanksjerry_dedon@yahoo.com, jerryhanksokafor@gmail.com</p>
	<?php echo '<script'; ?>
 src="../_assets/js/index.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/jquery.mobile-1.4.2.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/datepicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/jquery.mobile.datepicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/total.js" ><?php echo '</script'; ?>
>
	
	</div><!-- /footer -->
	
	<!-- TODO: This should become an external panel so we can add input to markup (unique ID) -->
    <div data-role="panel" class="jqm-search-panel" data-position="right" data-display="overlay" data-theme="a">
		<div class="jqm-search">
			<ul class="jqm-list" data-filter-placeholder="Search demos..." data-filter-reveal="true">
<li data-filtertext="demos homepage" data-icon="home"><a href="../total/./">Home</a></li>
<li data-filtertext="introduction overview getting started"><a href="../total/intro/" data-ajax="false">Introduction</a></li>
<li data-filtertext="buttons button markup buttonmarkup method anchor link button element"><a href="../total/button-markup/" data-ajax="false">Buttons</a></li>
<li data-filtertext="form button widget input button submit reset"><a href="../total/button/" data-ajax="false">Button widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Checkboxradio widget</h3>
	<ul>
		<li data-filtertext="pm"><a href="../total/checkboxradio-checkbox/" data-ajax="false">Checkboxes</a></li>
		<li data-filtertext="pm"><a href="../total/checkboxradio-radio/" data-ajax="false">Radio buttons</a></li>
	</ul>
</li>

<li data-filtertext="page transitions animated pages popup navigation flip slide fade pop"><a href="../total/transitions/" data-ajax="false">Transitions</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>3rd party API demos</h3>
	<ul>
		<li data-filtertext="backbone requirejs navigation router"><a href="../total/backbone-requirejs/" data-ajax="false">Backbone RequireJS</a></li>
		<li data-filtertext="google maps geolocation demo"><a href="../total/map-geolocation/" data-ajax="false">Google Maps geolocation</a></li>
		<li data-filtertext="google maps hybrid"><a href="../total/map-list-toggle/" data-ajax="false">Google Maps list toggle</a></li>
	</ul>
</li>



			</ul>
		</div>
    </div>
	
	
	
</div><!-- /page -->

</body>
</html>
<?php }} ?>
