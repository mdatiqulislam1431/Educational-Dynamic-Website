<!-- about -->
	<div class="agile-about w3ls-section text-center" id="about">
		<div class="container">

<?php 
		$query="SELECT * FROM tbl_welcome ORDER BY id DESC limit 1";
		 $wel_education=$db->select($query);
		   if ($wel_education) {
		   	  while ($result=$wel_education->fetch_assoc()) {

?>
		<h3 class="heading-agileinfo"><?php echo $result['title']; ?><span><?php echo $result['sub_title']; ?></span></h3>
			<div class="agileits-about-grid">
				<p><?php echo $result['content']; ?></p>
			</div>
<?php } } ?>

		</div>
	</div>
	<!-- //about -->