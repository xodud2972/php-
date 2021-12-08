
<?php

include_once('../db/db.php');  


$query = 'DELETE FROM people 
	WHERE 
		people_id = ' .$_GET['id'];
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

?>

<script type="text/javascript">
alert("Successfully Deleted.");
window.location = "../view/index.php";
</script>