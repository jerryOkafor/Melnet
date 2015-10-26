		<!--Slider for home page--->
		<h2 id="title">Welcome to Mandinet!</h2>
		<div class="boldtext">Please Login below.
		  </div>
	{$slider}
	
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
	</div>