<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 09:11:57
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\logedin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22489550fee74a03e67-68572230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4d3154d5caf822fce2331b946334d99f2584194' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\logedin.tpl',
      1 => 1427530314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22489550fee74a03e67-68572230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550fee74a40d64_58320486',
  'variables' => 
  array (
    'slider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550fee74a40d64_58320486')) {function content_550fee74a40d64_58320486($_smarty_tpl) {?>		<!--Slider for home page--->
		<h2 id="title">Welcome to MELNET:..::User!</h2>
      
	
	  <?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

	
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
			  <h3>Clients</h3>
        			<p><a href="html/nlngDialog.html" >NLNG</a></p>
        			<p><a href="html/totalDialog.html" >Total</a></p>
        			<p><a href="html/ubnkDialog.html" >Union Bank</a></p>
        			<p><a href="html/chevDialog.html" >Chevron</a></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>Specialities</h3>
        			<p><a href="html/hvacDialog.html"  data-transition="pop">HVAC</a></p>
        			<p><a href="html/chillerDialog.html" data-transition="pop">Chillers</a></p>
        			<p><a href="html/packageUnitDialog.html" data-transition="pop">Package Units</a></p>
        			<p><a href="html/splitUnitDialog.html" data-transition="pop">Split Unit</a></p>
        			<p><a href="html/extractorDialog.html" data-transition="pop">Extrators</a></p>
        		</div>
        	</div>        	

        </div><?php }} ?>
