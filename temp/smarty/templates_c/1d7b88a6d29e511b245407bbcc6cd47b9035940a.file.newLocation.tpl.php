<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 20:08:13
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\newLocation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295815526c82a068628-92351998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d7b88a6d29e511b245407bbcc6cd47b9035940a' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\newLocation.tpl',
      1 => 1428775681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295815526c82a068628-92351998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5526c82a16a359_74108043',
  'variables' => 
  array (
    'feedback' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526c82a16a359_74108043')) {function content_5526c82a16a359_74108043($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-responsive ui-block-a">
        		<div class="jqm-content ui-responsive">
		<form action="../ubnk/dynamic.php" method="POST"  data-ajax="false" data-url="../ubnk/dynamic.php">
		  <fieldset><legend><h3>New Location Dialog:</h3></legend>
		    
		    <p class="center error"><a href="../ubnk/index.php" data-ajax="false"><?php echo $_smarty_tpl->tpl_vars['feedback']->value;?>
</a></p>
  <label for="textinput-2">Branch Name:</label>
  <input data-clear-btn="true" name="branchname" id="" placeholder="Middle Name" value="" data-mini="true" type="text" required>
  <label for="Last Name">Split Units:</label>
  <input data-clear-btn="true" name="splitunit" id="" placeholder="10" value="" data-mini="true" type="number" required>
  <label for="textinput-1">Package Units:</label>
  <input data-clear-btn="true" name="packageunit" id="" placeholder="10" value="" data-mini="true" type="number" required>
  <label for="select-native-2">Region:</label>
      <select name="region" id="select-native-2">	
	  <option value="">NILL</option>
	  <option value="south South">South South</option>
	  <option value="East">East</option>
	  <option value="South East">South East</option>
	  <option value="North">North</option>
	  <option value="South West">South West</option>
	  <option value="Lagos">Lagos</option>
      </select> 
  
     </fieldset>

    <br/>
    <input class="ui-shadow ui-btn ui-corner-all" name="newlocation" type="submit" value="Submit" />
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
