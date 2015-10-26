
	<div class="ui-grid-a ui-responsive jqm-block-content">
        	<div class="ui-responsive ui-block-a">
        		<div class="jqm-content ui-responsive">
		<form action="../ubnk/dynamic.php" method="POST"  data-ajax="false" data-url="../ubnk/dynamic.php">
		  <fieldset><legend><h3>New Material|Part:</h3></legend>
		    <p class="center error"><a href="../ubnk/index.php" data-ajax="false">{$feedback}</a></p>
  <label for="textinput-2">Description:</label>
  <input data-clear-btn="true" name="description" id="" placeholder="Description" value="" data-mini="true" type="text" required>
  <label for="Last Name">Part Number:</label>
  <input data-clear-btn="true" name="partnumber" id="" placeholder="Part Number" value="" data-mini="true" type="text" required>
  <label for="textinput-1">Price:</label>
  <input data-clear-btn="true" name="price" id="" placeholder="Price" value="" data-mini="true" type="number" required>
  
  
     </fieldset>

    <br/>
    <input class="ui-shadow ui-btn ui-corner-all" name="newpartlist" type="submit" value="Submit" />
    </form>

        		</div>
        	</div>
       	

        </div>