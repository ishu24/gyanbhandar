<?php


 if(isset($_POST["Import"]))
 {
		
		$filename=$_FILES["file"]["tmp_name"];		


		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {

	         	include_once("../class/Book.php");
  				$obj1=new Book();
  				  $obj1->set_Book_title($getData[0]);
				  $obj1->set_Alternate_title($getData[1]);
				  $obj1->set_Part($getData[2]);
				  $obj1->set_Type($getData[3]);
				  $obj1->set_Contents($getData[4]);
				  $obj1->set_Author_type($getData[5]);
				  $obj1->set_Author_name($getData[6]);
				  $obj1->set_Language($getData[7]);
				  $obj1->set_Subject($getData[8]);
				  $obj1->set_Publisher_name($getData[9]);
				  $obj1->set_Pages($getData[10]);
				  $obj1->set_Publication_year($getData[11]);
	            $obj1->insert($obj1);
                  
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"bookform.php\"
					</script>";
				
	         }
			
	         fclose($file);	
		 }
	}	

 ?>