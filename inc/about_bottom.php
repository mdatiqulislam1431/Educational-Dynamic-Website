<!-- about-bottom -->
	<div class="agileits-about-btm">
		<div class="container">
			<div class="w3-flex">
			<div class="col-md-4 col-sm-4 col-xs-12 ab1 agileits-about-grid1">


				<span class="fa fa-desktop" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Design Course</h4>
<?php 
		$query="SELECT * FROM tbl_design where course_column='colum_1' ORDER BY id DESC limit 3";
		 $c_c_1=$db->select($query);
		   if ($c_c_1) {
		   	  while ($result=$c_c_1->fetch_assoc()) {

?>
				<h5><?php echo $result['title']; ?></h5>
				<p><?php echo $result['content']; ?></p>

        <?php } } ?>
			</div>
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid2">

				<span class="fa fa-arrows  wthree-title-list" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Marketing Course</h4>
<?php 
		$query="SELECT * FROM tbl_design where course_column='colum_2' ORDER BY id DESC limit 3";
		 $c_c_2=$db->select($query);
		   if ($c_c_2) {
		   	  while ($result=$c_c_2->fetch_assoc()) {

?>
				<h5><?php echo $result['title']; ?></h5>
				<p><?php echo $result['content']; ?></p>

<?php } } ?>

			</div>
			<div class="col-md-4 col-sm-4 ab1 agileits-about-grid3">
				<span class="fa fa-bar-chart  wthree-title-list" aria-hidden="true"></span>
				<h4 class="agileinfo-head">Financial Course</h4>
<?php 
		$query="SELECT * FROM tbl_design where course_column='colum_3' ORDER BY id DESC limit 3";
		 $c_c_3=$db->select($query);
		   if ($c_c_3) {
		   	  while ($result=$c_c_3->fetch_assoc()) {

?>
				<h5><?php echo $result['title']; ?> </h5>
				<p><?php echo $result['content']; ?></p>


<?php } } ?>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about-bottom -->