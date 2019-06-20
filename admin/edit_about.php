

    <?php include "inc/header_top.php"; ?>
    <?php include "inc/about-mobile-menu.php"; ?>
    
        

<!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Edit About</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">About</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Edit about</span>
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
                                <h1><mark style="background-color: blue; color: white;">Edit About</mark></h1>
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
                $content =mysqli_real_escape_string($db->link, $_POST['content']);



                 if ($title== "") {
                     $n="Please fill title field";
                 }elseif ($sub_title == "") {
                     $n="You didn't field sub_title field";
                 }elseif ($content == "") {
                     $n="You didn't field content field";
                 }else{

                        
                    $query="UPDATE tbl_about
                            SET
                         title = '$title', 
                         sub_title = '$sub_title', 
                         content = '$content'

                                WHERE

                                id='$id'

                                ";

                      $edit_about = $db->update($query);

                      if ($edit_about) {
                          $m="about info update successfully!";
                      }else{
                          $n="about info not update! try again.";
                      }
                 }


            }

        ?>

        <form id="add-department" action="#" method="POST" class="add-department">
    <?php 
        $query="SELECT * FROM tbl_about where id='$id'";
          $edit_about_us=$db->select($query);
            if ($edit_about_us) {
                 $result=$edit_about_us->fetch_assoc()

    ?>
            <p style="text-align: center;color: #cc0101;letter-spacing: 2px;"><?php echo $n; ?></p>
                    <p style="text-align: center; color: green;letter-spacing: 2px"><?php echo $m; ?></p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Title:</label>
                                <input name="title" value="<?php echo $result['title']; ?>" type="text" class="form-control" placeholder="Enter title here..">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Sub_title:</label>
                            <input value="<?php echo $result['sub_title']; ?>" class="form-control" placeholder="Enter sub_title here.." type="text" name="sub_title">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Content:</label>
                                <textarea placeholder="Enter content here.." class="form-control" name="content" cols="30" rows="10"><?php echo $result['content']; ?></textarea>
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
    <?php  include "inc/footer.php"; ?>