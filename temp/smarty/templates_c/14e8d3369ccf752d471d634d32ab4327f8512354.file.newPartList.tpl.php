<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-26 07:11:00
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\newPartList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262565526caa8548779-39215984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14e8d3369ccf752d471d634d32ab4327f8512354' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\newPartList.tpl',
      1 => 1440495405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262565526caa8548779-39215984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5526caa85d9027_37293009',
  'variables' => 
  array (
    'feedback' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526caa85d9027_37293009')) {function content_5526caa85d9027_37293009($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-responsive ui-block-a">
        		<div class="jqm-content ui-responsive">
		<form action="../ubnk/dynamic.php" method="POST"  data-ajax="false" data-url="../ubnk/dynamic.php">
		  <fieldset><legend><h3>New Material|Part:</h3></legend>
		    <p class="center error"><a href="../ubnk/index.php" data-ajax="false"><?php echo $_smarty_tpl->tpl_vars['feedback']->value;?>
</a></p>
  <label for="textinput-2">Description:</label>
  <input data-clear-btn="true" name="description" id="" placeholder="Description" value="" data-mini="true" type="text" required>
  <label for="Last Name">Part Number:</label>
  <input data-clear-btn="true" name="partnumber" id="" placeholder="Part Number" value="" data-mini="true" type="text" required>
  <label for="textinput-1">Price:</label>
  <input data-clear-btn="true" name="price" id="" placeholder="Price" value="" data-mini="true" type="number" required>
  
  
     </fieldset>

    <br/>
    <input class="ui-shadow ui-btn ui-corner-all" name="newpartlist" type="submit" value="Submit" />
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
