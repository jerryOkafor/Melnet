<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Choose UnitID</title>
	<link rel="shortcut icon" href="../css/images/icon.ico">
	<link rel="stylesheet"  href="../css/themes/default/jquery.mobile-1.4.2.min.css">
	<link rel="stylesheet" href="../css/jquery.mobile.datepicker.css" />
	<link rel="stylesheet" href="../css/jquery.mobile.datepicker.theme.css" />
	<script src="../js/jquery.min.js"></script>	
	<script src="../js/jquery.mobile-1.4.2.min.js" ></script>
	<script src="../js/datepicker.js"></script>
	<script src="../js/jquery.mobile.datepicker.js"></script>
	
	


</head>
<body>

	
<div data-role="page" data-dialog="true">

		<div data-role="header" data-theme="b">
		<h1>Dialog</h1>
		</div>
		<div role="main" class="ui-content">
		  <form action="../ubnk/index.php" method="GET" data-ajax="false">
		<h3>Enter Unit ID</h3>
		
		 <label>Unit ID:</label>
		 <input  name="unitid" type="text" required>
			 
		 <label for="select-native-2">Location:</label>
		<select name="location" id="select-native-2" >
		  <?php require_once '../core/Core.php';
		  $core = new Core();
		  echo $core->getLoactions("unionbanklocations");
		  ?>
		     </select>
		<input type="submit" value="View" name="unitReportView">
		</form>
	<a href="../ubnk" data-ajax="false" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-a">Back</a>
		</div>
	</div>

	
</body>
</html>
