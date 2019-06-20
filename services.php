   

   <?php include "inc/header_ban.php"; ?>

	<!-- services -->
	<div class="banner-bottom">
		<div class="container">
			<h3 class="heading-agileinfo">Services<span>When Climbing The Carrer Ladder</span></h3>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid">

<?php 
		$query="SELECT * FROM tbl_services where category='number_1' order by id desc limit 1";
		 $add_service=$db->select($query);
		   if ($add_service) {
		   	  while ($result=$add_service->fetch_assoc()) {

?>
					<h3><?php echo $result['title']; ?></h3>
					<p><?php echo $result['content']; ?></p>
					<div class="w3_agile_services_grid1">
						<img style="width: 100%;" src="admin/<?php echo $result['image'] ?>" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Learn More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
<?php } } ?>

				</div>
				<div class="col-md-4 agileits_services_grid">
<?php 
		$query="SELECT * FROM tbl_services where category='number_2' order by id desc limit 1";
		 $add_service=$db->select($query);
		   if ($add_service) {
		   	  while ($result=$add_service->fetch_assoc()) {

?>

					<h3><?php echo $result['title']; ?></h3>
					<p><?php echo $result['content']; ?></p>
					<div class="w3_agile_services_grid1">
						<img style="width: 100%;" src="admin/<?php echo $result['image']; ?>" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Learn More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>

<?php } } ?>
				</div>
				<div class="col-md-4 agileits_services_grid">
<?php 
		$query="SELECT * FROM tbl_services where category='number_3' order by id desc limit 1";
		 $add_service=$db->select($query);
		   if ($add_service) {
		   	  while ($result=$add_service->fetch_assoc()) {

?>

					<h3><?php echo $result['title']; ?></h3>
					<p><?php echo $result['content']; ?></p>
					<div class="w3_agile_services_grid1">
						<img style="width: 100%;" src="admin/<?php echo $result['image']; ?>" alt=" " class="img-responsive" />
						<div class="w3_blur"></div>
					</div>
					<div class="w3layouts_more">
						<a href="#" data-toggle="modal" data-target="#myModal">Learn More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
<?php } } ?>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->	
<!-- offer -->
	<div class="offer">
		<div class="container">
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agile_offer_grid">

<?php 
		$query="SELECT * FROM  tbl_offer where category='digit_1' order by id desc limit 1";
		 $offer=$db->select($query);
		   if ($offer) {
		   	  while ($result=$offer->fetch_assoc()) {

?>
					<div class="agileits_w3layouts_offer_grid">
						<div class="agile_offer_grid_pos">
							<p>01.</p>
						</div>
					</div>
					<div class="wthree_offer_grid1">
						<h4><?php echo $result['title']; ?></h4>
						<p class="w3_agileits_service_para">
							<?php echo $result['content']; ?>
						</p>
					</div>
<?php } } ?>

				</div>
				<div class="col-md-4 agile_offer_grid">

<?php 
		$query="SELECT * FROM  tbl_offer where category='digit_2' order by id desc limit 1";
		 $offer=$db->select($query);
		   if ($offer) {
		   	  while ($result=$offer->fetch_assoc()) {

?>
					<div class="agileits_w3layouts_offer_grid">
						<div class="agile_offer_grid_pos">
							<p>02.</p>
						</div>
					</div>
					<div class="wthree_offer_grid1">
						<h4><h4><?php echo $result['title']; ?></h4></h4>
						<p class="w3_agileits_service_para">
								<?php echo $result['content']; ?>
						</p>
					</div>

<?php } } ?>
				</div>
				<div class="col-md-4 agile_offer_grid">


<?php 
		$query="SELECT * FROM  tbl_offer where category='digit_3' order by id desc limit 1";
		 $offer=$db->select($query);
		   if ($offer) {
		   	  while ($result=$offer->fetch_assoc()) {

?>
					<div class="agileits_w3layouts_offer_grid">
						<div class="agile_offer_grid_pos">
							<p>03.</p>
						</div>
					</div>
					<div class="wthree_offer_grid1">
						  <h4><?php echo $result['title']; ?></h4>
						<p class="w3_agileits_service_para">
							<?php echo $result['content']; ?>
						</p>
					</div>

<?php } } ?>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //offer -->
<!-- offer-bottom -->
	<div class="banner-bottom">
		<div class="container">
		
			<div class="col-md-4 w3l_services_footer_top_left">
				<img src="images/g11.jpg" alt=" " class="img-responsive" />
			</div>
			
			<div class="col-md-8 w3l_services_footer_top_right">
				<div class="w3l_services_footer_top_right_main">


					<div class="w3l_services_footer_top_right_main_l">
						<h3>20 January 2018</h3>
					</div>
					<div class="w3l_services_footer_top_right_main_l1">	
						<div class="w3ls_service_icon">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</div>
					</div>
					<div class="w3l_services_footer_top_right_main_r">
						<a href="#" data-toggle="modal" data-target="#myModal">Maximus pretium </a>
						<p>Morbi sollicitudin odio massa, et rutrum sem rutrum in. 
							Duis elementum turpis ultricies, finibus leo.</p>
					</div>
					<div class="clearfix"> </div>


				</div>
				<div class="w3l_services_footer_top_right_main">


					<div class="w3l_services_footer_top_right_main_l">
						<h3>25 January 2018</h3>
					</div>
					<div class="w3l_services_footer_top_right_main_l1">	
						<div class="w3ls_service_icon">
							<i class="fa fa-map" aria-hidden="true"></i>
						</div>
					</div>
					<div class="w3l_services_footer_top_right_main_r">
						<a href="#" data-toggle="modal" data-target="#myModal">Aliquam faucibus </a>
						<p>Morbi sollicitudin odio massa, et rutrum sem rutrum in. 
							Duis elementum turpis ultricies, finibus leo.</p>
					</div>
					<div class="clearfix"> </div>


				</div>
				<div class="w3l_services_footer_top_right_main">


					<div class="w3l_services_footer_top_right_main_l">
						<h3>30 January 2018</h3>
					</div>
					<div class="w3l_services_footer_top_right_main_l1">	
						<div class="w3ls_service_icon">
							<i class="fa fa-pie-chart" aria-hidden="true"></i>
						</div>
					</div>
					<div class="w3l_services_footer_top_right_main_r">
						<a href="#" data-toggle="modal" data-target="#myModal">Vitae faucibus</a>
						<p>Morbi sollicitudin odio massa, et rutrum sem rutrum in. 
							Duis elementum turpis ultricies, finibus leo.</p>
					</div>
					<div class="clearfix"> </div>

					
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //offer-bottom -->

	<?php include "inc/footer.php"; ?>