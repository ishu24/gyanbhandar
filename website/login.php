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
				<h2>Publisher <span> Login</span></h2>
				<p><span><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i></span></p>
			</div>
		<div class="gallery-grids">
		<form class="form-validate form-horizontal" id="frmregistration" method="post" action="index1.php">
		        	<div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Publisher No.<span class=" "></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="txtName" type="text" placeholder="Enter Publication No.">
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Password<span class=" "> </span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="txtPwd"  type = "password" placeholder="Enter Password"/>
                      </div>
                    </div>
                    <div style="float:right;"><a href="">Forgot Password?</a>
                   </div>
					 <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                         <button class='btn btn-danger' name='btnSub'>LOGIN</button>
                      </div>
                    </div>
                  </form>
                   <center>Create an account?<a href="publisherreg.php">Register</a></center>
			
			<div class="clearfix"> </div>
			<script src="js/lightbox-plus-jquery.min.js"> </script>
		</div>
	</div>
	</div>
	<!-- //gallery --> 
<?php
	include_once("footer.php");
?>