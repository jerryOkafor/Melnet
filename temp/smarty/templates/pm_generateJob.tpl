
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-block-a">
        		<div class="jqm-content">
		<form action="../pages/index.php" method="POST"  data-ajax="false" data-url="../nlng/index.php">
  <fieldset><legend><h3>New PM Job:</h3></legend>
  <label for="regno">Job ID:</label>
  <input data-clear-btn="true" name="jobid" id="" placeholder="MAN-0051" value="" data-mini="true" type="text">
  <label for="textinput-2">Location:</label>
  <select name="location" id="select-native-2" data-native-menu="false" data-icon="grid" data-iconpos="left" size="10">
	 <option>Location:</option>
	{$ubnk_locations}
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
       	

        </div>