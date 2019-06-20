    <?php include "inc/header_top.php"; ?>
    <?php include "inc/gallery-mobile-menu.php"; ?>

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Add gallery</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Gallery</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">add gallery</span>
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
                                <h1><mark style="background-color: blue; color: white;">Add Gallery</mark></h1> 
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
                $n="";
                $m="";

    if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
                
        $title =mysqli_real_escape_string($db->link, $_POST['title']);
        $sub_title =mysqli_real_escape_string($db->link, $_POST['sub_title']);
        $category =mysqli_real_escape_string($db->link, $_POST['category']);


            $permited  = array('jpg', 'jpeg', 'png', 'gif','jfif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $permited  = array('jpg', 'jpeg', 'png', 'gif','jfif');
            $file_name = $_FILES['images']['name'];
            $file_size = $_FILES['images']['size'];
            $file_temp = $_FILES['images']['tmp_name'];



            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_images = "uploads/".$unique_image;

                 if ($title== "") {
                     $n="Please fill title field";
                 }elseif ($sub_title == "") {
                     $n="please fill sub_title field";
                 }elseif ($category == "") {
                     $n="You didn't field category field";
                 }elseif ($file_size >1048567) {
                 echo "<span class='error'>Image Size should be less then 1MB!
                 </span>";
                 } elseif (in_array($file_ext, $permited) === false) {
                 echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
                }elseif ($file_size >1048567*2) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                 } elseif (in_array($file_ext, $permited) === false) {
                 echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
                }else{

                          move_uploaded_file($file_temp, $uploaded_image);
                          move_uploaded_file($file_temp, $uploaded_images);

                    $query="INSERT INTO  tbl_gallery(title, sub_title, image, images, category) VALUES('$title', '$sub_title', '$uploaded_image', '$uploaded_images', '$category')";

                      $gallery_upload = $db->insert($query);

                      if ($gallery_upload) {
                          $m="Gallery info uploaded successfully!";
                      }else{
                          $n="Gallery info not uploaded! try again.";
                      }
                 }


            }

        ?>

        <form id="add-department" action="#" method="POST" class="add-department" enctype="multipart/form-data">

            <p style="text-align: center;color: #cc0101;letter-spacing: 2px;"><?php echo $n; ?></p>
                    <p style="text-align: center; color: green;letter-spacing: 2px"><?php echo $m; ?></p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Title:</label>
                                <input name="title" type="text" class="form-control" placeholder="Enter title here">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Sub_title:</label>
                                <input name="sub_title" type="text" class="form-control" placeholder="Enter sub_title here">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Category:</label>
                                <select name="category" class="form-control">
                                    <option value="">Select category</option>
                                    <option value="number_1">number_1</option>
                                    <option value="number_2">number_2</option>
                                    <option value="number_3">number_3</option>
                                    <option value="number_4">number_4</option>
                                    <option value="number_5">number_5</option>
                                    <option value="number_6">number_6</option>
                                    <option value="number_7">number_7</option>
                                    <option value="number_8">number_8</option>
                                    <option value="number_9">number_9</option>
                                </select>
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Caption Image:</label>
                                <input name="image" type="file" class="form-control">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Gallery Image:</label>
                                <input name="images" type="file" class="form-control">
                            </div>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="payment-adress">
                                <button type="submit" style="border-radius: 20px;" class="btn btn-danger waves-effect waves-light btn-block btn-lg">Upload</button>
                            </div>
                        </div>
                    </div>
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
