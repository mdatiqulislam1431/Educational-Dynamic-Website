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
		$query="DELETE FROM tbl_slider where id='$id' ";
		  $delette=$db->delete($query);
		    if ($delette) {
		    	$n="slider delete successfully!";
		    }else{
		    	$n="unsuccess! try again";
		    }

		header('location:slider-list.php')

?>