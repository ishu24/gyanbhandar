<?php
  require_once("header.php");
?>
<script type="text/javascript">
  function delete_id(id)
  {
    var r= confirm("Are you sure you want to delete?");
    
    if(r== true)
    {
      window.location.href='delete.php?tbl=city_gyan& delete_id='+id; 
    }
    
  }
</script>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Display City</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-files-o"></i>City List</li>
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
<?php
include_once("../class/State.php");
$obj1=new State();
include_once("../class/City.php");
$obj=new City();
$rec=$obj->select();
?>

              <div class="panel-body">
                   <br>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th><i class="icon_pin_alt"></i>City</th>
                                    <th><i class="icon_pin_alt"></i>State</th>
                                    <th><i class="icon_cogs"></i>Action</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
$i=1;    
$data="";     
while($result=mysqli_fetch_array($rec))
{
  $rec1=$obj1->select1($result[2]);
  while ($result1=mysqli_fetch_array($rec1)) {
      $data.="                  <tr class='odd gradeX'>
                                    <td>".$i++."</td>
                                    <td>".$result[1]."</td>
                                    <td>".$result1[1]."</td>
                                    <td>
                                      <div class='btn-group'>
                                        <a class='btn btn-primary' href='cityform.php?Id=".$result[0]."'>EDIT</a>
                                        <a class='btn btn-danger' href='javascript:delete_id(".$result[0].")'>DELETE</a>
                                      </div>
                                    </td>
                                </tr>";
                              }
}
$data.="</tbody>
                        </table>";
echo $data;
?>
                                
                           

                    </div>
            </section>
          </div>
        </div>
        <!-- page end-->
       
      </section>
    </section>
        <!-- Data Table -->
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/DT_bootstrap.js"></script>
    <script src="js/jquery.dataTables-conf.js"></script>