<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-30 11:29:38
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\newJob.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214145512dc9ce2f848-16188857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ab971e70297039d7c84ddddb227294301aae3b3' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\newJob.tpl',
      1 => 1427707772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214145512dc9ce2f848-16188857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5512dc9cee6549_68191309',
  'variables' => 
  array (
    'jobid' => 0,
    'locationOptions' => 0,
    'materialOptions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5512dc9cee6549_68191309')) {function content_5512dc9cee6549_68191309($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="">
        		<div class="jqm-fullwidth jqm-content">
		<form action="../ubnk/index.php" method="POST"  data-ajax="false" data-url="../ubnk/index.php">
  <fieldset><legend><h3>New Job:</h3></legend>
  <label for="regno">Job ID:</label>
  <input data-clear-btn="true" name="jobid" disabled placeholder="99999999" value="<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
" data-mini="true" type="text" required>
   <input data-clear-btn="true" name="jobid" placeholder="99999999" value="<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
" data-mini="true" type="hidden" required>
    
  <label for="Last Name">Date Done:</label>
   <input data-role="date" name="datedone" type="text" required>
  <label for="textinput-1">Location:</label>
       <select name="location" id="select-native-2" >
	   <?php echo $_smarty_tpl->tpl_vars['locationOptions']->value;?>

      </select>
  <label for="select-native-2">Maintenance Type:</label>
      <select name="maintype" id="select-native-2">
	  <option value="CM">Corrective Maintenance</option>
	  <option value="PM">Preventive Manitenace</option>
      </select>
  <label for="select-native-2">Unit Type:</label>
      <select name="unittype" id="select-native-2">
	  <option value="split">Split Unit</option>
	  <option value="package">Package</option>
      </select>
  <label for="textinput-1">Unit ID:</label>
  <input data-clear-btn="true" name="unitid"  placeholder="Unit 1" value="" data-mini="true" type="text" required>
   <label for="textinput-1">Hours:</label>
  <input data-clear-btn="true" name="hours" id="" placeholder="HH" value="" data-mini="true" type="text" required>
   <label for="textinput-1">Material Used:</label>
       <select name="material" id="select-native-2">
	  <option value="none">None</option>
	   <?php echo $_smarty_tpl->tpl_vars['materialOptions']->value;?>

      </select> 
      <label for="select-native-2">Job Status:</label>
      <select name="status" id="select-native-2">
	  <option value="closed">Closed</option>
	  <option value="open">Open</option>
      </select>
 
     </fieldset>

    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="newJob" type="submit" id="">Submit</button>
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
