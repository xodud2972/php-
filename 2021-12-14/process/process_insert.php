<!-- 
	add.php인 회원추가 페이지에서 입력한 데이터를 insert 하기 위한 코드입니다.
    create by 엄태영 2021.12.16
-->
<?php
include_once('../db/db.php');    

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$midName = $_POST['Middlename'];
$ads = $_POST['Address'];
$ctt = $_POST['Contact'];
$cmt = $_POST['comment'];
$fileName = $_FILES['files']['name'];
$fileName2 = $_FILES['files2']['name'];
$FILE_Count = count($fileName);
$filePath = "../uploads";

for($i=0; $i<$FILE_Count; $i++){
    $tmp_Name = $_FILES["files"]["tmp_name"][$i];
    $tmp_Name2 = $_FILES["files2"]["tmp_name"][$i];
    $name = basename($_FILES["files"]["name"][$i]);
    $name2 = basename($_FILES["files2"]["name"][$i]);
    move_uploaded_file($tmp_Name, "$filePath/$name");
    move_uploaded_file($tmp_Name2, "$filePath/$name2");
}
    $query = "INSERT INTO people
            (first_name, last_name, mid_name, address, contact, comment, file, file2)
            VALUES ('" . $firstName . "','" . $lastName . "','" . $midName . "','" . $ads . "','" . $ctt . "','" . $cmt . "', '$fileName[0]', '$fileName2[0]')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
?>





