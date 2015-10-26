<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-29 02:53:17
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\genrateJob.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17065551924986b01d5-44191141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3db39186b8786efce67083e49d19cde2bc21c229' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\genrateJob.tpl',
      1 => 1440809210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17065551924986b01d5-44191141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551924987e8a25_11952735',
  'variables' => 
  array (
    'jobid' => 0,
    'dategenerated' => 0,
    'locationOptions' => 0,
    'reportCodeOptions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551924987e8a25_11952735')) {function content_551924987e8a25_11952735($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="">
        		<div class="jqm-fullwidth jqm-content">
		<form action="../ubnk/index.php" method="POST"  data-ajax="false" data-url="../ubnk/index.php">
  <fieldset><legend><h3>Genrate New Job:</h3></legend>
  <label for="regno">Job ID:</label>
  <input data-clear-btn="true" name="jobid" disabled placeholder="99999999" value="<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
" data-mini="true" type="text" required>
   <input data-clear-btn="true" name="jobid" placeholder="99999999" value="<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
" data-mini="true" type="hidden" required>
    
  <label for="Last Name">Date Generated:</label>
   <input  name="dategenerated"   value="<?php echo $_smarty_tpl->tpl_vars['dategenerated']->value;?>
" type="hidden">   
   <input data-clear-btn="true" value="<?php echo $_smarty_tpl->tpl_vars['dategenerated']->value;?>
" type="text" disabled> 
  <label for="select-native-2" >Location:</label>
       <select name="location" id="select-native-2" data-native-menu="false" data-icon="grid" data-iconpos="left">
	 <option>Location:</option>
	   <?php echo $_smarty_tpl->tpl_vars['locationOptions']->value;?>

      </select>
  <label for="textinput-1">Report Code:</label>
    <select name="reportCode" id="select-native-3" data-native-menu="false" data-icon="grid" data-iconpos="left">
      <option>Report Code:</option>
	   <?php echo $_smarty_tpl->tpl_vars['reportCodeOptions']->value;?>

      </select>
  <label for="select-native-4">Maintenance Type:</label>
  <input data-clear-btn="true" name="maintype" value="CM" disabled="true" data-mini="true" type="text" required>
  <input data-clear-btn="true" name="maintype" value="CM" data-mini="true" type="hidden" required>
 
     </fieldset>

    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="generateNewJob" type="submit" id="">Submit</button>
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
