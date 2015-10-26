<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 21:58:57
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\newPmJob.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230145511808f705744-37695991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65f53fcf9eb294aadcdc7215a9d8166598e59c1d' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\newPmJob.tpl',
      1 => 1427230734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230145511808f705744-37695991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5511808f873141_28105633',
  'variables' => 
  array (
    'locations_nlng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511808f873141_28105633')) {function content_5511808f873141_28105633($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-block-a">
        		<div class="jqm-content">
		<form action="../nlng/index.php" method="POST"  data-ajax="false" data-url="../nlng/index.php">
  <fieldset><legend><h3>New Corrective Maintenance:</h3></legend>
  <label for="regno">Job ID:</label>
  <input data-clear-btn="true" name="jobid" id="" placeholder="MAN-0051" value="" data-mini="true" type="text">
  <label for="textinput-2">Location:</label>
  <select name="reportcode" id="select-native-2" >
	<?php echo $_smarty_tpl->tpl_vars['locations_nlng']->value;?>

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
