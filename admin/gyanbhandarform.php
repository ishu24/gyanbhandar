<?php
  require_once("header.php");
?>
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

<script  src="js/index1.js"></script>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Gyanbhandar Form</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-files-o"></i>Gyanbhandar Form</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Gyanbhandar Form
              </header>
              <div class="panel-body">
                <div class="form">
<?php
include_once("../class/Gyanbhandar.php");
  $obj1=new Gyanbhandar();
  $state=$city=$bid=$gnm=$add=$pin=$email=$lno=$wno=$fnm=$mno=$anm=$dis=$tm=$upa=$sqft=$cup=$mnm=$com=$comg=$coma=$intg=$lst=$ulst=$olst=$dt=$bk=$bkt=$other=$chk3=$sof=$chu=$chy=$chn=$chy1=$chn1=$chy2=$chn2=$chy3=$chn3=$chy4=$chn4=$chs5=$chsh5=$che5=$cho5=$chb6=$chss6=$chno6=$wm=$wt=$ww=$wth=$wf=$ws=$wsu=$no=$tm1=$t="";
  if(isset($_GET["Id"]))
  {
    $bid=$_GET["Id"];
    $rec=$obj1->select1($bid);
    
    while($result=mysqli_fetch_array($rec))
    {
      $gnm=$result[1];
      $anm=$result[2];
      $state=$result[3];
      $city=$result[4];
      $dis=$result[5];
      $pin=$result[6];
      $add=$result[7];
      $ch3=$result[8];
      $e=explode(",",$ch3);
      if(in_array("Mon",$e)){
        $wm="checked";
      }
      if(in_array("Tue",$e)){
        $wt="checked";
      }
      if(in_array("Wed",$e)){
        $ww="checked";
      }
      if(in_array("Thur",$e)){
        $wth="checked";
      }
      if(in_array("Fri",$e)){
        $wf="checked";
      }
      if(in_array("Sat",$e)){
        $ws="checked";
      }
      if(in_array("Sun",$e)){
        $wsu="checked";
      }
      $t=$result[9];
      $t1=explode("-",$t);
      $tm=$t1[0];
      $tm1=$t1[1];
      $upa=$result[10];
      if($upa=="Yes"){
        $chy="checked";
      }
      else{
        $chn="checked";
      }
      $sqft=$result[11];
      $cup=$result[12];
      $fnm=$result[13];
       $lno=$result[14];
      $wno=$result[15];
      $mno=$result[16];
      $email=$result[17];
     $mnm=$result[18];
      $com=$result[19];
      $comg=$result[20];
      if($comg=="Yes"){
        $chy1="checked";
      }
      else{
        $chn1="checked";
      }
      $coma=$result[21];
      if($coma=="Yes"){
        $chy2="checked";
      }
      else{
        $chn2="checked";
      }
      $intg=$result[22];
      if($intg=="Yes"){
        $chy3="checked";
      }
      else{
        $chn3="checked";
      }
      $lst=$result[23];
      $ulst=$result[24];
      $olst=$result[25];
      if($olst=="Manually"){
        $chy4="checked";
      }
      else{
        $chn4="checked";
      }
      $sof=$result[26];
      if($sof=="Shramnopasak-parivar"){
        $chs5="checked";
      }
      else if($sof=="ShrutSangam"){
        $chsh5="checked";
      }
      else if($sof=="Excel"){
        $che5="checked";
      }
      else {
        $cho5="checked";
      }
      $dt=$result[27];
      $bk=$result[28];
      $chu=$result[29];
      if($chu=="Both"){
        $chb6="checked";
      }
      else if($chu=="Only-sadhviji"){
        $chss6="checked";
      }
      else {
        $chno6="checked";
      }
      $bkt=$result[30];
      $other=$result[31];
    }   
  }
