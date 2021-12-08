<?php
    include('../db/db.php');
    $query = 'SELECT * FROM people';
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '<td>' . $row['mid_name'] . '</td>';
        echo '<td>' . $row['address'] . '</td>';
        echo '<td>' . $row['contact'] . '</td>';
        echo '<td>' . $row['comment'] . '</td>';
        echo '<td><a href="../uploads/'.$row['file'].'" download>' . $row['file'] . '</a></td>';
        echo '<td><a type="button" href="../view/select.php?&id='.$row['people_id'].'" > 자세히 보기 </a></td> ';
        echo '<td><a type="button" href="../view/edit.php?&id='.$row['people_id'].'"> 수정하기 </a></td> ';
        echo '<td><a type="button" href="../process/process_del.php?&id='.$row['people_id'].'">삭제하기 </a> </td>';
    }

?>

