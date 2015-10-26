<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-25 12:45:59
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\addAUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2676855dc38230e2939-41972709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a6b45013dfe3d4cfd10beab744f7f5f5fc1034e' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\addAUser.tpl',
      1 => 1440499555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2676855dc38230e2939-41972709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55dc3823148249_47188682',
  'variables' => 
  array (
    'feedback' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc3823148249_47188682')) {function content_55dc3823148249_47188682($_smarty_tpl) {?>
<div class="ui-grid-a ui-responsive jqm-block-content">
   <div class="ui-responsive ui-block-a">   
     
     <div class="jqm-content ui-responsive">
<form action="../admin/index.php" method="POST"  data-ajax="false" data-url="../admin/index.php">
 <fieldset><legend><h3>New User Form:</h3></legend>
  <p class="center error"><?php echo $_smarty_tpl->tpl_vars['feedback']->value;?>
</p>
  <label for="textinput-2">UserName:</label>
  <input data-clear-btn="true" name="userName" id="" placeholder="JohnOkonkwo" value="" data-mini="true" type="text" required>
  <label for="Last Name">Password:</label>
  <input data-clear-btn="true" name="password" id="" placeholder="don@1345" value="" data-mini="true" type="text" required>
  <label for="Last Name">Email:</label>
  <input data-clear-btn="true" name="email" id="" placeholder="hanksjerry_dedon@yahoo.com" value="" data-mini="true" type="text" required>
  
  <label for="textinput-1">Privelege:</label>
  <select name="loginType" id="select-native-2">
	  <option value="">Choose</option>
	  <option value="2">Administrator</option>
	  <option value="1">User 1</option>
	  <option value="0">User 2</option>
      </select>
  
     </fieldset>

    <br/>
    <input class="ui-shadow ui-btn ui-corner-all" name="addUserAction" type="submit" value="Add User" />
    </form>

        		</div>
        	</div>
       	

        </div><?php }} ?>
