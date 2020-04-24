<?php 

class Book
{
	private $_Book_id;
	private $_Book_title;
	private $_Alternate_title;
	private $_Part;
	private $_Type;
	private $_Contents;
	private $_Author_type;
	private $_Author_name;
	private $_Language;
	private $_Subject;
	private $_Publisher_name;
	private $_Pages;
	private $_Publication_year;

	public function set_Book_id($Book_id)
	{
		$this->_Book_id=$Book_id;
	}
	public function get_Book_id()
	{
		return $this->_Book_id;
	}
	public function set_Book_title($Book_title)
	{
		$this->_Book_title = $Book_title;
	}
	public function get_Book_title()
	{
		return $this->_Book_title;
	}
	public function set_Alternate_title($Alternate_title)
	{
		$this->_Alternate_title=$Alternate_title;
	}
	public function get_Alternate_title()
	{
		return $this->_Alternate_title;
	}
	public function set_Part($Part)
	{
		$this->_Part=$Part;
	}
	public function get_Part()
	{
		return $this->_Part;
	}
	public function set_Type($Type)
	{
		$this->_Type=$Type;
	}
	public function get_Type()
	{
		return $this->_Type;
	}
	public function set_Contents($Contents)
	{
		$this->_Contents=$Contents;
	}
	public function get_Contents()
	{
		return $this->_Contents;
	}
	public function set_Author_type($Author_type) {
		$this->_Author_type = $Author_type;
	}
	public function get_Author_type() {
		return $this->_Author_type;
	}
	public function set_Author_name($Author_name) {
		$this->_Author_name = $Author_name;
	}
	public function get_Author_name() {
		return $this->_Author_name;
	}
	public function set_Language($Language) {
		$this->_Language = $Language;
	}
	public function get_Language() {
		return $this->_Language;
	}
	public function set_Subject($Subject)
	{
		$this->_Subject=$Subject;
	}
	public function get_Subject()
	{
		return $this->_Subject;
	}
	public function set_Publisher_name($Publisher_name) {
		$this->_Publisher_name = $Publisher_name;
	}
	public function get_Publisher_name() {
		return $this->_Publisher_name;
	}
	public function set_Pages($Pages) {
		$this->_Pages = $Pages;
	}
	public function get_Pages() {
		return $this->_Pages;
	}
	public function set_Publication_year($Publication_year) {
		$this->_Publication_year = $Publication_year;
	}
	public function get_Publication_year() {
		return $this->_Publication_year;
	}
	
	

	public function select()
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `book_gyan`";
		$data=mysqli_query($conn,$qry);
		return $data;
	}
	/*public function select1($pid)
	{
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="SELECT * FROM `book_gyan` WHERE `Book_id`='$bid'";
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
	}*/
	public function insert(Book $rec)
	{
		
		$conn=new mysqli("localhost","root","","gyanbhandar");
		$qry="INSERT INTO `book_gyan`(`Book_title`,`Alternate_title`,`Part`,`Type`,`Contents`,`Author_type`,`Author_name`,`Language`,`Subject`,`Publisher_name`,`Pages`,`Publication_year`) VALUES ('".$rec->get_Book_title()."','".$rec->get_Alternate_title()."','".$rec->get_Part()."','".$rec->get_Type()."','".$rec->get_Contents()."','".$rec->get_Author_type()."','".$rec->get_Author_name()."','".$rec->get_Language()."','".$rec->get_Subject()."','".$rec->get_Publisher_name()."','".$rec->get_Pages()."','".$rec->get_Publication_year()."')";
		$data=mysqli_query($conn,$qry);
		//echo $qry;
	}
	/*public function update(Publisher $rec)
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
	}*/
}
?>