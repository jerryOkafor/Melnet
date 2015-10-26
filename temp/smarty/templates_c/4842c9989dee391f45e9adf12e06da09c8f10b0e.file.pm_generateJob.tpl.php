<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-04 17:41:49
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\pm_generateJob.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3056255e199bc5132c3-87006635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4842c9989dee391f45e9adf12e06da09c8f10b0e' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\pm_generateJob.tpl',
      1 => 1441381034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3056255e199bc5132c3-87006635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e199bc5da674_06876945',
  'variables' => 
  array (
    'ubnk_locations' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e199bc5da674_06876945')) {function content_55e199bc5da674_06876945($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-block-a">
        		<div class="jqm-content">
		<form action="../pages/index.php" method="POST"  data-ajax="false" data-url="../nlng/index.php">
  <fieldset><legend><h3>New PM Job:</h3></legend>
  <label for="regno">Job ID:</label>
  <input data-clear-btn="true" name="jobid" id="" placeholder="MAN-0051" value="" data-mini="true" type="text">
  <label for="textinput-2">Location:</label>
  <select name="location" id="select-native-2" data-native-menu="false" data-icon="grid" data-iconpos="left" size="10">
	 <option>Location:</option>
	<?php echo $_smarty_tpl->tpl_vars['ubnk_locations']->value;?>

      </select>
  <label for="Last Name">Date Of Job Done:</label>
  <input data-clear-btn="true"  class="date" name="datedone" id="" placeholder="DD/MM/YY" value="" data-mini="true" type="text">
  <label for="textinput-1">Houses Serviced:</label>
  <input data-clear-btn="true"  class="date" name="housesServiced" id="" placeholder="Houses" value="" data-mini="true" type="text">
   <label for="textinput-1">Date Of Next Maintenance:</label>
  <input data-clear-btn="true" name="superv" id="" placeholder="DD/MM/YY" value="" data-mini="true" type="text">
  </fieldset>
    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="newCmJob" type="submit" id="">Submit</button>
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
