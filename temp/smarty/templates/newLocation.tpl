
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-responsive ui-block-a">
        		<div class="jqm-content ui-responsive">
		<form action="../ubnk/dynamic.php" method="POST"  data-ajax="false" data-url="../ubnk/dynamic.php">
		  <fieldset><legend><h3>New Location Dialog:</h3></legend>
		    
		    <p class="center error"><a href="../ubnk/index.php" data-ajax="false">{$feedback}</a></p>
  <label for="textinput-2">Branch Name:</label>
  <input data-clear-btn="true" name="branchname" id="" placeholder="Middle Name" value="" data-mini="true" type="text" required>
  <label for="Last Name">Split Units:</label>
  <input data-clear-btn="true" name="splitunit" id="" placeholder="10" value="" data-mini="true" type="number" required>
  <label for="textinput-1">Package Units:</label>
  <input data-clear-btn="true" name="packageunit" id="" placeholder="10" value="" data-mini="true" type="number" required>
  <label for="select-native-2">Region:</label>
      <select name="region" id="select-native-2">	
	  <option value="">NILL</option>
	  <option value="south South">South South</option>
	  <option value="East">East</option>
	  <option value="South East">South East</option>
	  <option value="North">North</option>
	  <option value="South West">South West</option>
	  <option value="Lagos">Lagos</option>
      </select> 
  
     </fieldset>

    <br/>
    <input class="ui-shadow ui-btn ui-corner-all" name="newlocation" type="submit" value="Submit" />
    </form>

        		</div>
        	</div>
       	

        </div>