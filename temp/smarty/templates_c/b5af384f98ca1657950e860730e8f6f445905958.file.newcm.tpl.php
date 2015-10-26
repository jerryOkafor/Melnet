<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 15:48:35
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\newcm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6315551072b55fbe37-08716059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5af384f98ca1657950e860730e8f6f445905958' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\newcm.tpl',
      1 => 1427208495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6315551072b55fbe37-08716059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551072b5675c32_06657721',
  'variables' => 
  array (
    'reportCodeOptions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551072b5675c32_06657721')) {function content_551072b5675c32_06657721($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-block-a">
        		<div class="jqm-content">
		<form action="../nlng/index.php" method="POST"  data-ajax="false" data-url="../nlng/index.php">
  <fieldset><legend><h3>New Corrective Maintenance:</h3></legend>
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
  <input data-role="date" type="text" nname="timestarted">
  <label for="select-native-2">Maintenance Type:</label>
      <select name="maintype" id="select-native-2">
	  <option value="small">Corrective Maintenance</option>
	  <option value="medium">Preventive Manitenace</option>
      </select>
  <label for="select-native-2">Report Code:</label>
      <select name="reportcode" id="select-native-2" >
	<?php echo $_smarty_tpl->tpl_vars['reportCodeOptions']->value;?>

      </select>
  
     </fieldset>

    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="newCmJob" type="submit" id="">Submit</button>
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
