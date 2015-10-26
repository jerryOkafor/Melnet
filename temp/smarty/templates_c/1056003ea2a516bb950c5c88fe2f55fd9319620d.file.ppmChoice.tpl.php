<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-25 10:06:34
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\ppmChoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1122555126894ad7f41-54915144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1056003ea2a516bb950c5c88fe2f55fd9319620d' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\ppmChoice.tpl',
      1 => 1427274389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1122555126894ad7f41-54915144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55126894bcbb42_72539528',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55126894bcbb42_72539528')) {function content_55126894bcbb42_72539528($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-block-a">
        		<div class="jqm-content">
		<form action="../nlng/index.php" method="POST"  data-ajax="false" data-url="../nlng/index.php">
  <fieldset><legend><h3>PPM Choice:</h3></legend>
 <label for="regno">From:</label>
  <input data-role="date" type="date" data-clear-bt="true" name="from_date">
  <label for="regno">To:</label>
  <input data-role="date" type="text" name="to_date">
  <label for="select-native-2">View Choice:</label>
      <select name="all" id="select-native-2">
	<option value="1">View All PPM Report</option>
        <option value="0">View The Specified Month</option>
      </select>  
     </fieldset>
    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="ppmChoice" type="submit" id="">Submit</button>
    </form>
</div>	</div>
       	

        </div><?php }} ?>
