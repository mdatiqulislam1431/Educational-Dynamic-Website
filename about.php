
	<?php include "inc/header_ban.php"; ?>

	<!-- about -->
	<div class="welcome">
		<div class="container">
<?php 
		$query="SELECT * FROM  tbl_about ORDER BY id DESC limit 1";
		  $about_us=$db->select($query);
		    if ($about_us) {
		    	while ($result=$about_us->fetch_assoc()) {

?>

		<h3 class="heading-agileinfo">About Us<span>When Climbing The Carrer Ladder</span></h3>
			<div class="w3ls_news_grids"> 
				<div class="col-md-6 w3_agile_about_grid_left">
					<h3>
						<?php echo $result['title']; ?>
					</h3>
					<p>
						<i>
							<?php echo $result['sub_title']; ?>
						</i>
						<?php echo $result['content']; ?>
						
					</p>
				</div>

 <?php } } ?>
				<div class="col-md-6 w3_agile_about_grid_right">
					<div class="skillbar" data-percent="78">
					  <span class="skillbar-title" style="background: #f1703a;">Lorem</span>
					  <p class="skillbar-bar" style="background: #f88c5e;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="54">
					  <span class="skillbar-title" style="background: #2980b9;">Ipsum</span>
					  <p class="skillbar-bar" style="background: #3498db;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="76">
					  <span class="skillbar-title" style="background: #a0d034;">Tortor</span>
					  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
					
					<div class="skillbar" data-percent="80">
					  <span class="skillbar-title" style="background: #e7cc2c;">Odio</span>
					  <p class="skillbar-bar" style="background: #f5d410;"></p>
					  <span class="skill-bar-percent"></span>
					</div>
					<!-- End Skill Bar -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<?php 
		$query="SELECT * FROM  tbl_about_bottom ORDER BY id DESC limit 1";
		  $about_us=$db->select($query);
		    if ($about_us) {
		    	while ($result=$about_us->fetch_assoc()) {

?>
	<div class="about-w3slid jarallax">
		<div class="subscribe-agileinfo"> 
			<div class="container">  
				<h3><?php echo $result['title']; ?></h3>
				<p><?php echo $result['content']; ?></p> 
			</div>
		</div>
	</div>
<?php } } ?>	
<!-- team -->
	<div class="team">
		<div class="container">
		<h3 class="heading-agileinfo">Meet Our Staff<span>When Climbing The Carrer Ladder</span></h3>
			<div class="w3_agile_team_grids">
				<div class="col-md-3 w3_agile_team_grid">

<?php 
     $query="SELECT * FROM tbl_team where category='Name_1' order by id desc limit 1";
      $team_name=$db->select($query);
        if ($team_name) {
           while ($result=$team_name->fetch_assoc()) {

?>
					<div class="hover14 column">
						<figure><img src="admin/<?php echo $result['image']; ?>" alt=" " class="img-responsive" /></figure>
					</div>
					<h3><?php echo $result['name']; ?></h3>
					<p><?php echo $result['title']; ?></p>
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
<?php } } ?>

				</div>
				<div class="col-md-3 w3_agile_team_grid">

<?php 
     $query="SELECT * FROM tbl_team where category='Name_2' order by id desc limit 1";
      $team_name=$db->select($query);
        if ($team_name) {
           while ($result=$team_name->fetch_assoc()) {

?>
					<div class="hover14 column">
						<figure><img src="admin/<?php echo $result['image']; ?>" alt=" " class="img-responsive" /></figure>
					</div>
					<h3><?php echo $result['name']; ?></h3>
					<p><?php echo $result['title']; ?></p>
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>

	<?php } } ?>	
				</div>
				<div class="col-md-3 w3_agile_team_grid">

<?php 
     $query="SELECT * FROM tbl_team where category='Name_3' order by id desc limit 1";
      $team_name=$db->select($query);
        if ($team_name) {
           while ($result=$team_name->fetch_assoc()) {

?>
					<div class="hover14 column">
						<figure><img src="admin/<?php echo $result['image']; ?>" alt=" " class="img-responsive" /></figure>
					</div>
					<h3><?php echo $result['name']; ?></h3>
					<p><?php echo $result['title']; ?></p>
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
	<?php } } ?>	

				</div>
				<div class="col-md-3 w3_agile_team_grid">

<?php 
     $query="SELECT * FROM tbl_team where category='Name_4' order by id desc limit 1";
      $team_name=$db->select($query);
        if ($team_name) {
           while ($result=$team_name->fetch_assoc()) {

?>
					<div class="hover14 column">
						<figure><img src="admin/<?php echo $result['image']; ?>" alt=" " class="img-responsive" /></figure>
					</div>
					<h3><?php echo $result['name']; ?></h3>
					<p><?php echo $result['title']; ?></p>
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>

	<?php } } ?>			
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- team -->

	<?php include "inc/footer.php"; ?>