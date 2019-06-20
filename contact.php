

		<?php include "inc/header_ban.php"; ?>

		<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<h3 class="heading-agileinfo">Contact Us<span>When Climbing The Carrer Ladder</span></h3>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-4 agile_info_mail_img_info">
					<div class="address-grid">
						<h4>Contact <span>Info</span></h4>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Telephone </p><span>+1 (100)222-23-33</span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Mail </p><a href="mailto:info@example.com">info@example.com</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Location</p><span>8088 USA, Honey block,New York City.</span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agileits_w3layouts_nav_right contact">
							<div class="social two">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 agile_info_mail_img">

				</div>
				<div class="clearfix"> </div>


        <?php 
                $n="";
                $m="";

        if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
                
            $name =mysqli_real_escape_string($db->link, $_POST['name']);
            $email =mysqli_real_escape_string($db->link, $_POST['email']);
            $phone =mysqli_real_escape_string($db->link, $_POST['phone']);
            $subject =mysqli_real_escape_string($db->link, $_POST['subject']);
            $message =mysqli_real_escape_string($db->link, $_POST['message']);



                 if ($name== "") {
                     $n="Please fill name field";
                 }elseif ($email == "") {
                     $n="You didn't field email field";
                 }elseif ($phone == "") {
                     $n="You didn't field phone field";
                 }elseif ($subject == "") {
                     $n="You didn't field subject field";
                 }elseif ($message == "") {
                     $n="You didn't field message field";
                 }else{

                        
                    $query="INSERT INTO  tbl_contact(name, email, phone, subject, message) VALUES('$name', '$email', '$phone', '$subject', '$message')";

                      $Contact = $db->insert($query);

                      if ($Contact) {
                          $m="Contact info uploaded successfully!";
                      }else{
                          $n="Contact info not uploaded! try again.";
                      }
                 }


            }

        ?>





	<div class="w3layouts_mail_grid">
					<form action="#" method="post">

						<p style="text-align: center; color: red;"><?php echo $n; ?></p>
						<p style="text-align: center; color: green;"><?php echo $m; ?></p>
							<br>
						  <div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="name" placeholder="Enter name here..">
							<input type="email" name="email" placeholder="Enter email here..">
							<input type="text" name="phone" placeholder="Enter number here..">
							<input type="text" name="subject" placeholder="Enter subject here..">
						   </div>
						   <div class="col-md-6 wthree_contact_left_grid">
							<textarea name="message" placeholder="Enter message here.."></textarea>
							<input type="submit" value="Submit">
						   </div>
						<div class="clearfix"> </div>

					</form>
				</div>


			</div>

		</div>
	</div>
	<!-- //mid-services -->
	<!-- /map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
		    style="border:0"></iframe>

	</div>
	<!-- //map -->

	<!-- //inner_content -->
	<?php include "inc/footer.php"; ?>