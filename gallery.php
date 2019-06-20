   

   <?php include "inc/header_ban.php"; ?>

		<!-- gallery -->
	<div id="lab" class="w3ls-section gallery">
		<div class="container">
			<h3 class="heading-agileinfo">Gallery<span>When Climbing The Carrer Ladder</span></h3>
			<div class="gallery-grids">
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo">
		<?php 

				$query="SELECT * FROM tbl_gallery where category='number_1' ORDER BY id DESC limit 1";
				$gallery_img=$db->select($query);
				 if ($gallery_img) {
				 	while ($result=$gallery_img->fetch_assoc()) {
		?>
						<a class="example-image-link" href="admin/<?php echo $result['images']; ?>" data-lightbox="example-set" data-title="<?php echo $result['title']; ?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/>
							<div class="figcaption">
								<p><?php echo $result['sub_title']; ?></p>
							</div>	
						</a> 
		<?php } } ?>
					</div>
				</div>
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo"> 
	<?php 

	     $query="SELECT * FROM tbl_gallery where category='number_2' ORDER BY id DESC limit 1";
				$gallery_img=$db->select($query);
				 if ($gallery_img) {
				 	while ($result=$gallery_img->fetch_assoc()) {
		?>
						<a class="example-image-link" href="admin/<?php echo $result['images']; ?>" data-lightbox="example-set" data-title="<?php echo $result['title']; ?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/>
							<div class="figcaption">
								<p><?php echo $result['sub_title']; ?></p>
							</div>	
						</a> 
		<?php } } ?>
						</a> 
					</div>
				</div>
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo"> 
		<?php 

				$query="SELECT * FROM tbl_gallery where category='number_3' ORDER BY id DESC limit 1";
				$gallery_img=$db->select($query);
				 if ($gallery_img) {
				 	while ($result=$gallery_img->fetch_assoc()) {
		?>
						<a class="example-image-link" href="admin/<?php echo $result['images']; ?>" data-lightbox="example-set" data-title="<?php echo $result['title']; ?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/>
							<div class="figcaption">
								<p><?php echo $result['sub_title']; ?></p>
							</div>	
						</a> 
		<?php } } ?> 
					</div>
				</div>
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo"> 
		<?php 

				$query="SELECT * FROM tbl_gallery where category='number_4' ORDER BY id DESC limit 1";
				$gallery_img=$db->select($query);
				 if ($gallery_img) {
				 	while ($result=$gallery_img->fetch_assoc()) {
		?>
						<a class="example-image-link" href="admin/<?php echo $result['images']; ?>" data-lightbox="example-set" data-title="<?php echo $result['title']; ?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/>
							<div class="figcaption">
								<p><?php echo $result['sub_title']; ?></p>
							</div>	
						</a> 
		<?php } } ?> 
					</div>
				</div>
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo"> 
		<?php 

				$query="SELECT * FROM tbl_gallery where category='number_5' ORDER BY id DESC limit 1";
				$gallery_img=$db->select($query);
				 if ($gallery_img) {
				 	while ($result=$gallery_img->fetch_assoc()) {
		?>
						<a class="example-image-link" href="admin/<?php echo $result['images']; ?>" data-lightbox="example-set" data-title="<?php echo $result['title']; ?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/>
							<div class="figcaption">
								<p><?php echo $result['sub_title']; ?></p>
							</div>	
						</a> 
		<?php } } ?>
					</div>
				</div>
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo"> 
		<?php 

				$query="SELECT * FROM tbl_gallery where category='number_6' ORDER BY id DESC limit 1";
				$gallery_img=$db->select($query);
				 if ($gallery_img) {
				 	while ($result=$gallery_img->fetch_assoc()) {
		?>
						<a class="example-image-link" href="admin/<?php echo $result['images']; ?>" data-lightbox="example-set" data-title="<?php echo $result['title']; ?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/>
							<div class="figcaption">
								<p><?php echo $result['sub_title']; ?></p>
							</div>	
						</a> 
		<?php } } ?> 
					</div>
				</div>
				<div class="clearfix"> </div> 
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo"> 
		<?php 

				$query="SELECT * FROM tbl_gallery where category='number_7' ORDER BY id DESC limit 1";
				$gallery_img=$db->select($query);
				 if ($gallery_img) {
				 	while ($result=$gallery_img->fetch_assoc()) {
		?>
						<a class="example-image-link" href="admin/<?php echo $result['images']; ?>" data-lightbox="example-set" data-title="<?php echo $result['title']; ?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/>
							<div class="figcaption">
								<p><?php echo $result['sub_title']; ?></p>
							</div>	
						</a> 
		<?php } } ?>
					</div>
				</div>
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo"> 
		<?php 

				$query="SELECT * FROM tbl_gallery where category='number_8' ORDER BY id DESC limit 1";
				$gallery_img=$db->select($query);
				 if ($gallery_img) {
				 	while ($result=$gallery_img->fetch_assoc()) {
		?>
						<a class="example-image-link" href="admin/<?php echo $result['images']; ?>" data-lightbox="example-set" data-title="<?php echo $result['title']; ?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/>
							<div class="figcaption">
								<p><?php echo $result['sub_title']; ?></p>
							</div>	
						</a> 
		<?php } } ?>
					</div>
				</div>
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo"> 
		<?php 

				$query="SELECT * FROM tbl_gallery where category='number_9' ORDER BY id DESC limit 1";
				$gallery_img=$db->select($query);
				 if ($gallery_img) {
				 	while ($result=$gallery_img->fetch_assoc()) {
		?>
						<a class="example-image-link" href="admin/<?php echo $result['images']; ?>" data-lightbox="example-set" data-title="<?php echo $result['title']; ?>">
							<img src="admin/<?php echo $result['image']; ?>" alt=""/>
							<div class="figcaption">
								<p><?php echo $result['sub_title']; ?></p>
							</div>	
						</a> 
		<?php } } ?>
					</div>
				</div>
				
				<div class="clearfix"> </div> 
			</div>
			<script src="js/lightbox-plus-jquery.min.js"> </script>
		</div>
	</div>
	<!-- //gallery -->

	<?php include "inc/footer.php"; ?>