<?php
	include_once("header.php");
?>
<!-- banner1 -->
<script>
function showCity(str) {
    if (str.length == 0) { 
        document.getElementById("optCt").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("optCt").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getCity_ajax.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<?php
include_once("../class/Publisher.php");
  $obj1=new Publisher();
  $state=$city=$pid=$pnm=$add=$pin=$email=$lno=$mno="";
  if(isset($_GET["Id"]))
  {
    $pid=$_GET["Id"];
    $rec=$obj1->select1($pid);
    
    while($result=mysqli_fetch_array($rec))
    {
      $pnm=$result[1];
      $city=$result[8];
      $state=$result[7];
      $add=$result[2];
      $pin=$result[3];
      $email=$result[4];
      $lno=$result[5];
      $mno=$result[6];
    }   
  }
if(isset($_POST["btnSub"]))
{
  $pnm=strtoupper($_POST["txtName"]);
  if(isset($_POST["optSt"]))
  {
    $state=$_POST["optSt"];
  }
  if(isset($_POST["optCt"]))
  {
    $city=$_POST["optCt"];
  }
  $add=$_POST["txtAdd"];
  $pin=$_POST["txtPin"];
  $email=$_POST["txtEmail"];
  $lno=$_POST["txtLno"];
  $mno=$_POST["txtMno"];
  $obj1->set_Publisher_name($pnm);
  $obj1->set_Address($add);
  $obj1->set_Pincode($pin);
  $obj1->set_Email($email);
  $obj1->set_Landline_no($lno);
  $obj1->set_Mobile_no($mno);
  $obj1->set_State_id($state);
  $obj1->set_City_id($city);
  if($pid!="")
  {
    $obj1->set_Publisher_id($pid);
    $obj1->update($obj1);
  //echo "<script type='text/javascript'>alert('data updated')</script>";
  echo "<script type='text/javascript'>location.href = 'displaypublisher.php'</script>";
  }
  else
  {
    $rec=$obj1->selectpnm($pnm);
    $t=mysqli_num_rows($rec);
    
    if ( $t >0)
      {
          echo "<script type='text/javascript'>alert('data already exist')</script>";
          echo "<script type='text/javascript'>location.href = 'publisherform.php'</script>";
      }
      else{
        $obj1->insert($obj1);
  //echo "<script type='text/javascript'>alert('data inserted')</script>";
  echo "<script type='text/javascript'>location.href = 'displaypublisher.php'</script>";
      }
  }
}
?>
<div class="banner1">
</div>
<!-- gallery -->
	<div class="gallery">
		<div class="container"> 
			<div class="w3layouts_header">
				<h2>Publisher <span> Registration</span></h2>
				<p><span><i class="fa fa-wpforms" aria-hidden="true"></i></span></p>
			</div>
		<div class="gallery-grids">
		        <form class="form-validate form-horizontal" id="frmregistration" method="post" action="">
		        	<div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Publisher No.<span class=" ">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtName" type="text" placeholder="Enter Publication No.">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Name <span class=" ">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtName" type="text"   placeholder="Enter Name" value="<?php echo $pnm;?>" data-bvalidator="alpha,required"/>
                      </div>
                    </div>
<?php
include_once("../class/State.php");
$obj=new State();
$rec=$obj->select();
include_once("../class/City.php");
$obj1=new City();
$rec1=$obj1->select();

                $data="    <div class='form-group'>
                      <label for='cname' class='control-label col-lg-2'>State <span class=''>*</span></label>
                      <div class='col-lg-10'>
                       <select  class='form-control' id='cname' name='optSt' onChange='showCity(this.value)' data-bvalidator='required'>
                       <option>-------- Select State --------</option>";
                         while ($result1=mysqli_fetch_array($rec1))
                    {
                      while ($result=mysqli_fetch_array($rec))
                      {
                        
                        if($state==$result[0])
                        {
                          $data.="<option value='".$result[0]."' selected>".$result[1]."</option>";
                        }
                        else
                        {
                          $data.="<option value='".$result[0]."'>".$result[1]."</option>";
                        }
                      }
                    }
                       $data.="</select>
                      </div>
                    </div>";
 $data.="
                    <div class='form-group'>
                      <label for='cname' class='control-label col-lg-2'>City <span class=''> *</span></label>
                      <div class='col-lg-10'>
                        <select class='form-control' id='optCt' name='optCt' data-bvalidator='required'>
                        <option>-------- Select City --------</option>";
                       
                      while ($result1=mysqli_fetch_array($rec1))
                      {
                        if($city==$result1[0])
                        {
                          $data.="<option value='".$result1[0]."' selected>".$result1[1]."</option>";
                        }
                        else
                        {
                          $data.="<option value='".$result1[0]."'>".$result1[1]."</option>";
                        }
                      }
                    $data.=" </select>
                      </div>
                    </div>";
                    echo $data;
?>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Address <span class=" "></span></label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="cname" name="txtAdd" rows="4"/><?php echo $add;?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Pincode <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Pincode" value="<?php echo $pin;?>" data-bvalidator="number,maxlength[8]"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">E-Mail <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="txtEmail"   placeholder="Enter Email" value="<?php echo $email;?>" data-bvalidator="email"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Contact Person No.<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="txtLno"  type = "text" data-bvalidator="number,maxlength[13]" placeholder="Enter Contact Number" value="<?php echo $lno;?>" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Password<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="txtPwd"  type = "password" placeholder="Enter Password" value="<?php echo $lno;?>" />
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                         <?php
                    if(isset($_GET["Id"]))
                    {
                      $data="<button class='btn btn-danger' name='btnSub'>UPDATE</button>";
                    }
                    else{
                      $data="<button class='btn btn-danger' name='btnSub'>SUBMIT</button>";
                    }
                    echo $data;
                  ?>
                      </div>
                    </div>
                  </form>
			
			<div class="clearfix"> </div>
			<script src="js/lightbox-plus-jquery.min.js"> </script>
		</div>
	</div>
	</div>
	<!-- //gallery --> 
<?php
	include_once("footer.php");
?>