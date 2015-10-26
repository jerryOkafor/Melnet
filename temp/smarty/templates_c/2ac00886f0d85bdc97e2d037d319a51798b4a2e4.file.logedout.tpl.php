<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 17:54:14
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\logedout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174355104589477380-22940299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ac00886f0d85bdc97e2d037d319a51798b4a2e4' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\logedout.tpl',
      1 => 1428767652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174355104589477380-22940299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5510458957cf47_14041190',
  'variables' => 
  array (
    'slider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5510458957cf47_14041190')) {function content_5510458957cf47_14041190($_smarty_tpl) {?>		<!--Slider for home page--->
		<h2 id="title">Welcome to Mandinet!</h2>
		<div class="boldtext">Please Login below.
		  </div>
	<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

	
	<div class="jqm-block-content" style="display: inline-block">
	  <div class="jqm-block-content ui-responsive ui-mini ui-mobile" data-mini="true" style="width:200px; float: left; right: 10px; left:20px;"id="filterbox">
   
	  <h3>Login!</h3>
	      <form acton="index.php" method="POST" data-ajax="false" data-url="../mandinet.com/index.php">
		<label for="textinput-2">Username:</label>
		<input name="username" id="textinput-2" placeholder="Username" data-mini="true" class="ui-mini ui-mobile-rendering" type="text" required="true">
		<label for="password">Password:</label>
		<input name="password" id="password"  placeholder="Password"  autocomplete="off" data-mini="true" type="password" required="true">

		<br/>
		<input type="submit" name="submit" id="submit-6" class="ui-shadow ui-btn ui-corner-all ui-mini" value="Login"/>
	       </form>
	  </div>
	  <!--div class="jqm-block-content ui-responsive ui-mini ui-mobile" data-mini="true" style="width:200px; float: left; right: 10px;"id="filterbox">
   
	  <h3>Register!</h3>
	      <form acton="" method="POST" data-ajax="false" data-url="../">
		<label for="textinput-2">Email:</label>
		<input name="username" id="textinput-2" placeholder="Username" data-mini="true" class="ui-mini ui-mobile-rendering" type="text" required="true">
		<label for="password">Password:</label>
		<input name="password" id="password"  placeholder="Password"  autocomplete="off" data-mini="true" type="password" required="true">

		<br/>
		<input type="submit" name="submit" id="submit-6" class="ui-shadow ui-btn ui-corner-all ui-mini" value="Register"/>
	       </form>
	  </div>
	  <div class="jqm-block-content ui-responsive ui-mini ui-mobile" data-mini="true" style="width:200px; float: left; right: 10px;"id="filterbox">
   
	  <h3>Guest User!</h3>
	      <form acton="" method="POST" data-ajax="false" data-url="../">
		<label for="textinput-2">Email:</label>
		<input name="username" id="textinput-2" placeholder="Username" data-mini="true" class="ui-mini ui-mobile-rendering" type="text" required="true">
		<label for="password">Phone:</label>
		<input name="password" id="password"  placeholder="Password"  autocomplete="off" data-mini="true" type="password" required="true">

		<br/>
		<input type="submit" name="submit" id="submit-6" class="ui-shadow ui-btn ui-corner-all ui-mini" value="Access"/>
	       </form>
	  </div-->
	</div><?php }} ?>
