<?php
  require_once("header.php");
?>
<script type="text/javascript">
  function delete_id(id)
  {
    var r= confirm("Are you sure you want to delete?");
    
    if(r== true)
    {
      window.location.href='delete.php?tbl=bhandar_gyan& delete_id='+id; 
    }
    
  }
</script>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Display Gyanbhandar</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-files-o"></i>Gyanbhandar List</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Gyanbhandar
              </header>
<?php
include_once("../class/State.php");
$obj1=new State();
include_once("../class/City.php");
$obj2=new City();
include_once("../class/Gyanbhandar.php");
  $obj=new Gyanbhandar();
$rec=$obj->select();
?>
              <div class="panel-body">
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th><i class="icon_profile"></i>Gyanbhandar Name</th>
                                    <th><i class="icon_pin_alt"></i>Address</th>
                                    <th>Working days</th>
                                    <th>Timing</th>
                                    <th><i class="icon_mobile"></i>Landline</th>
                                    <th><i class="icon_cogs"></i>Action</th>
                                </tr>
                            </thead>
                           <?php
$i=1;    
$data="";     
while($result=mysqli_fetch_array($rec))
{
  $rec1=$obj1->select1($result[3]);

  while ($result1=mysqli_fetch_array($rec1)) {
        $rec2=$obj2->select2($result[3]);
  while ($result2=mysqli_fetch_array($rec2)) {
    
  
      $data.="                  <tr class='odd gradeX'>
                                    <td>".$i++."</td>
                                    <td width='15%'>".$result[1]."</td>
                                    <td width='15%'>".$result[7]." ,".$result1[1].",".$result2[1].",".$result[6]."</td>
                                    <td>".$result[8]."</td>
                                    <td>".$result[9]."</td>
                                    <td>".$result[14]."</td>
                                   
                                    <td>
                                      <div class='btn-group'>
                                        <a class='btn btn-primary' href='gyanbhandarform.php?Id=".$result[0]."'>EDIT</a>
                                        <a class='btn btn-danger' href='javascript:delete_id(".$result[0].")'>DELETE</a>
                                      </div>
                                    </td>
                                </tr>";
                              }
                            }
}
echo $data;
?>
                          
                            </tbody>
                        </table>

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