<?php

    include_once('../db/db.php');           

    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mname = $_POST['Middlename'];
    $ads = $_POST['Address'];
    $ctt = $_POST['Contact'];
    $cmt = $_POST['comment'];
    $filename = $_FILES['file']['name'];

// filename 자체가 type 이 array 로 들어온다. 파일 1개를 입력해도 Array 로 찍힌다.

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
 
    die($query);
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

?>

<script type="text/javascript">
    alert("Successfully Update.");
    window.location = "../view/index.php";
</script>