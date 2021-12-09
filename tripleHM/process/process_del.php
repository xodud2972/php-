<?php
include_once('../db/db.php');
?>

<?php
	$sql='
	SELECT * FROM people WHERE people_id='.$_GET['id']
	;

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);

	$del_file="../uploads/".$row['file'];

	echo $del_file;

	if($row['file'] &&is_file($del_file)){
	 unlink($del_file);
	}
	$sqldel='
	DELETE FROM people WHERE people_id='.$_GET['id']
	;
	mysqli_query($conn,$sqldel);

?>


<?php  

$query = 'DELETE FROM people 
	WHERE 
		people_id = ' .$_GET['id'];
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

?>


<script type="text/javascript">
alert("Successfully Deleted with Image File.");
window.location = "../view/index.php";

</script>