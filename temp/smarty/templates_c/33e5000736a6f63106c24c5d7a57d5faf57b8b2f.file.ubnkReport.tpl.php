<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-09 08:26:57
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\ubnkReport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200865515312b1e0342-38640960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33e5000736a6f63106c24c5d7a57d5faf57b8b2f' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\ubnkReport.tpl',
      1 => 1441779727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200865515312b1e0342-38640960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5515312b324715_52719013',
  'variables' => 
  array (
    'title' => 0,
    'reportTitle' => 0,
    'date' => 0,
    'report' => 0,
    'locations' => 0,
    'materials' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5515312b324715_52719013')) {function content_5515312b324715_52719013($_smarty_tpl) {?>
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
      <div role="main" class="ui-content jqm-block-content ui-responsive" id="nlngmainContent">
	<h3 class="center ui-mini ui-responsive">Union Bank <?php echo $_smarty_tpl->tpl_vars['reportTitle']->value;?>
!: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h3>	
	<div class="ui-responsive jqm-block-content ui-shadow" >
	  <p class="feedbackdiv center error  ui-corner-all ui-shadow ui-mini" style="width: auto" ></p>

		<?php echo $_smarty_tpl->tpl_vars['report']->value;?>

		
		</div>
	<p class="center hide"><a href="../ubnk/index.php" data-ajax="false">Go Back To Home Page</a></p>	
      </div><!-- /content -->
	



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
 src="../js/ubnk.js" ><?php echo '</script'; ?>
>
	
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
	      <?php echo $_smarty_tpl->tpl_vars['locations']->value;?>

	    </select>
	    
	    <!--materials-->
	    <label for="materials">Material:</label>
            <select type="text" name="material" id="customer" data-theme="a">
	   <?php echo $_smarty_tpl->tpl_vars['materials']->value;?>

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
	   <?php echo $_smarty_tpl->tpl_vars['materials']->value;?>

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

<?php }} ?>