if(isset($_POST["btnSub"]))
{
  $gnm=strtoupper($_POST["txtNameg"]);
  $anm=$_POST["txtNamea"];
  if(isset($_POST["optSt"]))
  {
    $state=$_POST["optSt"];
  }
  if(isset($_POST["optCt"]))
  {
    $city=$_POST["optCt"];
  }
  $dis=$_POST["txtDis"];
  $add=$_POST["txtAdd"];
  $pin=$_POST["txtPin"];
  $ch3=$_POST['check_list3'];
  $chk3=implode(",",$ch3); 
  $tm=$_POST["txtTime"];
  $tm1=$_POST["txtTime1"];
  $t=$tm."-".$tm1;
  if(isset($_POST["optUpa"]))
  {
    $upa=$_POST["optUpa"];
  }
  $sqft=$_POST["txtSqft"];
  $cup=$_POST["txtCup"];
  $fnm=$_POST["txtNamef"];
  $lno=$_POST["txtLno"];
  $wno=$_POST["txtWno"];
  $mno=$_POST["txtMno"];
  $email=$_POST["txtEmail"];
  $mnm=$_POST["txtNameM"];
  $com=$_POST["txtCom"];
  if(isset($_POST["optComg"]))
  {
    $comg=$_POST["optComg"];
  }
  if(isset($_POST["optComa"]))
  {
    $coma=$_POST["optComa"];
  }
  if(isset($_POST["optInt"]))
  {
    $intg=$_POST["optInt"];
  }
  $lst=$_POST["txtList"];
  $ulst=$_POST["txtUnlist"];
  if(isset($_POST["optList"]))
  {
    $olst=$_POST["optList"];
  }
  if(isset($_POST["optSof"]))
  {
    $sof=$_POST["optSof"];
  }
  if(isset($_POST["optChu"]))
  {
    $chu=$_POST["optChu"];
  }
  $dt=$_POST["txtDate"];
  $bk=$_POST["txtIssued"];
  if(isset($_POST["optCt"]))
  {
    $city=$_POST["optCt"];
  } 
  $bkt=$_POST["txtAsbook"];
  $other=$_POST["txtNames"];

  $obj1->set_Bhandar_name($gnm);
  $obj1->set_Association_name($anm);
  $obj1->set_State_id($state);
  $obj1->set_City_id($city);
  $obj1->set_District($dis);
  $obj1->set_Address($add);
  $obj1->set_Pincode($pin);
  $obj1->set_Whatsapp_no($wno);
  $obj1->set_Workdays($chk3);
  $obj1->set_Timing($t);
  $obj1->set_Inupashray($upa);
  $obj1->set_Sqft($sqft);
  $obj1->set_Cupboard($cup);
  $obj1->set_Founder_name($fnm);
  $obj1->set_Maharaj_name($mnm);
  $obj1->set_Community($com);
  $obj1->set_Iscomputerg($comg);
  $obj1->set_Iscomputera($coma);
  $obj1->set_Isinternet($intg);
  $obj1->set_Listedbooks($lst);
  $obj1->set_Unlistedbooks($ulst);
  $obj1->set_Listmade($olst);
  $obj1->set_Software($sof);
  $obj1->set_Updatedate($dt);
  $obj1->set_Issuedbooks($bk);
  $obj1->set_Chaturmas($chu);
  $obj1->set_Bookstaken($bkt);
  $obj1->set_Otherbhandar($other);
  $obj1->set_Email($email);
  $obj1->set_Landline_no($lno);
  $obj1->set_Mobile_no($mno);
  if($bid!="")
  {
    $obj1->set_Bhandar_id($bid);
    $obj1->update($obj1);
  //echo "<script type='text/javascript'>alert('data updated')</script>";
  echo "<script type='text/javascript'>location.href = 'displaygyanbhandar.php'</script>";
  }
  else
  {
    $rec=$obj1->selectbnm($gnm);
    $t=mysqli_num_rows($rec);
    
    if ( $t> 0)
      {
          echo "<script type='text/javascript'>alert('data already exist')</script>";
          echo "<script type='text/javascript'>location.href = 'gyanbhandarform.php'</script>";
      }
      else{
        $obj1->insert($obj1);
  //echo "<script type='text/javascript'>alert('data inserted')</script>";
  echo "<script type='text/javascript'>location.href = 'displaygyanbhandar.php'</script>";
      }
  }
}
?>
                  <form class="form-validate form-horizontal" id="frmregistration" method="post" action="" enctype="multipart/form-data">
                    
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Gyanbhandar Name<span class=" ">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtNameg" type="text"   placeholder="Enter Gyanbhandar Name" value="<?php echo $gnm;?>" data-bvalidator="alpha,required" />
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Assoiciation Name<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtNamea" type="text"   placeholder="Enter Association Name" value="<?php echo $anm;?>" data-bvalidator="alpha"  />
                      </div>
                    </div>
                 <?php
