
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-responsive ui-block-a">
        		<div class="jqm-content ui-responsive">
		<form action="../nlng/index.php" method="POST"  data-ajax="false" data-url="../nlng/index.php">
		  <fieldset><legend><h3>New&amp;Update Corrective Maintenance:</h3></legend>
  <label for="regno">Job ID:</label>
  <input data-clear-btn="true" name="jobid" pattern="[0-9/0-9]" id="" placeholder="Text input" value="" data-mini="true" type="text">
  <label for="textinput-2">Job Description:</label>
  <input data-clear-btn="true" name="jobdesc" id="" placeholder="Middle Name" value="" data-mini="true" type="text">
  <label for="Last Name">Planner:</label>
  <input data-clear-btn="true" name="planner" id="" placeholder="Last Name" value="" data-mini="true" type="text">
  <label for="textinput-1">Technician:</label>
  <input data-clear-btn="true" name="tech" id="" placeholder="First Name" value="" data-mini="true" type="text">
   <label for="textinput-1">Supervisor:</label>
  <input data-clear-btn="true" name="superv" id="" placeholder="First Name" value="" data-mini="true" type="text">
  <label for="regno">Date Started:</label>
  <input data-role="date" type="date" data-clear-bt="true" name="datestarted">
  <label for="regno">Time Started:</label>
  <input data-role="date" type="text" name="timestarted">
  <label for="select-native-2">Maintenance Type:</label>
      <select name="maintype" id="select-native-2">
	  <option value="small">Corrective Maintenance</option>
	  <option value="medium">Preventive Manitenace</option>
      </select>
  <label for="select-native-2">Report Code:</label>
      <select name="reportcode" id="select-native-2">
	{$reportCodeOptions}
      </select>
  <label for="select-native-2">Fault Code:</label>
      <select  id="select-native-2" name="faultcode">
	{$faultCodeOptions}
      </select>
  <label for="select-native-2">Repair Code:</label>
      <select name="select-native-2" id="select-native-2" name="repaircode">
	{$repairCodeOptions}
      </select>
  <label for="select-native-2">Root Cause Code:</label>
      <select  id="select-native-2" name="rootcausecode">
	{$rootCauseCodeOptions}
      </select>
  <label for="regno">Date Ended:</label>
  <input data-role="date" type="date" data-clear-bt="true" name="dateended">
  <label for="regno">Time Ended:</label>
  <input data-role="date" type="text" name="timeended">
  
     </fieldset>

    <br/>
    <button class="ui-shadow ui-btn ui-corner-all" name="newUpdateCmJob" type="submit" id="">Submit</button>
    </form>

        		</div>
        	</div>
       	

        </div>