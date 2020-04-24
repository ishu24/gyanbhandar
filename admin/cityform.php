<?php
  require_once("header.php");
?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Add City</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-files-o"></i>Add City</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                City
              </header>
              <div class="panel-body">
<?php
include_once("../class/City.php");
  $obj1=new City();
  $state=$city=$cid="";
  if(isset($_GET["Id"]))
  {
    $cid=$_GET["Id"];
    $rec=$obj1->select1($cid);
    
    while($result=mysqli_fetch_array($rec))
    {
      $city=$result[1];
      $state=$result[2];
    }   
  }
if(isset($_POST["btnSub"]))
{
  $city=strtoupper($_POST["txtCt"]);
  if(isset($_POST["optSt"]))
  {
    $state=$_POST["optSt"];
  }
  $obj1->set_City_name($city);
  $obj1->set_State_id($state);
  if($cid!="")
  {
    $obj1->set_City_id($cid);
    $obj1->update($obj1);
  //echo "<script type='text/javascript'>alert('data updated')</script>";
  echo "<script type='text/javascript'>location.href = 'displaycity.php'</script>";
  }
  else
  {
    $rec=$obj1->select3($city);
    $t=mysqli_num_rows($rec);
    
    if ( $t> 0)
      {
          echo "<script type='text/javascript'>alert('data already exist')</script>";
          echo "<script type='text/javascript'>location.href = 'cityform.php'</script>";
      }
      else{
        $obj1->insert($obj1);
  //echo "<script type='text/javascript'>alert('data inserted')</script>";
  echo "<script type='text/javascript'>location.href = 'cityform.php'</script>";
      }
  }
}
?>
                <div class="form">
                  <form class="form-validate form-horizontal" id="frmregistration" method="post" action="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">City<span class=" ">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtCt" type="text"   placeholder="Enter City" value="<?php echo $city;?>" data-bvalidator="alpha,required" >
                      </div>
                    </div>
<?php
include_once("../class/State.php");
$obj=new State();
$rec=$obj->select();

                   $data=' <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">State <span class=" ">* </span></label>
                      <div class="col-lg-10">
                       <select  class="form-control" id="cname" name="optSt" data-bvalidator="required" >
                         <option value="">-------- Select State --------</option>';
                         
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
                      
                       $data.='</select>
                      </div>
                    </div>';
                    echo $data;
?>  
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