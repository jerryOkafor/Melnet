<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 15:51:57
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\newCmUpdateJob.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185715511394fde7422-38674528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a89c802bd745d9bc12b69060c53fa4750f1d400' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\newCmUpdateJob.tpl',
      1 => 1427208714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185715511394fde7422-38674528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5511394ff27970_00046499',
  'variables' => 
  array (
    'reportCodeOptions' => 0,
    'faultCodeOptions' => 0,
    'repairCodeOptions' => 0,
    'rootCauseCodeOptions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511394ff27970_00046499')) {function content_5511394ff27970_00046499($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-responsive ui-block-a">
        		<div class="jqm-content ui-responsive">
		<form action="../nlng/index.php" method="POST"  data-ajax="false" data-url="../nlng/index.php">
		  <fieldset><legend><h3>New&amp;Update Corrective Maintenance:</h3></legend>
  <label for="regno">Job ID:</label>
  <input data-clear-btn="true" name="jobid" pattern="[0-9/0-9]" id="" placeholder="Text input" value="" data-mini="true" type="text">
  <label for="textinput-2">Job Description:</label>
  <input data-clear-btn="true" name="jobdesc" id="" placeholder="Middle Name" value="" data-mini="true" type="text">
  <label for="Last Name">Planner:</label>
  <input data-clear-btn="true" name="planner" id="" placeholder="Last Name" value="" data-mini="true" type="text">
  <label for="textinput-1">Technician:</label>
  <input data-clear-btn="true" name="tech" id="" placeholder="First Name" value="" data-mini="true" type="text">
   <label for="textinput-1">Supervisor:</label>
  <input data-clear-btn="true" name="superv" id="" placeholder="First Name" value="" data-mini="true" type="text">
  <label for="regno">Date Started:</label>
  <input data-role="date" type="date" data-clear-bt="true" name="datestarted">
  <label for="regno">Time Started:</label>
  <input data-role="date" type="text" name="timestarted">
  <label for="select-native-2">Maintenance Type:</label>
      <select name="maintype" id="select-native-2">
	  <option value="small">Corrective Maintenance</option>
	  <option value="medium">Preventive Manitenace</option>
      </select>
  <label for="select-native-2">Report Code:</label>
      <select name="reportcode" id="select-native-2">
	<?php echo $_smarty_tpl->tpl_vars['reportCodeOptions']->value;?>

      </select>
  <label for="select-native-2">Fault Code:</label>
      <select  id="select-native-2" name="faultcode">
	<?php echo $_smarty_tpl->tpl_vars['faultCodeOptions']->value;?>

      </select>
  <label for="select-native-2">Repair Code:</label>
      <select name="select-native-2" id="select-native-2" name="repaircode">
	<?php echo $_smarty_tpl->tpl_vars['repairCodeOptions']->value;?>

      </select>
  <label for="select-native-2">Root Cause Code:</label>
      <select  id="select-native-2" name="rootcausecode">
	<?php echo $_smarty_tpl->tpl_vars['rootCauseCodeOptions']->value;?>

      </select>
  <label for="regno">Date Ended:</label>
  <input data-role="date" type="date" data-clear-bt="true" name="dateended">
  <label for="regno">Time Ended:</label>
  <input data-role="date" type="text" name="timeended">
  
     </fieldset>

    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="newUpdateCmJob" type="submit" id="">Submit</button>
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
