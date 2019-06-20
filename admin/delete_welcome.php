<?php  include '../library/config.php'; ?>
<?php  include '../library/database.php'; ?>
<?php  include '../library/helper.php'; ?>

<?php 
        $db= new Database();
        $fm= new Format();
?>
 

 <?php 
 		$id=$_GET['del_id'];

 	$query2="DELETE FROM tbl_welcome where id='$id'";
 	 $delette=$db->delete($query2);
 	   if ($delette) {
 	   	  $n="Your information delete successfully!";
 	   }

 	  header('location:welcome_list.php')

 ?>