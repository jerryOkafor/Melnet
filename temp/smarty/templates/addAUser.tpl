
<div class="ui-grid-a ui-responsive jqm-block-content">
   <div class="ui-responsive ui-block-a">   
     
     <div class="jqm-content ui-responsive">
<form action="../admin/index.php" method="POST"  data-ajax="false" data-url="../admin/index.php">
 <fieldset><legend><h3>New User Form:</h3></legend>
  <p class="center error">{$feedback}</p>
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
       	

        </div>