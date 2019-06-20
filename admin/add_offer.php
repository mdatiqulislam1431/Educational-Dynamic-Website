

    <?php include "inc/header_top.php"; ?>
    <?php include "inc/mobile_menu.php"; ?>
    
        

<!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Add offer</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Dashboad</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">add offer</span>
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
                                <h1><mark style="background-color: blue; color: white;">Add Offers</mark></h1>
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
            $content =mysqli_real_escape_string($db->link, $_POST['content']);
            $icon_category =mysqli_real_escape_string($db->link, $_POST['icon_category']);


                 if ($title== "") {
                     $n="Please fill title field";
                 }elseif ($content == "") {
                     $n="You didn't field content field";
                 }elseif ($icon_category == "") {
                     $n="You didn't field icon_category field";
                 }else{

                          
                    $query="INSERT INTO  what_we_offer(title, content, icon_category) VALUES('$title', '$content', '$icon_category')";

                      $offer_upload = $db->insert($query);

                      if ($offer_upload) {
                          $m="Slide info uploaded successfully!";
                      }else{
                          $n="Slide info not uploaded! try again.";
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
                                <label>Offers Title:</label>
                                <input name="title" type="text" class="form-control">
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Offers category:</label>
                                <select name="icon_category" class="form-control">
                                    <option value="">Select Icon</option>
                                    <option value="fa fa-graduation-cap">cap</option>
                                    <option value="fa fa-book">book</option>
                                    <option value="fa fa-tasks">tasks</option>
                                    <option value="fa fa-comment-o">comment</option>
                                    <option value="fa fa-bookmark-o">bookmark</option>
                                    <option value="fa fa-globe">globe</option>

                                </select>
                            </div>
                        
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group text-left">
                                <label>Offers Content:</label>
                                <textarea class="form-control" name="content" cols="30" rows="10"></textarea>
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
    <?php  include "inc/footer.php"; ?>