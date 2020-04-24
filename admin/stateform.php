<?php
  require_once("header.php");
?>
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Add State</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-files-o"></i>Add State</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                State
              </header>
              <div class="panel-body">
<?php
include_once("../class/State.php");
$obj=new State();
$state=$sid="";
if(isset($_GET["Id"]))
{
  $sid=$_GET["Id"];
  $rec=$obj->select1($sid);
  
  while($result=mysqli_fetch_array($rec))
  {
    $state=$result[1];
  }   
}
if(isset($_POST["btnSub"]))
{
  $state=strtoupper($_POST["txtSt"]);
  $obj->set_State_name($state);
  if($sid!="")
  {
    $obj->set_State_id($sid);
    $obj->update($obj);
  //echo "<script type='text/javascript'>alert('data updated')</script>";
  echo "<script type='text/javascript'>location.href = 'displaystate.php'</script>";
  }
  else
  {
    $rec=$obj->select2($state);
    $t=mysqli_num_rows($rec);
    
    if ( $t> 0)
      {
          echo "<script type='text/javascript'>alert('data already exist')</script>";
          echo "<script type='text/javascript'>location.href = 'stateform.php'</script>";
      }
      else{
        $obj->insert($obj);
        echo "<script type='text/javascript'>location.href = 'stateform.php'</script>";
      }
  }
}
?>
    <!--main content start-->
  
                <div class="form">
                  <form class="form-validate form-horizontal"  method="post" action="" id="frmregistration">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">State<span class=" ">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtSt" type="text"   placeholder="Enter State" value="<?php echo $state;?>" data-bvalidator="alpha,required" />
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