
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="">
        		<div class="jqm-fullwidth jqm-content">
		<form action="../ubnk/index.php" method="POST"  data-ajax="false" data-url="../ubnk/index.php">
  <fieldset><legend><h3>Genrate New Job:</h3></legend>
  <label for="regno">Job ID:</label>
  <input data-clear-btn="true" name="jobid" disabled placeholder="99999999" value="{$jobid}" data-mini="true" type="text" required>
   <input data-clear-btn="true" name="jobid" placeholder="99999999" value="{$jobid}" data-mini="true" type="hidden" required>
    
  <label for="Last Name">Date Generated:</label>
   <input  name="dategenerated"   value="{$dategenerated}" type="hidden">   
   <input data-clear-btn="true" value="{$dategenerated}" type="text" disabled> 
  <label for="select-native-2" >Location:</label>
       <select name="location" id="select-native-2" data-native-menu="false" data-icon="grid" data-iconpos="left">
	 <option>Location:</option>
	   {$locationOptions}
      </select>
  <label for="textinput-1">Report Code:</label>
    <select name="reportCode" id="select-native-3" data-native-menu="false" data-icon="grid" data-iconpos="left">
      <option>Report Code:</option>
	   {$reportCodeOptions}
      </select>
  <label for="select-native-4">Maintenance Type:</label>
  <input data-clear-btn="true" name="maintype" value="CM" disabled="true" data-mini="true" type="text" required>
  <input data-clear-btn="true" name="maintype" value="CM" data-mini="true" type="hidden" required>
 
     </fieldset>

    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="cm_generateNewJob" type="submit" id="">Submit</button>
    </form>

        		</div>
        	</div>
       	

        </div>