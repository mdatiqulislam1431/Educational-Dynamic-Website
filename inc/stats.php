<!-- stats -->
	<div class="stats">
		<div class="container">
		<h3 class="heading-agileinfo">Our Stats<span class="ttt">When Climbing The Carrer Ladder </span></h3>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
				<span class="fa fa-graduation-cap" aria-hidden="true"></span>
				<h3>Graduates</h3>
	<?php 
		$query="SELECT * FROM tbl_state WHERE category='number_1' ORDER BY id DESC limit 1";
		$our_state=$db->select($query);
		  if ($our_state) {
		  	  while ($result=$our_state->fetch_assoc()) {
	?>
				<p class="counter"><?php echo $result['num']; ?></p>
	<?php } } ?>
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
				<span class="fa fa-user" aria-hidden="true"></span>
				<h3>Certified Staff</h3>
	<?php 
		$query="SELECT * FROM tbl_state WHERE category='number_2' ORDER BY id DESC limit 1";
		$our_state=$db->select($query);
		  if ($our_state) {
		  	  while ($result=$our_state->fetch_assoc()) {
	?>
				<p class="counter"><?php echo $result['num']; ?></p>

	<?php } } ?>			
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
				<span class="fa fa-users" aria-hidden="true"></span>
				<h3>Student</h3>
	<?php 
		$query="SELECT * FROM tbl_state WHERE category='number_3' ORDER BY id DESC limit 1";
		$our_state=$db->select($query);
		  if ($our_state) {
		  	  while ($result=$our_state->fetch_assoc()) {
	?>
				<p class="counter"><?php echo $result['num']; ?></p>
	<?php } } ?>			
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
				<span class="fa fa-trophy" aria-hidden="true"></span>
				<h3>Awards</h3>
    <?php 
		$query="SELECT * FROM tbl_state WHERE category='number_4' ORDER BY id DESC limit 1";
		$our_state=$db->select($query);
		  if ($our_state) {
		  	  while ($result=$our_state->fetch_assoc()) {
	?>
				<p class="counter"><?php echo $result['num']; ?></p>
	<?php } } ?>		
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //stats -->