<?php 

class Gyanbhandar
{
	private $_Bhandar_id;
	private $_Bhandar_name;
	private $_Association_name;
	private $_State_id;
	private $_City_id;
	private $_District;
	private $_Address;
	private $_Pincode;
	private $_Workdays;
	private $_Timing;
	private $_Inupashray;
	private $_Sqft;
	private $_Cupboard;
	private $_Founder_name;
	private $_Landline_no;
	private $_Whatsapp_no;
	private $_Mobile_no;
	private $_Email;
	private $_Maharaj_name;
	private $_Community;
	private $_Iscomputerg;
	private $_Iscomputera;
	private $_Isinternet;
	private $_Listedbooks;
	private $_Unlistedbooks;
	private $_Listmade;
	private $_Software;
	private $_Updatedate;
	private $_Issuedbooks;
	private $_Chaturmas;
	private $_Bookstaken;
	private $_Otherbhandar;

	public function set_Bhandar_id($Bhandar_id)
	{
		$this->_Bhandar_id=$Bhandar_id;
	}
	public function get_Bhandar_id()
	{
		return $this->_Bhandar_id;
	}
	public function set_Bhandar_name($Bhandar_name)
	{
		$this->_Bhandar_name = $Bhandar_name;
	}
	public function get_Bhandar_name()
	{
		return $this->_Bhandar_name;
	}
	public function set_Association_name($Association_name)
	{
		$this->_Association_name = $Association_name;
	}
	public function get_Association_name()
	{
		return $this->_Association_name;
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
	public function set_District($District)
	{
		$this->_District=$District;
	}
	public function get_District()
	{
		return $this->_District;
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
	public function set_Whatsapp_no($Whatsapp_no) {
		$this->_Whatsapp_no = $Whatsapp_no;
	}
	public function get_Whatsapp_no() {
		return $this->_Whatsapp_no;
	}
	public function set_Mobile_no($Mobile_no) {
		$this->_Mobile_no = $Mobile_no;
	}
	public function get_Mobile_no() {
		return $this->_Mobile_no;
	}
	public function set_Workdays($Workdays)
	{
		$this->_Workdays = $Workdays;
	}
	public function get_Workdays()
	{
		return $this->_Workdays;
	}
	public function set_Timing($Timing)
	{
		$this->_Timing = $Timing;
	}
	public function get_Timing()
	{
		return $this->_Timing;
	}
	public function set_Inupashray($Inupashray)
	{
		$this->_Inupashray = $Inupashray;
	}
	public function get_Inupashray()
	{
		return $this->_Inupashray;
	}
	public function set_Sqft($Sqft)
	{
		$this->_Sqft = $Sqft;
	}
	public function get_Sqft()
	{
		return $this->_Sqft;
	}
	public function set_Cupboard($Cupboard)
	{
		$this->_Cupboard = $Cupboard;
	}
	public function get_Cupboard()
	{
		return $this->_Cupboard;
	}
	public function set_Founder_name($Founder_name)
	{
		$this->_Founder_name = $Founder_name;
	}
	public function get_Founder_name()
	{
		return $this->_Founder_name;
	}
	public function set_Maharaj_name($Maharaj_name)
	{
		$this->_Maharaj_name = $Maharaj_name;
	}
	public function get_Maharaj_name()
	{
		return $this->_Maharaj_name;
	}
	public function set_Community($Community)
	{
		$this->_Community = $Community;
	}
	public function get_Community()
	{
		return $this->_Community;
	}
	public function set_Iscomputerg($Iscomputerg)
	{
		$this->_Iscomputerg = $Iscomputerg;
	}
	public function get_Iscomputerg()
	{
		return $this->_Iscomputerg;
	}
	public function set_Iscomputera($Iscomputera)
	{
		$this->_Iscomputera = $Iscomputera;
	}
	public function get_Iscomputera()
	{
		return $this->_Iscomputera;
	}
	public function set_Isinternet($Isinternet)
	{
		$this->_Isinternet = $Isinternet;
	}
	public function get_Isinternet()
	{
		return $this->_Isinternet;
	}
	public function set_Listedbooks($Listedbooks)
	{
		$this->_Listedbooks = $Listedbooks;
	}
	public function get_Listedbooks()
	{
		return $this->_Listedbooks;
	}
	public function set_Unlistedbooks($Unlistedbooks)
	{
		$this->_Unlistedbooks = $Unlistedbooks;
	}
	public function get_Unlistedbooks()
	{
		return $this->_Unlistedbooks;
	}
	public function set_Listmade($Listmade)
	{
		$this->_Listmade = $Listmade;
	}
	public function get_Listmade()
	{
		return $this->_Listmade;
	}
	public function set_Software($Software)
	{
		$this->_Software = $Software;
	}
	public function get_Software()
	{
		return $this->_Software;
	}
	public function set_Updatedate($Updatedate)
	{
		$this->_Updatedate = $Updatedate;
	}
	public function get_Updatedate()
	{
		return $this->_Updatedate;
	}
	public function set_Issuedbooks($Issuedbooks)
	{
		$this->_Issuedbooks = $Issuedbooks;
	}
	public function get_Issuedbooks()
	{
		return $this->_Issuedbooks;
	}
	public function set_Chaturmas($Chaturmas)
	{
		$this->_Chaturmas = $Chaturmas;
	}
	public function get_Chaturmas()
	{
		return $this->_Chaturmas;
	}
	public function set_Bookstaken($Bookstaken)
	{
		$this->_Bookstaken = $Bookstaken;
	}
	public function get_Bookstaken()
	{
		return $this->_Bookstaken;
	}
	public function set_Otherbhandar($Otherbhandar)
	{
		$this->_Otherbhandar = $Otherbhandar;
	}
	public function get_Otherbhandar()
	{
		return $this->_Otherbhandar;
	}
	

	public function select()
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `bhandar_gyan`";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	public function select1($pid)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `bhandar_gyan` WHERE `Bhandar_id`='$pid'";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $data;
	}
	public function select2($cid)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `bhandar_gyan` WHERE `City_id`='$cid'";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $data;
	}
	public function select3($sid)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `bhandar_gyan` WHERE `State_id`='$sid'";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $data;
	}
	public function selectbnm($bnm)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `bhandar_gyan` WHERE `Bhandar_name`='$bnm'";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $data;
	}
	public function select4($ch)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `bhandar_gyan` WHERE `Bhandar_name` LIKE '$ch%'";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $data;
	}
	public function sel($start,$limit)
	{
			$conn=new mysqli("localhost","root","","gyanbhandar");
			$qry="SELECT * FROM `bhandar_gyan` limit $start,$limit";
			$data=mysqli_query($conn,$qry);
			//echo $qry;
			return $data;
	}
	public function selectmax(){
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT max(Bhandar_id) FROM `bhandar_gyan`";
		$data=mysqli_query($conn,$qry);
		return $data;
		//echo $qry;
	}
	public function insert(Gyanbhandar $rec)
	{
		
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="INSERT INTO `bhandar_gyan`(`Bhandar_name`,`Association_name`,`State_id`,`City_id`,`District`,`Address`,`Pincode`,`Workdays`,`Timing`,`Inupashray`,`Sqft`,`Cupboard`,`Founder_name`,`Landline_no`,`Whatsapp_no`,`Mobile_no`,`Email`,`Maharaj_name`,`Community`,`Iscomupterg`,`Iscomuptera`,`Isinternet`,`Listedbooks`,`Unlistedbooks`,`Listmade`,`Software`,`Updatedate`,`Issuedbooks`,`Chaturmas`,`Bookstaken`,`Otherbhandar`) VALUES ('".$rec->get_Bhandar_name()."','".$rec->get_Association_name()."',".$rec->get_State_id().",".$rec->get_City_id().",'".$rec->get_District()."','".$rec->get_Address()."','".$rec->get_Pincode()."','".$rec->get_Workdays()."','".$rec->get_Timing()."','".$rec->get_Inupashray()."',".$rec->get_Sqft().",".$rec->get_Cupboard().",'".$rec->get_Founder_name()."','".$rec->get_Landline_no()."','".$rec->get_Whatsapp_no()."','".$rec->get_Mobile_no()."','".$rec->get_Email()."','".$rec->get_Maharaj_name()."','".$rec->get_Community()."','".$rec->get_Iscomputerg()."','".$rec->get_Iscomputera()."','".$rec->get_Isinternet()."',".$rec->get_Listedbooks().",".$rec->get_Unlistedbooks().",'".$rec->get_Listmade()."','".$rec->get_Software()."','".$rec->get_Updatedate()."',".$rec->get_Issuedbooks().",'".$rec->get_Chaturmas()."',".$rec->get_Bookstaken().",'".$rec->get_Otherbhandar()."')";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	public function update(Gyanbhandar $rec)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="UPDATE `bhandar_gyan` SET `Bhandar_name`='".$rec->get_Bhandar_name()."',`Association_name`='".$rec->get_Association_name()."',`State_id`=".$rec->get_State_id().",`City_id`=".$rec->get_City_id().",`District`='".$rec->get_District()."',`Address`='".$rec->get_Address()."',`Pincode`='".$rec->get_Pincode()."',`Workdays`='".$rec->get_Workdays()."',`Timing`='".$rec->get_Timing()."',`Inupashray`='".$rec->get_Inupashray()."',`Sqft`=".$rec->get_Sqft().",`Cupboard`=".$rec->get_Cupboard().",`Founder_name`='".$rec->get_Founder_name()."',`Landline_no`='".$rec->get_Landline_no()."',`Whatsapp_no`='".$rec->get_Whatsapp_no()."',`Mobile_no`='".$rec->get_Mobile_no()."',`Email`='".$rec->get_Email()."',`Maharaj_name`='".$rec->get_Maharaj_name()."',`Community`='".$rec->get_Community()."',`Iscomupterg`='".$rec->get_Iscomputerg()."',`Iscomuptera`='".$rec->get_Iscomputera()."',`Isinternet`='".$rec->get_Isinternet()."',`Listedbooks`=".$rec->get_Listedbooks().",`Unlistedbooks`=".$rec->get_Unlistedbooks().",`Listmade`='".$rec->get_Listmade()."',`Software`='".$rec->get_Software()."',`Updatedate`='".$rec->get_Updatedate()."',`Issuedbooks`='".$rec->get_Issuedbooks()."',`Chaturmas`='".$rec->get_Chaturmas()."',`Bookstaken`=".$rec->get_Bookstaken().",`Otherbhandar`='".$rec->get_Otherbhandar()."' WHERE `Bhandar_id`=".$rec->get_Bhandar_id();

		
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	/*public function update1(Panjrapol $rec)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="UPDATE `bhandar_gyan` SET `Is_allow`='".$rec->get_Is_allow()."'";
		$data=mysqli_query($conn,$qry);
		echo $qry;
	}*/
	public function delete(Gyanbhandar $rec)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="DELETE FROM `bhandar_gyan` WHERE `Bhandar_id`=".$rec->get_Bhandar_id();
		$data=mysqli_query($conn,$qry);
		//echo $qry;	
	}
}
?>