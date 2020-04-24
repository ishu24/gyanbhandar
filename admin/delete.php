<?php
if(isset($_GET["delete_id"]))
{
	$id=$_GET["delete_id"];	
	$tb=$_GET["tbl"];
	if($tb=="state_gyan")
	{
		include_once("../class/State.php");
		$obj=new State();
		$obj->set_State_id($id);
		$obj->delete($obj);	
		echo "<script type='text/javascript'>location.href = 'displaystate.php'</script>";
	}	
	else if($tb=="city_gyan")
	{
		include_once("../class/City.php");
		$obj=new City();
		$obj->set_City_id($id);
		$obj->delete($obj);	
		echo "<script type='text/javascript'>location.href = 'displaycity.php'</script>";
	}
	else if($tb=="publisher_gyan")
	{
		include_once("../class/Publisher.php");
		$obj=new Publisher();
		$obj->set_Publisher_id($id);
		$obj->delete($obj);	
		echo "<script type='text/javascript'>location.href = 'displaypublisher.php'</script>";
	}
	else if($tb=="bhandar_gyan")
	{
		include_once("../class/Gyanbhandar.php");
		$obj=new Gyanbhandar();
		$obj->set_Bhandar_id($id);
		$obj->delete($obj);	
		echo "<script type='text/javascript'>location.href = 'displaygyanbhandar.php'</script>";
	}
}
?>
