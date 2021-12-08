<?php
include_once('../db/db.php');    

$fname = $_POST['firstname'];
if(!isset($fname)){
    
}
$lname = $_POST['lastname'];
$mname = $_POST['Middlename'];
$ads = $_POST['Address'];
$ctt = $_POST['Contact'];
$cmt = $_POST['comment'];

$filename = $_FILES['files']['name'];
json_encode($filename);
$filepath = "../uploads";

        $tmp_name = $_FILES["files"]["tmp_name"];
        $name = basename($_FILES["files"]["name"]);
        move_uploaded_file($tmp_name, "$filepath/$name");
  

$query = "INSERT INTO people
            (first_name, last_name, mid_name, address, contact, comment, file)
            VALUES ('" . $fname . "','" . $lname . "','" . $mname . "','" . $ads . "','" . $ctt . "','" . $cmt . "','" . $filename . "')";

mysqli_query($conn, $query) or die('에러입니다');
?>

<script type="text/javascript">
    alert("새로운 회원이 등록되었습니다.");
    window.location = "../view/index.php";
</script>