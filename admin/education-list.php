

    <?php include "inc/header_top.php"; ?>
    <?php include "inc/mobile_menu.php"; ?>

    
<!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Education list</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Dashboad</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Education list</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->


    <!-- Data table area Start-->
    <div class="admin-dashone-data-table-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1><mark style="background-color: blue; color: white;">Eduction list</mark></h1> 
                              <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                </div> 
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                
                                

                            

<div class="row">
    <div class="col-md-1"></div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
<div class="product-payment-inner-st">
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">

        
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th width="15%" scope="col">Title</th>
      <th width="30%" scope="col">Content</th>
      <th scope="col">Course Column</th>
      <th width="15%" scope="col">Action</th>
    </tr>
  </thead>

<?php 
        $query="SELECT * FROM tbl_design ";
         $design=$db->select($query);
           if ($design) {
            $i = 1;
                while ($result=$design->fetch_assoc()) {

?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $fm->textShorten($result['title'],20); ?></td>
      <td><?php echo $fm->textShorten($result['content'],70); ?></td>
      <td><?php echo $fm->textShorten($result['course_column'],20); ?></td>
      <td><a style="color: green;" target="_blank" href="edit_education.php?edit_id=<?php echo $result['id']; ?>">Edit</a>
       ||
        <a style="color: red;" onclick="return confirm('Ary you sure Delete This information');" href="delete_education.php?del_id=<?php echo $result['id']; ?>" >Delete</a></td>
    </tr>
  </tbody>
<?php } } ?>

</table>
        


            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="col-md-1"></div>
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