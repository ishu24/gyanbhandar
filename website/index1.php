<?php
	include_once("header1.php");
?>
<!-- banner -->
<!-- banner-slider -->
			<div class="banner-slider">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="agileits-banner-info">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3>THE PLACE FOR HAPPY AND CREATIVE LEARNING</h3>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="agileits-banner-info agileits-banner-info1">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3>Help on your way to academic excellence!</h3>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="agileits-banner-info agileits-banner-info2">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3>THE PLACE FOR HAPPY AND CREATIVE LEARNING</h3>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
			</div>
			<!-- //banner-slider -->
<?php
	include_once("footer.php");
?>