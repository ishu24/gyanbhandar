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
				<h2>Search <span> Book By JSBN</span></h2>
				<p><span><i class="fa  fa-search" aria-hidden="true"></i></span></p>
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
                      
                      <div class="col-lg-8">
                        <input class="form-control" id="cname" name="txtName" type="text">
                      </div>
                    </div>
                 </div>
                  <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                         <button class='btn btn-danger' name='btnSub'>View Book</button>
                      </div>
                    </div>
              </form>
			       <div class="bs-docs-example">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>Title</th>
              <th>Alternate Title</th>
              <th>part</th>
              <th>Type</th>
              <th>Contents</th>
              <th>Author Type</th>
              <th>Author Name</th>
              <th>Language</th>
              <th>Subject</th>
              <th>Publisher</th>
              <th>Pages</th>
              <th>Publication Year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <th>abc</th>
              <th>xyz</th>
              <th>part-1</th>
              <th>Tika</th>
              <th>nkdjcndkjc</th>
              <th>Maharaj</th>
              <th>pqr</th>
              <th>E</th>
              <th>bji</th>
              <th>atul</th>
              <th>120</th>
              <th>1998</th>
            </tr>
           
          </tbody>
        </table>
      </div>
			
			<div class="clearfix"> </div>
			<script src="js/lightbox-plus-jquery.min.js"> </script>
		</div>
	</div>
	</div>
	<!-- //gallery --> 
<?php
	include_once("footer.php");
?>