include_once("../class/State.php");
$obj=new State();
$rec=$obj->select();
include_once("../class/City.php");
$obj1=new City();
$rec1=$obj1->select();

                $data='   <div class="row">   <div class="form-group col-lg-6">
                      <label for="cname" class="control-label col-lg-4">State <span class=" ">*</span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                      <select  class="form-control" id="cname" name="optSt" onChange="showCity(this.value)" data-bvalidator="required">
                       <option value="">-------- Select State --------</option>';
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
                       $data.='</select>
                      </div>
                    </div>';
include_once("../class/City.php");
$obj1=new City();
$rec1=$obj1->select();  
              
                  $data.='
                    <div class="form-group col-lg-6" >
                      <label for="cname" class="control-label col-lg-4">City <span class=" ">*</span></label>
                      <div class="col-lg-8" >
                        <select class="form-control" id="optCt" name="optCt" data-bvalidator="required">
                        <option value="">-------- Select City --------</option>';
                       
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
                    $data.='  </select>
                      </div>
                    </div></div>';
                    echo $data;
                    ?>
                  
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="cname" class="control-label col-lg-4">District <span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input class="form-control" id="cname" name="txtDis" type="text"   placeholder="Enter District" value="<?php echo $dis;?>" data-bvalidator="alpha"/>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="cname" class="control-label col-lg-4">Pincode <span class=" "> </span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Pincode" value="<?php echo $pin;?>" data-bvalidator="number,maxlength[8]"/>
                      </div>
                    </div>
                  </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Address <span class=" ">*</span></label>
                      <div class="col-lg-10">
                        <textarea class="form-control" id="cname" name="txtAdd" data-bvalidator="required"  rows="4"/><?php echo $add;?></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Working Days?<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input type="checkbox" name="check_list3[]" value="Mon" <?php echo $wm;?>><label>Monday</label>&nbsp;&nbsp;
                      <input type="checkbox" name="check_list3[]" value="Tue" <?php echo $wt;?>><label>Tuesday</label>&nbsp;&nbsp;
                      <input type="checkbox" name="check_list3[]" value="Wed" <?php echo $ww;?>><label>Wednesday</label>&nbsp;&nbsp;
                      <input type="checkbox" name="check_list3[]" value="Thur" <?php echo $wth;?>><label>Thursday</label>&nbsp;&nbsp;
                      <input type="checkbox" name="check_list3[]" value="Fri" <?php echo $wf;?>><label>Friday</label>&nbsp;&nbsp;
                      <input type="checkbox" name="check_list3[]" value="Sat" <?php echo $ws;?>><label>Saturday</label>&nbsp;&nbsp;
                      <input type="checkbox" name="check_list3[]" value="Sun" <?php echo $wsu;?>><label>Sunday</label>&nbsp;&nbsp;
                      <input type="checkbox" name="check_list3[]" value="None" checked=""<?php echo $no;?>><label>None</label>&nbsp;&nbsp;
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Time <span class=" "> </span></label>
                      <label class="col-lg-1"><b>Start ::</b></label>
                      <div class="col-lg-3">
                        
                        <input class="form-control" id="cname" name="txtTime" type="time"  value="<?php echo $tm;?>" />
                        
                      </div>
                      <label class="col-lg-offset-1 col-lg-1"><b>End ::</b></label>
                       <div class="col-lg-3">
                        
                        <input class="form-control" id="cname" name="txtTime1" type="time"  value="<?php echo $tm1;?>" />
                      </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                      <label for="cname" class="control-label col-lg-4">Gyanbhandar is in upashray?<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                       
                      <label><input type="radio" name="optUpa" value="Yes" checked="true" onclick="show2();" <?php echo $chy; ?>>Yes</label>&nbsp;&nbsp;
                      <label><input type="radio" name="optUpa" value="No" onclick="show1();"<?php echo $chn; ?>>No</label>
                  
                      </div>
                    </div>
                    
                    
                    <div class="form-group  col-md-6" id="div1">
                      <label for="cname" class="control-label col-lg-4">Gyanbhandar square/feet.<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input class="form-control" id="cname" name="txtSqft" type="text"   placeholder="Enter Gyanbhandar Sq.ft." data-bvalidator="number" value="<?php echo $sqft;?>"/>
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">How many Cupboard<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtCup" type="text"   placeholder="Enter No. of cupboard" value="<?php echo $cup;?>" data-bvalidator="number" min="1"/>
                      </div>
                    </div>
                  
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Founder Name <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtNamef" type="text"   placeholder="Enter Founder Name" value="<?php echo $fnm;?>" data-bvalidator="alpha"/>
                      </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-lg-6">
                      <label for="cname" class="control-label col-lg-4">Landline No.<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input class="form-control" id="subject" name="txtLno" type = "text" data-bvalidator="number,maxlength[13]" placeholder="Enter Landline Number" value="<?php echo $lno;?>"/>
                      </div>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="cname" class="control-label col-lg-4">WhatsApp No.<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input class="form-control" id="subject" name="txtWno" type = "text" data-bvalidator="number,maxlength[13]" placeholder="Enter WhatsApp Number" value="<?php echo $wno;?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label for="cname" class="control-label col-lg-4">Mobile No.<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input class="form-control" id="subject" name="txtMno"  type = "text" data-bvalidator="number,maxlength[13]" placeholder="Enter Mobile Number" value="<?php echo $mno;?>"/>
                      </div>
                    </div>
                    
                    <div class="form-group col-lg-6">
                      <label for="cemail" class="control-label col-lg-4">E-Mail <span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input class="form-control " id="cemail" type="text" data-bvalidator="email" name="txtEmail"   placeholder="Enter Email" value="<?php echo $email;?>"/>
                      </div>
                    </div>
                  </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Maharaj Name <span class=" "> </span></label>
                      <div class="col-lg-10" >
                        <input class="form-control " id="cemail" type="text" name="txtNameM"   placeholder="Enter Maharaj Name" value="<?php echo $mnm;?>" data-bvalidator="alpha"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Community <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="txtCom"   placeholder="Enter Community" value="<?php echo $com;?>" data-bvalidator="alpha"/>
                      </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-lg-6">
                      <label for="cemail" class="control-label col-lg-4">Gyanbhandar have computer?<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                       
                      <label><input type="radio" name="optComg" value="Yes" <?php echo $chy1; ?>>Yes</label>&nbsp;&nbsp;
                      <label><input type="radio" name="optComg" value="No"  <?php echo $chn1; ?>>No</label>
                  
                      </div>

                    </div>
                    <div class="form-group col-lg-6">
                      <label for="cemail" class="control-label col-lg-4">Association have computer?<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                       
                      <label><input type="radio" name="optComa" value="Yes" <?php echo $chy2; ?>>Yes</label>&nbsp;&nbsp;
                      <label><input type="radio" name="optComa" value="No" <?php echo $chn2; ?>>No</label>
                  
                      </div>
                      
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="cemail" class="control-label col-lg-2">Is internet avaliable?<span class=" "> </span></label>
                      <div class="col-lg-10">
                       
                      <label><input type="radio" name="optInt" value="Yes" <?php echo $chy3; ?>>Yes</label>&nbsp;&nbsp;
                      <label><input type="radio" name="optInt" value="No" <?php echo $chn3; ?>>No</label>
                  
                      </div>
                      
                    </div>
                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label for="cname" class="control-label col-lg-4">How many books listed?<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input class="form-control" id="subject" name="txtList" type="text"   placeholder="Enter Number" value="<?php echo $lst;?>" data-bvalidator="number"/>
                      </div>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="cname" class="control-label col-lg-4">How many books are not listed?<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input class="form-control" id="subject" name="txtUnlist" type="text"   placeholder="Enter Number" value="<?php echo $ulst;?>" data-bvalidator="number"/>
                      </div>
                    </div>
                  </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">How list made?<span class=" "> </span></label>
                      <div class="col-lg-10">
                       
                      <label><input type="radio" name="optList" value="Manually" <?php echo $chy4; ?>>Manually</label>&nbsp;&nbsp;
                      <label><input type="radio" name="optList" value="Computer" <?php echo $chn4; ?>>Computer</label>
                  
                      </div>
                      
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">If in comupter than which software?<span class=" "> </span></label>
                      <div class="col-lg-2">
                       <input type="radio" name="optSof" value="Shramnopasak-parivar" <?php echo $chs5; ?>><label>Shramnopasak-parivar</label><br>
                       <input type="radio" name="optSof" value="ShrutSangam" <?php echo $chsh5; ?>><label>ShrutSangam</label>
                      </div>
                      <div class="col-lg-2">
                      <input type="radio" name="optSof" value="Excel" <?php echo $che5; ?>><label>Excel</label><br>
                      <input type="radio" name="optSof" value="Other" <?php echo $cho5; ?>><label>Other</label>
                      </div> 
                    </div>
                    <div class="row">
                    <div class="form-group col-lg-6" >
                      <label for="cemail" class="control-label col-lg-4">Last updated date <span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input  type="text"  value="<?php echo $dt;?>" name="txtDate" data-beatpicker="true" data-beatpicker-position="['right','*']" data-beatpicker-id="myDatePicker" style="height:30px; width:330px;"/>
                      </div>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="cemail" class="control-label col-lg-4">How many books issued last year<span class=" "> </span></label>
                      <div class="col-lg-8" style="padding-left:25px;">
                        <input class="form-control " id="cemail" type="text" name="txtIssued"   placeholder="Enter No. of books issued" value="<?php echo $bk;?>" data-bvalidator="number"/>
                      </div>
                    </div>
                  </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">At every year sadhu/sadhvi bhangvant chaturmas is held in your association?<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input type="radio" name="optChu" value="Both" <?php echo $chb6; ?>><label>Both</label><br>
                      <input type="radio" name="optChu" value="Only-sadhviji" <?php echo $chss6; ?>><label>Only sadhviji</label><br>
                      <input type="radio" name="optChu" value="Not-decided" <?php echo $chno6; ?>><label>Not decided</label>
                  
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">How many association take books from your gyanbhandar<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="txtAsbook"   placeholder="Enter Number" value="<?php echo $bkt;?>" data-bvalidator="number"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Other gyanbhandar<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="txtNames"   placeholder="Enter Name" value="<?php echo $other;?>" data-bvalidator="alpha"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                          <?php
                    if(isset($_GET["Id"]))
                    {
                      $data="<button class='btn btn-primary' name='btnSub'>UPDATE</button>";
                    }
                    else{
                      $data="<button class='btn btn-primary' name='btnSub'>SUBMIT</button>";
                    }
                    echo $data;
                  ?>
                      </div>
                    </div>
                  </form>
                </div>
 
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>