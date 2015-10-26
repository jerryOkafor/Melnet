<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-23 11:24:23
         compiled from "C:\wamp\www\mandinet.com\temp\smarty\templates\logedout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7586550d3c1b9e3459-89782403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb0f247498c4b3fe06eea97ded26f356494e1525' => 
    array (
      0 => 'C:\\wamp\\www\\mandinet.com\\temp\\smarty\\templates\\logedout.tpl',
      1 => 1427100025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7586550d3c1b9e3459-89782403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550d3c1ba20354_23595749',
  'variables' => 
  array (
    'slider' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d3c1ba20354_23595749')) {function content_550d3c1ba20354_23595749($_smarty_tpl) {?>		<!--Slider for home page--->
		<h2 id="title">Welcome to Mandinet!</h2>
		<div class="boldtext">Please Login below.
		  </div>
	<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

	
	<div class="jqm-block-content" >
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
