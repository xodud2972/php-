<!-- 
	edit.php인 회원수정 페이지에서 해당 데이터를 UPDATE 하기 위한 코드입니다.
    create by 엄태영 2021.12.16
-->
<?php
function EditUser(){
    include_once('../db/db.php');           

    $id = $_POST['id'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $mid_Name = $_POST['Middlename'];
    $ads = $_POST['Address'];
    $ctt = $_POST['Contact'];
    $cmt = $_POST['comment'];	
    $fileName = $_FILES['files']['name'];
    $fileName2 = $_FILES['files2']['name'];
    $FILE_COUNT = count($fileName);
    $filePath = "../uploads";
    
    for($i=0; $i<$FILE_COUNT; $i++){

        $tmp_Name = $_FILES["files"]["tmp_name"][$i];
        $tmp_Name2 = $_FILES["files2"]["tmp_name"][$i];

        $name = basename($_FILES["files"]["name"][$i]);
        $name2 = basename($_FILES["files2"]["name"][$i]);

        move_uploaded_file($tmp_Name, "$filePath/$name");
        move_uploaded_file($tmp_Name2, "$filePath/$name2");

        $queryUpdateUser = sprintf(
            "UPDATE people SET 
                first_name = '%s',
                last_name = '%s',
                mid_name = '%s',
                address = '%s',
                contact = '%s',
                comment = '%s',
                file = '%s',
                file2 = '%s'
            WHERE people_id ='%d'
            ",
        $firstName, $lastName, $mid_Name, $ads, $ctt, $cmt, $fileName[0], $fileName2[0], $id);
        
        mysqli_query($conn,$queryUpdateUser) or die(mysqli_error($conn));
    }
}
EditUser();
?>