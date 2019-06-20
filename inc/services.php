<!-- services -->
<div class="services">
		<h3 class="heading-agileinfo">What we offer<span>When Climbing The Carrer Ladder </span></h3>
	<div class="container">
		<div class="services-top-grids">
 <?php 
 		$query="SELECT * FROM what_we_offer ORDER BY id DESC limit 3";
 		$what_we_offer=$db->select($query);
 		  if ($what_we_offer) {
 		  	  while ($result=$what_we_offer->fetch_assoc()) {

 ?>
			<div class="col-md-4">
				<div class="grid1">

					<i class="<?php echo $result['icon_category']; ?>" aria-hidden="true"></i>
					<h4><?php echo $result['title']; ?></h4>
					<p><?php echo $result['content']; ?></p>

				</div>
			</div>
<?php } } ?>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom-grids">
 <?php 
 		$query="SELECT * FROM what_we_offer ORDER BY id DESC limit 3";
 		$what_we_offer=$db->select($query);
 		  if ($what_we_offer) {
 		  	  while ($result=$what_we_offer->fetch_assoc()) {

 ?>
			<div class="col-md-4">
				<div class="grid1">

					<i class="<?php echo $result['icon_category']; ?>" aria-hidden="true"></i>
					<h4><?php echo $result['title']; ?></h4>
					<p><?php echo $result['content']; ?></p>

				</div>
			</div>
<?php } } ?>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->