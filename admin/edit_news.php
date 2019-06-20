    <?php include "inc/header_top.php"; ?>
    <?php include "inc/mobile_menu.php"; ?>
    
    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Edit news</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Dashboad</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">edit news</span>
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
                                <h1><mark style="background-color: blue; color: white;">Edit news</mark></h1> 
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
            $dat =mysqli_real_escape_string($db->link, $_POST['dat']);
            $category =mysqli_real_escape_string($db->link, $_POST['category']);
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
                 }elseif ($dat == "") {
                     $n="please fill dat field";
                 }elseif ($category == "") {
                     $n="You didn't field category field";
                 }elseif ($content == "") {
                     $n="You didn't field content field";
                 }elseif ($file_size >1048567) {
                 echo "<span class='error'>Image Size should be less then 1MB!
                 </span>";
                 } elseif (in_array($file_ext, $permited) === false) {
                 echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
                }else{

                          move_uploaded_file($file_temp, $uploaded_image);
                    $query="UPDATE tbl_news
                            SET

                           title = '$title', 
                           dat = '$dat', 
                           content = '$content', 
                           image = '$uploaded_image', 
                           category = '$category'
                                
                                where
                               id= $id

                               ";

                      $news_update = $db->update($query);

                      if ($news_update) {
                          $m="News info update successfully!";
                      }else{
                          $n="News info not update! try again.";
                      }
                 }


            }

        ?>





        <form id="add-department" action="#" method="POST" class="add-department" enctype="multipart/form-data">


  <?php 
        $query="SELECT * FROM tbl_news where id='$id'";
          $news_updat=$db->select($query);
           if ($news_updat) {
                 $result=$news_updat->fetch_assoc()

  ?>
            <p style="text-align: center;color: #cc0101;letter-spacing: 2px;"><?php echo $n; ?></p>
                    <p style="text-align: center; color: green;letter-spacing: 2px"><?php echo $m; ?></p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>News Title:</label>
                                <input name="title" value="<?php echo $result['title']; ?>" type="text" class="form-control">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>News Date:</label>
                                <input name="dat" value="<?php echo $result['dat']; ?>" type="date" class="form-control">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>News Category:</label>
                                <select  name="category" class="form-control">



                                    <option value="<?php echo $result['category']; ?>"><?php echo $result['category']; ?></option>



                                </select>
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>News Content:</label>
                                <textarea class="form-control" name="content" cols="30" rows="10"><?php echo $result['content']; ?></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <img style="width: 20%;height: 20%;" src="<?php echo $result['image']; ?>" alt="">
                                <br>
                                <label>News Image:</label>
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
