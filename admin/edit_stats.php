

    <?php include "inc/header_top.php"; ?>
    <?php include "inc/mobile_menu.php"; ?>
    
        

<!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Edit stats</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Dashboad</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Edit stats</span>
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
                                <h1><mark style="background-color: blue; color: white;">Edit Stats</mark></h1>
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
                
            $num =mysqli_real_escape_string($db->link, $_POST['num']);
            $category =mysqli_real_escape_string($db->link, $_POST['category']);


                 if ($num== "") {
                     $n="Please fill number field";
                 }elseif ($category == "") {
                     $n="You didn't field category field";
                 }else{

                          
                    $query="UPDATE tbl_state
                                 SET
                               num = '$num', 
                               category = '$category'

                                 where 
                                id='$id'

                                 ";

                      $stats_update = $db->update($query);

                      if ($stats_update) {
                          $m="Stats info update successfully!";
                      }else{
                          $n="Stats info not update! try again.";
                      }
                 }


            }

        ?>

        <form id="add-department" action="#" method="POST" class="add-department" enctype="multipart/form-data">

<?php 

        $query="SELECT * FROM tbl_state where id='$id'";
         $edit_state=$db->select($query);
           if ($edit_state) {
                $result=$edit_state->fetch_assoc()

?>

            <p style="text-align: center;color: #cc0101;letter-spacing: 2px;"><?php echo $n; ?></p>
                    <p style="text-align: center; color: green;letter-spacing: 2px"><?php echo $m; ?></p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>State Number:</label>
                                <input name="num" value="<?php echo $result['num']; ?>" type="text" class="form-control">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>State category:</label>
                                <select name="category" class="form-control">

                                    <option value="<?php echo $result['category']; ?>"><?php echo $result['category']; ?></option>


                                </select>
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