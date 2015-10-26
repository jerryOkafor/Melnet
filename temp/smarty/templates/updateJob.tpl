
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="">
        		<div class="jqm-fullwidth jqm-content">
		<form action="../ubnk/index.php" method="POST"  data-ajax="false" data-url="../ubnk/index.php">
  <fieldset><legend><h3>Update Job Page:</h3></legend>
  <label for="regno">Job ID:</label>
  <input data-clear-btn="true" name="jobid" disabled placeholder="99999999" value="{$jobid}" data-mini="true" type="text" required>
   <input data-clear-btn="true" name="jobid" placeholder="99999999" value="{$jobid}" data-mini="true" type="hidden" required>
    
  <label for="Last Name">Date Genrated:</label>
  <input data-role="date" name="dategenerated" value="{$dategenerated}"  disabled type="text" required>
   <input data-role="date" name="dategenerated" type="hidden" required>
  <label for="textinput-2">Location:</label>      
      <input data-role="date" name="location" disabled value="{$location}" type="text" required>      
      <input data-role="date" name="location"  value="{$location}" type="hidden" required>
      
  <label for="textinput-2">Report Code:</label>       
      <input data-role="date" name="reportcode" disabled  value="{$reportcode}" type="text" required>      
      <input data-role="date" name="reportcode"  value="{$reportcode}" type="hidden" required>
           
    <label for="select-native-2">Maintenance Type:</label>      
      <input data-role="date" name="maintype"  disabled value="{$maintype}" type="text" required>      
      <input data-role="date" name="maintype"  value="{$maintype}" type="hidden" required>
  <label for="Last Name">Date Done:</label>
       <input data-role="date" name="datedone" type="text" required> 
  <label for="select-native-2">Unit Type:</label>
      <select name="unittype" id="select-native-2">
	  <option value="split">Split Unit</option>
	  <option value="package">Package</option>
      </select>  
  <label for="textinput-1">Unit ID:</label>
  <input data-clear-btn="true" name="unitid"  placeholder="This Options will be changed to select and the options will depend on branch" value="" data-mini="true" type="text" required>
   <label for="textinput-1">Hours:</label>
  <input data-clear-btn="true" name="hours" value="2" disabled="true" data-mini="true" type="text" required>
  <input data-clear-btn="true" name="hours" value="2" data-mini="true" type="hidden" required>
 
  <label for="select-choice-8">Fault Code:</label>
  <select name="faultcode" id="select-choice-8" data-native-menu="false" data-icon="grid" data-iconpos="left" size="10" > 
	   {$faultCodeOptions}
      </select> 
  <label for="select-choice-9">Repair Code:</label>
       <select name="repaircode" id="select-choice-9" data-native-menu="false" data-icon="grid" data-iconpos="left" size="10" >
	   {$repairCodeOptions}
      </select> 
  <label for="select-choice-10">Rooot Cause Code:</label>
       <select name="rootcausecode" id="select-choice-10" data-native-menu="false" data-icon="grid" data-iconpos="left" size="10" >
	   {$rootCauseCodeOptions}
      </select> 
  <label for="select-choice-11">Material Used:</label>
<select name="materials[]" id="select-choice-11" multiple="multiple" data-native-menu="false" data-icon="grid" data-iconpos="left" size="10" >
    <option>Choose an options:</option>    
     {$materialOptions}
<!--    <optgroup label="USPS">
        <option value="standard" selected="">Standard: 7 day</option>
        <option value="rush">Rush: 3 days</option>
        <option value="express">Express: next day</option>
        <option value="overnight">Overnight</option>
    </optgroup>
    <optgroup label="FedEx">
        <option value="firstOvernight">First Overnight</option>
        <option value="expressSaver">Express Saver</option>
        <option value="ground">Ground</option>
    </optgroup>-->
</select>
    
      <label for="select-native-22">Job Status:</label>
      <select name="status" id="select-native-22" data-native-menu="false" data-icon="grid" data-iconpos="left">
	  <option >Choose</option>
	  <option value="closed">Closed</option>
	  <option value="open">Open</option>
      </select>
 
     </fieldset>

    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="updateJob" type="submit" id="">Submit</button>
    </form>

        		</div>
        	</div>
       	

        </div>