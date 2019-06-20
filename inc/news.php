<!-- news -->
	<div class="news">
		<div class="container">  
				<h2 class="heading-agileinfo">News & Events<span>Exclusive Holidays for Any Travelers</span></h2>
			<div class="news-agileinfo"> 
				<div class="news-w3row"> 
					<div class="wthree-news-grids">

<?php 
		$query="SELECT * FROM tbl_news where category='news_one' ORDER BY id DESC limit 1";
		$news_one=$db->select($query);
		  if ($news_one) {
		  	  while ($result=$news_one->fetch_assoc()) {

?>
						<div class="col-md-5 col-xs-5 datew3-agileits">
							<img style="width: 100%; height: 100%;" src="admin/<?php echo $result['image']; ?>" class="img-responsive">
						</div>
						<div class="col-md-7 col-xs-7 datew3-agileits-info ">
							<h5><a href="#" data-toggle="modal" data-target="#myModal"><?php echo $result['title']; ?></a></h5>
							<h6><?php echo $result['dat']; ?></h6>
							<p><?php echo $result['content']; ?></p>
						</div>
						<div class="clearfix"> </div>

	<?php } } ?>
					</div>
					
					
					<div class="wthree-news-grids news-grids-mdl">

<?php 
		$query="SELECT * FROM tbl_news where category='news_two' ORDER BY id DESC limit 1";
		$news_one=$db->select($query);
		  if ($news_one) {
		  	  while ($result=$news_one->fetch_assoc()) {

?>
						<div class="col-md-5 col-xs-5 datew3-agileits datew3-agileits-fltrt">
							<img style="width: 100%;height: 100%;" src="admin/<?php echo $result['image']; ?>" class="img-responsive">
						</div>
						<div class="col-md-7 col-xs-7 datew3-agileits-info datew3-agileits-info-fltlft">
							<h5><a href="#" data-toggle="modal" data-target="#myModal"><?php echo $result['title']; ?></a></h5>
							<h6><?php echo $result['dat']; ?></h6>
							<p><?php echo $result['content']; ?></p>
						</div>
						<div class="clearfix"> </div>
	<?php } } ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- //news -->