<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-04 23:19:23
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\locationReportDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2439155200f46353322-41668917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ee9c349cd629593909c8b888ce0dfd727fd4d42' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\locationReportDialog.tpl',
      1 => 1428182348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2439155200f46353322-41668917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55200f464223d6_64945330',
  'variables' => 
  array (
    'locationOptions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55200f464223d6_64945330')) {function content_55200f464223d6_64945330($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="">
        		<div class="jqm-fullwidth jqm-content">
		<form action="../ubnk/index.php" method="GET"  data-ajax="false" data-url="../ubnk/index.php">
  <fieldset><legend><h3>Choose Location Below:</h3></legend>

  <label for="textinput-1">Location:</label>
       <select name="location" id="select-native-2" >
	   <?php echo $_smarty_tpl->tpl_vars['locationOptions']->value;?>

      </select>
 
     </fieldset>

    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="locationReportView" value="locationReportView" type="submit" id="">View</button>
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
