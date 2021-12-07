<?php


    function selectPeople(){
        
        include_once('../db/db.php');           

        $id = $_POST['id'];

        $query = ' SELECT * FROM people 
                    WHERE 
                    people_id ="'.$id.'"
        ';
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

        while($row = mysqli_fetch_array($result)){
            echo $row['first_name'];
            echo $row['last_name'];
            echo $row['mid_name'];
            echo $row['address'];
            echo $row['contact'];
            echo $row['comment'];
            echo $row['file'];
            echo '<a type="button" href="../view/index.php" > 목록으로 돌아가기 </a> ';
        }
    }   
?>