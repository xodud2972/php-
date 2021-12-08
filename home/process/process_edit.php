<?php

    include_once('../db/db.php');           

    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mname = $_POST['Middlename'];
    $ads = $_POST['Address'];
    $ctt = $_POST['Contact'];
    $cmt = $_POST['comment'];
    $filename = $_FILES['files']['name'];

    // print_r($_FILES['files']['name']);
    // echo $filename[0];
    // echo $filename[1];
    // exit;

	$filearray = array();
	for($i=0; $i<count($filename);$i++){
		array_push($filearray, $filename[$i]);
	}

    $query = 'UPDATE people SET 
        first_name = "'.$fname.'",
        last_name = "'.$lname.'",
        mid_name = "'.$mname.'",
        address = "'.$ads.'",
        contact = "'.$ctt.'",
        comment = "'.$cmt.'",
        file = "'.$filearray[0].'"
            WHERE people_id ="'.$id.'"
    ';

//filearray 를 array가아닌 각각의 value 값을 넣도록 변환
    
//die($query); 
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));


?>

<script type="text/javascript">
    alert("Successfully Update.");
    window.location = "../view/index.php";
</script>