   
    <?php include "inc/header_top.php"; ?>
    <?php include "inc/mobile_menu.php"; ?>

    


    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Edit testimonial</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Dashboad</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Edit testimonial</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->



    <div class="admin-dashone-data-table-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1><mark style="background-color: blue; color: white;">Edit Testimonial</mark></h1> 
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                </div> 
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                
                                

                            

<div class="row">
<div class="col-md-2"></div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<div class="product-payment-inner-st">
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">

        <?php 

              $id=$_GET['edit_id'];
                $n="";
                $m="";

         if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
                
            $title =mysqli_real_escape_string($db->link, $_POST['title']);
            $sub_title =mysqli_real_escape_string($db->link, $_POST['sub_title']);
            $feedback =mysqli_real_escape_string($db->link, $_POST['feedback']);
            $content =mysqli_real_escape_string($db->link, $_POST['content']);


            $permited  = array('jpg', 'jpeg', 'png', 'gif','jfif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];





            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;


                 if ($title== "") {
                     $n="Please fill title field";
                 }elseif ($sub_title == "") {
                     $n="please fill sub_title field";
                 }elseif ($feedback == "") {
                     $n="You didn't field feedback field";
                 }elseif ($content == "") {
                     $n="You didn't field content field";
                 }elseif ($file_size >1048567) {
                 echo "<span class='error'>Image Size should be less then 1MB!
                 </span>";
                 } elseif (in_array($file_ext, $permited) === false) {
                 echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
                }else{

                          move_uploaded_file($file_temp, $uploaded_image);
                    $query="UPDATE tbl_testimonial
                                SET
                               title = '$title', 
                               sub_title = '$sub_title', 
                               content = '$content', 
                               images = '$uploaded_image', 
                               feedback = '$feedback'
                                    
                                      where
                                      id='$id'

                                        ";

                      $testimonial_update = $db->update($query);

                      if ($testimonial_update) {
                          $m="Testimonial info update successfully!";
                      }else{
                          $n="Testimonial info not update! try again.";
                      }
                 }


            }

        ?>

        <form id="add-department" action="#" method="POST" class="add-department" enctype="multipart/form-data">

    <?php 
            $query="SELECT * FROM  tbl_testimonial WHERE id='$id'";
             $edit_testimonial=$db->select($query);
              if ($edit_testimonial) {
                   $result=$edit_testimonial->fetch_assoc()
    ?>

            <p style="text-align: center;color: #cc0101;letter-spacing: 2px;"><?php echo $n; ?></p>
                    <p style="text-align: center; color: green;letter-spacing: 2px"><?php echo $m; ?></p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Testimonial Title:</label>
                                <input name="title" value="<?php echo $result['title']; ?>" type="text" class="form-control">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Testimonial Sub-title:</label>
                                <input name="sub_title" value="<?php echo $result['sub_title']; ?>" type="text" class="form-control">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Testimonial Feedback:</label>
                                <select name="feedback" class="form-control">

                                    <option value="<?php echo $result['feedback']; ?>"><?php echo $result['feedback']; ?></option>

                                </select>
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Testimonial Content:</label>
                                <textarea class="form-control" name="content" cols="30" rows="6"><?php echo $result['content']; ?></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <img style="width: 20%;height: 20%;" src="<?php echo $result['images']; ?>" alt=""><br>
                                <label>Testimonial Image:</label>
                                <input name="image" type="file" class="form-control">
                            </div>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="payment-adress">
                                <button type="submit" style="border-radius: 20px;" class="btn btn-danger waves-effect waves-light btn-block btn-lg">Update</button>
                            </div>
                        </div>
                    </div>
    <?php } ?>
                </form>
                <br><br>


            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data table area End-->
        <?php include "inc/footer.php"; ?>
