<?php
  require_once("header.php");
?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Books' Upload</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-files-o"></i>Book Form</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Books' Upload
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-horizontal" action="function.php" method="post" name="upload_excel" enctype="multipart/form-data" id="frmregistration">
                    <fieldset>
                      
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="filebutton">Select File for upload</label>
                            <div class="col-lg-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                             <label class="col-lg-3 control-label" for="filebutton" style="color: red;">Select .csv file for booklist</label>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                           
                           <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>