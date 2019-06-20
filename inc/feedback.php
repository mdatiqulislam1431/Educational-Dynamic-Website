<!-- feedback -->
	<div class="feedback section-w3ls about-w3ls" id="testimonials">
		<div class="feedback-agileinfo">
			<div class="container">
				<h3 class="heading-agileinfo">Testimonials<span class="ttt">When Climbing The Carrer Ladder </span></h3>
				<div class="agileits-feedback-grids">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
		<?php 
				$query="SELECT * FROM tbl_testimonial where feedback='name_1' ORDER BY id DESC limit 1";
				 $testimonial=$db->select($query);
				   if ($testimonial) {
				   	  while ($result=$testimonial->fetch_assoc()) {

		?>

							<div class="feedback-info">
								<div class="feedback-top">
									<p><?php echo $result['content']; ?></p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img style="width: 100%; height: 100%;" src="admin/<?php echo $result['images']; ?>" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5><?php echo $result['title']; ?></h5>
										<p><?php echo $result['sub_title']; ?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
 		<?php } } ?>

						</div>
						<div class="item">

		<?php 
				$query="SELECT * FROM tbl_testimonial where feedback='name_2' ORDER BY id DESC limit 1";
				 $testimonial=$db->select($query);
				   if ($testimonial) {
				   	  while ($result=$testimonial->fetch_assoc()) {

		?>
						<div class="feedback-info">
								<div class="feedback-top">
									<p><?php echo $result['content']; ?></p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img style="width: 100%; height: 100%;" src="admin/<?php echo $result['images']; ?>" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5><?php echo $result['title']; ?></h5>
										<p><?php echo $result['sub_title']; ?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>

		<?php } } ?>
						</div>
						<div class="item">
		<?php 
				$query="SELECT * FROM tbl_testimonial where feedback='name_3' ORDER BY id DESC limit 1";
				 $testimonial=$db->select($query);
				   if ($testimonial) {
				   	  while ($result=$testimonial->fetch_assoc()) {

		?>

							<div class="feedback-info">
								<div class="feedback-top">
									<p><?php echo $result['content']; ?></p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img style="width: 100%; height: 100%;" src="admin/<?php echo $result['images']; ?>" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5><?php echo $result['title']; ?></h5>
										<p><?php echo $result['sub_title']; ?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>

		<?php } } ?>
						</div>
						<div class="item">

		<?php 
				$query="SELECT * FROM tbl_testimonial where feedback='name_4' ORDER BY id DESC limit 1";
				 $testimonial=$db->select($query);
				   if ($testimonial) {
				   	  while ($result=$testimonial->fetch_assoc()) {

		?>
							<div class="feedback-info">
								<div class="feedback-top">
									<p><?php echo $result['content']; ?></p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img style="width: 100%; height: 100%;" src="admin/<?php echo $result['images']; ?>" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5><?php echo $result['title']; ?></h5>
										<p><?php echo $result['sub_title']; ?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>

		<?php } } ?>
						</div>
						<div class="item">

		<?php 
				$query="SELECT * FROM tbl_testimonial where feedback='name_5' ORDER BY id DESC limit 1";
				 $testimonial=$db->select($query);
				   if ($testimonial) {
				   	  while ($result=$testimonial->fetch_assoc()) {

		?>
							<div class="feedback-info">
								<div class="feedback-top">
									<p><?php echo $result['content']; ?> </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img style="width: 100%; height: 100%;" src="admin/<?php echo $result['images']; ?>" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5><?php echo $result['title']; ?></h5>
										<p><?php echo $result['sub_title']; ?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
		<?php } } ?>

						</div>
						<div class="item">

		<?php 
				$query="SELECT * FROM tbl_testimonial where feedback='name_6' ORDER BY id DESC limit 1";
				 $testimonial=$db->select($query);
				   if ($testimonial) {
				   	  while ($result=$testimonial->fetch_assoc()) {

		?>
							<div class="feedback-info">
								<div class="feedback-top">
									<p><?php echo $result['content']; ?></p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img style="width: 100%; height: 100%;" src="admin/<?php echo $result['images']; ?>" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5> <?php echo $result['title']; ?></h5>
										<p><?php echo $result['sub_title']; ?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>

		<?php } } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //feedback -->