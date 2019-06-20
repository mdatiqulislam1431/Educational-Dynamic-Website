<?php  include '../library/config.php'; ?>
<?php  include '../library/database.php'; ?>
<?php  include '../library/helper.php'; ?>

<?php 
        $db= new Database();
        $fm= new Format();
?>
 
<?php 

		$id=$_GET['del_id'];
		$n="";

		$query="DELETE FROM tbl_design where id='$id'";
		 $course_delete=$db->delete($query);
		   if ($course_delete) {
		   	  $n="your information delete successfully!";
		   }else{
		   	  $n="unsuccess!";
		   }


	  header('location:education-list.php')

?>