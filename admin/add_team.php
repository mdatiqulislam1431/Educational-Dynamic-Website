    <?php include "inc/header_top.php"; ?>
    <?php include "inc/about-mobile-menu.php"; ?> 

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Add Team</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">About</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">add team</span>
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
                                <h1><mark style="background-color: blue; color: white;">Add Team</mark></h1> 
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
                
            $name =mysqli_real_escape_string($db->link, $_POST['name']);
            $title =mysqli_real_escape_string($db->link, $_POST['title']);
            $category =mysqli_real_escape_string($db->link, $_POST['category']);



            $permited  = array('jpg', 'jpeg', 'png', 'gif','jfif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];





            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;


                 if ($name== "") {
                     $n="Please fill name field";
                 }elseif ($title == "") {
                     $n="please fill title field";
                 }elseif ($category == "") {
                     $n="please fill number field";
                 }elseif ($file_size >1048567) {
                 echo "<span class='error'>Image Size should be less then 1MB!
                 </span>";
                 } elseif (in_array($file_ext, $permited) === false) {
                 echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
                }else{

                          move_uploaded_file($file_temp, $uploaded_image);
                    $query="INSERT INTO  tbl_team(name, title, category, image) VALUES('$name', '$title', '$category', '$uploaded_image')";

                      $team_upload = $db->insert($query);

                      if ($team_upload) {
                          $m="Teams info uploaded successfully!";
                      }else{
                          $n="Teams info not uploaded! try again.";
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
                                <label>Team Name:</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Team Title:</label>
                                <input name="title" type="text" class="form-control">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Team Category:</label>
                                <select name="category" class="form-control">
                                    <option value="">Select category</option>
                                    <option value="Name_1">Name_1</option>
                                    <option value="Name_2">Name_2</option>
                                    <option value="Name_3">Name_3</option>
                                    <option value="Name_4">Name_4</option>
                                </select>
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Team Image:</label>
                                <input name="image" type="file" class="form-control">
                            </div>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="payment-adress">
                                <button type="submit" style="border-radius: 20px;" class="btn btn-danger waves-effect waves-light btn-block btn-lg">Submit</button>
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
