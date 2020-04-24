<?php 

class Publisher
{
	private $_Publisher_id;
	private $_Publisher_name;
	private $_State_id;
	private $_City_id;
	private $_Address;
	private $_Pincode;
	private $_Email;
	private $_Landline_no;
	private $_Mobile_no;

	public function set_Publisher_id($Publisher_id)
	{
		$this->_Publisher_id=$Publisher_id;
	}
	public function get_Publisher_id()
	{
		return $this->_Publisher_id;
	}
	public function set_Publisher_name($Publisher_name)
	{
		$this->_Publisher_name = $Publisher_name;
	}
	public function get_Publisher_name()
	{
		return $this->_Publisher_name;
	}
	public function set_State_id($State_id)
	{
		$this->_State_id=$State_id;
	}
	public function get_State_id()
	{
		return $this->_State_id;
	}
	public function set_City_id($City_id)
	{
		$this->_City_id=$City_id;
	}
	public function get_City_id()
	{
		return $this->_City_id;
	}
	public function set_Address($Address)
	{
		$this->_Address=$Address;
	}
	public function get_Address()
	{
		return $this->_Address;
	}
	public function set_Pincode($Pincode)
	{
		$this->_Pincode=$Pincode;
	}
	public function get_Pincode()
	{
		return $this->_Pincode;
	}
	public function set_Email($Email) {
		$this->_Email = $Email;
	}
	public function get_Email() {
		return $this->_Email;
	}
	public function set_Landline_no($Landline_no) {
		$this->_Landline_no = $Landline_no;
	}
	public function get_Landline_no() {
		return $this->_Landline_no;
	}
	public function set_Mobile_no($Mobile_no) {
		$this->_Mobile_no = $Mobile_no;
	}
	public function get_Mobile_no() {
		return $this->_Mobile_no;
	}
	
	

	public function select()
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `publisher_gyan`";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function select1($pid)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `publisher_gyan` WHERE `Publisher_id`='$pid'";
		$data=mysqli_query($conn,$qry);
		return $data;
		echo $data;
	}
	public function select2($cid)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `publisher_gyan` WHERE `City_id`='$cid'";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $data;
	}
	public function select3($sid)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `publisher_gyan` WHERE `State_id`='$sid'";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $data;
	}
	public function selectpnm($pnm)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `publisher_gyan` WHERE `Publisher_name`='$pnm'";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $data;
	}
	public function select4($ch)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `publisher_gyan` WHERE `Publisher_name` LIKE '$ch%'";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $data;
	}
	public function sel($start,$limit)
	{
			$conn=new mysqli("localhost","root","","gyanbhandar");
			$qry="SELECT * FROM `publisher_gyan` limit $start,$limit";
			$data=mysqli_query($conn,$qry);
			//echo $qry;
			return $data;
	}
	public function selectmax(){
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT max(Publisher_id) FROM `publisher_gyan`";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $qry;
	}
	public function insert(Publisher $rec)
	{
		
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="INSERT INTO `publisher_gyan`(`Publisher_name`,`Address`,`Pincode`,`Email`,`Landline_no`,`Mobile_no`,`State_id`,`City_id`) VALUES ('".$rec->get_Publisher_name()."','".$rec->get_Address()."','".$rec->get_Pincode()."','".$rec->get_Email()."','".$rec->get_Landline_no()."','".$rec->get_Mobile_no()."',".$rec->get_State_id().",".$rec->get_City_id().")";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	public function update(Publisher $rec)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="UPDATE `publisher_gyan` SET `Publisher_name`='".$rec->get_Publisher_name()."',`Address`='".$rec->get_Address()."',`Pincode`='".$rec->get_Pincode()."',`Email`='".$rec->get_Email()."',`Landline_no`='".$rec->get_Landline_no()."',`Mobile_no`='".$rec->get_Mobile_no()."',`State_id`=".$rec->get_State_id().",`City_id`=".$rec->get_City_id()." WHERE `Publisher_id`=".$rec->get_Publisher_id();
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	
	public function delete(Publisher $rec)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="DELETE FROM `publisher_gyan` WHERE `Publisher_id`=".$rec->get_Publisher_id();
		$data=mysqli_query($conn,$qry);
		//echo $qry;	
	}
}
?>