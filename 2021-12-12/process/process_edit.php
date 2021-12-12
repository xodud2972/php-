<?php

use function PHPSTORM_META\type;

include_once('../db/db.php');           

    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mname = $_POST['Middlename'];
    $ads = $_POST['Address'];
    $ctt = $_POST['Contact'];
    $cmt = $_POST['comment'];	

    $filename = $_FILES['files']['name'];
    $count = count($filename);
    $filepath = "../uploads";

for($i=0; $i<$count; $i++){
    $tmp_name = $_FILES["files"]["tmp_name"][$i];
    $name = basename($_FILES["files"]["name"][$i]);
    move_uploaded_file($tmp_name, "$filepath/$name");
}

//file명 출력,, 이걸 어떻게 쿼리에 넣지..
    foreach ($filename as $val ){
        echo ( "파일명: " . $val . "<br>" );
    }


// file = '".json_encode($filename)."'

$query = "UPDATE people SET 
            first_name = '".$fname."',
            last_name = '".$lname."',
            mid_name = '".$mname."',
            address = '".$ads."',
            contact = '".$ctt."',
            comment = '".$cmt."',
            file = '".json_encode($filename)."'
                WHERE people_id ='".$id."'
";



$result = mysqli_query($conn,$query) or die(mysqli_error($conn));


?>

<script type="text/javascript">
    alert("Successfully Update.");
    window.location = "../view/index.php";
</script>