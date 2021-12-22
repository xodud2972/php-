<!-- 
	add.php인 회원추가 페이지에서 입력한 데이터를 insert 하기 위한 코드입니다.
    create by 엄태영 2021.12.16
-->
<?php

    include_once('../db/db.php');
    $db = db_open();    

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $midName = $_POST['Middlename'];
    $ads = $_POST['Address'];
    $ctt = $_POST['Contact'];
    $cmt = $_POST['comment'];
    $fileName = $_FILES['files']['name'];
    $FILE_COUNT = count($fileName);
    $filePath = "../uploads";


    $queryInsertUser = sprintf(
    "INSERT INTO t_people
        (first_name, last_name, mid_name, address, contact, comment)
    VALUES 
        ('%s','%s','%s','%s','%s','%s')"
    ,$firstName, $lastName, $midName, $ads, $ctt, $cmt);

    que($db, $queryInsertUser);
    
    echo $queryInsertUser;
  


    for($i=0; $i<$FILE_COUNT; $i++){
        $tmp_Name = $_FILES["files"]["tmp_name"][$i];
        $name = basename($fileName[$i]);
        move_uploaded_file($tmp_Name, "$filePath/$name");

        $queryInsertFiles = sprintf(
            "INSERT INTO t_file
                (file_people_id, filename)
            VALUES
                (LAST_INSERT_ID(), '%s')"
            , $fileName[$i]);
        
        que($db, $queryInsertFiles);

        echo $queryInsertFiles;
    }
    
    
?>