<!-- 
	edit.php, select.php 에서 해당 게시글에 데이터를 보여주는 코드입니다.
    create by 엄태영 2021.12.16
-->
<?php
    
    include('../db/db.php');
    $id = $_GET['id'];
    $query = 'SELECT first_name, last_name, mid_name, address, contact, comment, file, file2 FROM people
                WHERE
                people_id =' . $_GET['id'];
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) {
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $mid_Name = $row['mid_name'];
            $ads = $row['address'];
            $ctt = $row['contact'];
            $cmt = $row['comment'];
            $fileName = $row['file'];
            $fileName2 = $row['file2'];
        }

?>