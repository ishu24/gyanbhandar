<?php
	include_once("header1.php");
?>
<!-- banner1 -->
<div class="banner1">
</div>
<!-- gallery -->
	<div class="gallery">
		<div class="container"> 
			<div class="w3layouts_header">
				<h2>Book <span> Registration</span></h2>
				<p><span><i class="fa fa-book" aria-hidden="true"></i></span></p>
			</div>
		<div class="gallery-grids">
			 <form class="form-validate form-horizontal" id="frmregistration" method="post" action="">
			 	<div class="row">
		        	<div class="form-group col-md-6">
                      <label for="cname" class="control-label col-lg-4">Publisher</label>
                      <div class="col-lg-8">
                        <input class="form-control" id="cname" name="txtName" type="text" readonly="">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="cname" class="control-label col-lg-4">Id</label>
                      <div class="col-lg-8">
                        <input class="form-control" id="cname" name="txtName" type="text" readonly="">
                      </div>
                    </div>
                 </div>
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Title <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Title"/>
                      </div>
                 </div>
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Alternative Title <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Alternative Title"/>
                      </div>
                 </div>
                  <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Type <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Type"/>
                      </div>
                 </div>
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Part <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter part"/>
                      </div>
                 </div>
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Contents <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter content" />
                      </div>
                 </div>
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Author Type <span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Author-Type " />
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
                      <label for="cname" class="control-label col-lg-2">Subject<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="text"   placeholder="Enter Subject" />
                      </div>
                 </div>
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Pages<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="number"   placeholder="Enter pages" />
                      </div>
                 </div>
                 <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Publication year<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtPin" type="number"   placeholder="Enter year" />
                      </div>
                 </div>
                     <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                         <button class='btn btn-danger' name='btnSub'>Genrate JSBN/QRcode</button>
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