<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-23 09:03:07
         compiled from "C:\wamp\www\mandinet.com\temp\smarty\templates\logedin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31671550d61e6701039-44765414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e1dc2367f086b13709690831c11f114ce2e878e' => 
    array (
      0 => 'C:\\wamp\\www\\mandinet.com\\temp\\smarty\\templates\\logedin.tpl',
      1 => 1427097785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31671550d61e6701039-44765414',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550d61e67b7d31_94113113',
  'variables' => 
  array (
    'slider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d61e67b7d31_94113113')) {function content_550d61e67b7d31_94113113($_smarty_tpl) {?>		<!--Slider for home page--->
		<h2 id="title">Welcome to Mandinet: Okafor Jerry Hanks</h2>
      
	
	  <?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

	
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
			  <h3>Clients</h3>

        			<p><a href="pages/" data-ajax="false">NLNG</a></p>
        			<p><a href="navigation/" data-ajax="false">Total</a></p>
        			<p><a href="loader/" data-ajax="false">Union Bank</a></p>
        			<p><a href="transitions/" data-ajax="false">Transitions</a></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>Current Issues</h3>

        			<p><a href="theme-default/" data-ajax="false">Theming</a></p>
        			<p><a href="button-markup/" data-ajax="false">Buttons</a></p>
        			<p><a href="icons/" data-ajax="false">Icons</a></p>
        			<p><a href="grids/" data-ajax="false">Grids</a></p>
        			<p><a href="../body-bar-classes/" data-ajax="false">Body and bar classes</a></p>
        		</div>
        	</div>        	

        </div><?php }} ?>
