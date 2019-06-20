

    <?php include "inc/header_top.php"; ?>
    <?php include "inc/services_mobile_menu.php"; ?>
    
        

<!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Add Offer</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Service</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Add Offer</span>
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
                                <h1><mark style="background-color: blue; color: white;">Add Offer</mark></h1>
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
                $category =mysqli_real_escape_string($db->link, $_POST['category']);
                $content =mysqli_real_escape_string($db->link, $_POST['content']);



                 if ($title== "") {
                     $n="Please fill title field";
                 }elseif ($category == "") {
                     $n="You didn't field category field";
                 }elseif ($content == "") {
                     $n="You didn't field content field";
                 }else{

                        
                    $query="INSERT INTO   tbl_offer(title, category, content) VALUES('$title', '$category', '$content')";

                      $add_offer = $db->insert($query);

                      if ($add_offer) {
                          $m="Offers info uploaded successfully!";
                      }else{
                          $n="Offers info not uploaded! try again.";
                      }
                 }


            }

        ?>

        <form id="add-department" action="#" method="POST" class="add-department">

            <p style="text-align: center;color: #cc0101;letter-spacing: 2px;"><?php echo $n; ?></p>
                    <p style="text-align: center; color: green;letter-spacing: 2px"><?php echo $m; ?></p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Title:</label>
                                <input name="title" type="text" class="form-control" placeholder="Enter title here..">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Category:</label>
                                 <select name="category" class="form-control">
                                     <option value="">Select category</option>
                                     <option value="digit_1">digit_1</option>
                                     <option value="digit_2">digit_2</option>
                                     <option value="digit_3">digit_3</option>
                                 </select>
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Content:</label>
                                <textarea placeholder="Enter content here.." class="form-control" name="content" cols="30" rows="10"></textarea>
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
    <?php  include "inc/footer.php"; ?>