<?php
ob_start();

	require_once 'config.php';
	require_once "$path/classes/Connection.php";
	$current_file =$_SERVER["SCRIPT_NAME"];	
	$script = trim(substr($current_file,10,-4)); 
	$core = new Core();
			 
class Core{
	
	public function generateInvoiceNumber()
	  {
	  $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT `invoiceNumber` FROM `invoice` ORDER BY `invoiceID` DESC";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $r = $stmt->fetch(PDO::FETCH_BOTH);
	      $row = $r["invoiceNumber"];
	      $midfix = substr($row,1,2);
	      $mid = date("m",time());
	      $fix =  trim(substr($row,3));
	      //echo $midfix;
	      if($midfix === $mid)
		{
		$p = $fix+1;
		}else{
		  $p = 1;
		}
		$out='';
			if(strlen($p)==1)
				{
				$out.='000'.$p;
				}else if(strlen($p)==2)
				{
				$out.='00'.$p;
				}else if(strlen($p)==3)
				{
				$out.='0'.$p;
				}else if(strlen($p)==1)
				{
				$out.=$p;
				}
				
				$newfix = $out;
			
		
	  return "N".$mid.$newfix;
	  }
	  
	  
	  public function generatePreformerInvoiceNumber()
	  {
	  $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT `invoiceNumber` FROM `pref_invoice` ORDER BY `invoiceID` DESC";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $r = $stmt->fetch(PDO::FETCH_BOTH);
	      $row = $r["invoiceNumber"];
	      $midfix = substr($row,1,2);
	      $mid = date("m",time());
	      $fix =  trim(substr($row,3));
	      //echo $midfix;
	      if($midfix === $mid)
		{
		$p = $fix+1;
		}else{
		  $p = 1;
		}
		$out='';
			if(strlen($p)==1)
				{
				$out.='000'.$p;
				}else if(strlen($p)==2)
				{
				$out.='00'.$p;
				}else if(strlen($p)==3)
				{
				$out.='0'.$p;
				}else if(strlen($p)==1)
				{
				$out.=$p;
				}
				
				$newfix = $out;
			
		
	  return "P".$mid.$newfix;
	  }
	public function generateCmJobId()
	  {
	  $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT `jobid` FROM `ubnkrecords` ORDER BY `ID` DESC";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $r = $stmt->fetch(PDO::FETCH_BOTH);
	      $row = $r["jobid"];
	      $prefix = trim(substr($row,0,4));
	      $date = date("ym",  time());
	      $fix =  trim(substr($row,4));
	      
	      if($prefix==$date)
		{
		$p = $fix+1;
		}else{
		  $p = 1;
		}
		$out='';
			if(strlen($p)==1)
				{
				$out.='000'.$p;
				}else if(strlen($p)==2)
				{
				$out.='00'.$p;
				}else if(strlen($p)==3)
				{
				$out.='0'.$p;
				}else if(strlen($p)==1)
				{
				$out.=$p;
				}
				
				$newfix = $out;
			
		
	  return "CM".$date.$newfix;
	  }
  public function generatePmJobId()
	  {
	  $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT `jobid` FROM `ubnkrecords` ORDER BY `ID` DESC";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $r = $stmt->fetch(PDO::FETCH_BOTH);
	      $row = $r["jobid"];
	      $prefix = trim(substr($row,0,4));
	      $date = date("ym",  time());
	      $fix =  trim(substr($row,4));
	      
	      if($prefix==$date)
		{
		$p = $fix+1;
		}else{
		  $p = 1;
		}
		$out='';
			if(strlen($p)==1)
				{
				$out.='000'.$p;
				}else if(strlen($p)==2)
				{
				$out.='00'.$p;
				}else if(strlen($p)==3)
				{
				$out.='0'.$p;
				}else if(strlen($p)==1)
				{
				$out.=$p;
				}
				
				$newfix = $out;
			
		
	  return "PM".$date.$newfix;
	  }
	public function getStockDetails($material,$col)
	  {
	      
	      $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT * FROM `partspricelist` WHERE `part_number` LIKE '%$material%'";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $row = $stmt->fetch(PDO::FETCH_ASSOC);
	      return htmlentities($row[$col]);
	  }
	  
