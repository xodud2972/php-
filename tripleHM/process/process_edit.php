<?php

    include_once('../db/db.php');           

    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mname = $_POST['Middlename'];
    $ads = $_POST['Address'];
    $ctt = $_POST['Contact'];
    $cmt = $_POST['comment'];	

    // print_r($_FILES['files']['name']);

    $filename = $_FILES['files']['name'];
	$tmp_name = $_FILES["files"]["tmp_name"];

	json_encode($filename);
	$filepath = "../uploads";
	
	move_uploaded_file($tmp_name, "$filepath/$filename");
	
    $query = 'UPDATE people SET 
        first_name = "'.$fname.'",
        last_name = "'.$lname.'",
        mid_name = "'.$mname.'",
        address = "'.$ads.'",
        contact = "'.$ctt.'",
        comment = "'.$cmt.'",
        file = "'.$filename.'"
            WHERE people_id ="'.$id.'"
    ';
//filearray 를 array가아닌 각각의 value 값을 넣도록 변환
    
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));


?>

<script type="text/javascript">
    alert("Successfully Update.");
    window.location = "../view/index.php";
</script>