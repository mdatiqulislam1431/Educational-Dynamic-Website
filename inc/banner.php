<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
	<div class="carousel-inner" role="listbox">

 <?php
 		$query="SELECT * FROM tbl_slider where category='slider_1' ORDER BY id DESC limit 1";
 		 $slider_1=$db->select($query);
 		   if ($slider_1) {
 		   	   while ($result=$slider_1->fetch_assoc()) {

  ?>
		<div class="item active" style="background: url(admin/<?php echo $result['image']; ?>);">
				<div class="container">
					<div class="carousel-caption">
						<h3 class="text-uppercase"><?php echo $result['title']; ?></h3>
						<p><?php echo $result['content']; ?></p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>
 <?php } } ?>


  <?php
 		$query="SELECT * FROM tbl_slider where category='slider_2' ORDER BY id DESC limit 1";
 		 $slider_1=$db->select($query);
 		   if ($slider_1) {
 		   	   while ($result=$slider_1->fetch_assoc()) {

  ?>
			<div class="item item2" style="background: url(admin/<?php echo $result['image']; ?>);">
				<div class="container">
					<div class="carousel-caption">
						<h3 class="text-uppercase"><?php echo $result['title']; ?></h3>
						<p><?php echo $result['content']; ?></p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>
	<?php } } ?>

	<?php
 		$query="SELECT * FROM tbl_slider where category='slider_3' ORDER BY id DESC limit 1";
 		 $slider_1=$db->select($query);
 		   if ($slider_1) {
 		   	   while ($result=$slider_1->fetch_assoc()) {

  ?>
			<div class="item item3" style="background: url(admin/<?php echo $result['image']; ?>);">
				<div class="container">
					<div class="carousel-caption">
						<h3 class="text-uppercase"><?php echo $result['title']; ?></h3>
						<p><?php echo $result['content']; ?></p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>
	<?php } } ?>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->