	  public function getAllStockDetails($material)
	  {
	      
	      $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT * FROM `partspricelist` WHERE `part_number` LIKE '%$material%'";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $row = $stmt->fetch(PDO::FETCH_ASSOC);
	      return $row;
	  }
	  
	  
	  
  	public function getAllPriceList(){
	   	  
	      $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT * FROM `partspricelist`";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $reply="";
	      while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		  {

		  $reply.= " <option value='".$row['part_number']."'>".$row['description']." {".$row['part_number']."} </option>";
		  }
		$stmt = null;
		return $reply;
	}
public function getLoactions($table){
   	  
	      $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT * FROM `$table`";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $reply="";
	      while ($row = $stmt->fetch(PDO::FETCH_BOTH,  PDO::ATTR_STRINGIFY_FETCHES))
		  {

		  $reply.= " <option value='".html_entity_decode($row['location'])."'>".$row['location']."</option>";
		  }
		$stmt = null;
		return $reply;
	}
	
  public function getHost()
	{
	return $_SERVER["HTTP_HOST"];	
	
	}

	function adminlogedin()
		{
			if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
					{ 
			return true;
			
			} 
			else{
			  return false;
			
			}
		}//end function
	public function getAllReportCode(){
	  
	      $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT * FROM `report_code`";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $reply="<option value=''>Choose</option>";
	      while ($row = $stmt->fetch(PDO::FETCH_BOTH))
		  {

		  $reply.= " <option class='codeView' codemeaning='".$row['meaning']."' value='".$row['code']."'>".$row['code']."</option>";
		  }
		$stmt = null;
		return $reply;
	  
	}

	public function getAllFaultCode(){
	   	  
	      $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT * FROM `fault_code`";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $reply="<option value=''>Choose</option>";
	      while ($row = $stmt->fetch(PDO::FETCH_BOTH))
		  {

		  $reply.= " <option class='codeView' codemeaning='".$row['meaning']."' value='".$row['code']."'>".$row['code']."</option>";
		  }
		$stmt = null;
		return $reply;
	}
	public function getAllRepairCode(){
	   	  
	      $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT * FROM `repaire_code`";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $reply="<option value=''>Choose</option>";
	      while ($row = $stmt->fetch(PDO::FETCH_BOTH))
		  {

		  $reply.= " <option class='codeView' codemeaning='".$row['meaning']."' value='".$row['code']."'>".$row['code']."</option>";
		  }
		$stmt = null;
		return $reply;
	}
	public function getAllRootCauseCode(){
	  	  
	      $con = new Connection();
	      $link = $con->getConnection();
	      $query = "SELECT * FROM `rootcause_code`";
	      $stmt = $link->prepare($query);
	      $stmt->execute(); 
	      $reply="<option value=''>Choose</option>";
	      while ($row = $stmt->fetch(PDO::FETCH_BOTH))
		  {

		  $reply.= " <option class='codeView' codemeaning='".$row['meaning']."' value='".$row['code']."'>".$row['code']."</option>";
		  }
		$stmt = null;
		return $reply;
	}

	

public function splitDate($date){	
	$month = substr($date,0,2);
	$day=substr($date,3,5);
	$year =substr($date,8);
	$split=array("day"=>$day,"month"=>$month,"year"=>$year);
  return $split;
}
 public function deleteEntry($id)
      {
       //connect to database
      $con = new Connection();
      $query = "DELETE FROM `ubnkrecords` WHERE `ID` = '$id'";
	      $link = $con->getConnection();
	      $stmt = $link->prepare($query);
	      if($stmt->execute())
		{
		return true;
		}
		else
		  {
		  return false;
		  
		  }
	      
      }
	
}//end class core	