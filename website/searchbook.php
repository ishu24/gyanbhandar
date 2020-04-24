<?php
  include_once("header.php");
?>
<!-- banner1 -->
<div class="banner1">
</div>
<!-- gallery -->
  <div class="gallery">
    <div class="container"> 
      <div class="w3layouts_header">
        <h2>Search <span> a Book</span></h2>
        <p><span><i class="fa fa-book" aria-hidden="true"></i></span></p>
      </div>
    <div class="gallery-grids">
       <form class="form-validate form-horizontal" id="frmregistration" method="post" action="">
        
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Title <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Title"/>
                      </div>
                 </div>
               
                
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Author Name <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Author-Name " />
                      </div>
                 </div>
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Language<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Language" />
                      </div>
                 </div>
                
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Publication<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter year" />
                      </div>
                 </div>
                     <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                         <button class='btn btn-danger' name='btnSub'>search a book</button>
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