<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-26 18:51:10
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\cmChoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221255129675b38ae4-53209734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92be3daaa9eb02f6d5901c21e3bfdfea3825a4e0' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\cmChoice.tpl',
      1 => 1427281650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221255129675b38ae4-53209734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55129675bb28e6_66485219',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55129675bb28e6_66485219')) {function content_55129675bb28e6_66485219($_smarty_tpl) {?>
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-block-a">
        		<div class="jqm-content">
		<form action="../nlng/index.php" method="POST"  data-ajax="false" data-url="../nlng/index.php">
  <fieldset><legend><h3>View Type:</h3></legend>
        <select name="maintype" id="select-native-2">
	  <option value="all">View All CM Report</option>
	  <option value="monthly">Monthly View</option>
	  <option value="weekly">Weekly View</option>
	   <option value="location">Location View</option>
      </select>
       
     </fieldset>

    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="newCmJob" type="submit" id="">Submit</button>
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
