<?php 
include_once('../db/db.php');

$query = 'SELECT * FROM people
              WHERE
              people_id ='.$_GET['id'];

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
              while($row = mysqli_fetch_array($result))
              {  
                $id = $row['people_id'];
                $fname = $row['first_name'];
                $lname = $row['last_name'];
                $mname = $row['mid_name'];
                $ads = $row['address'];
                $ctt = $row['contact'];
                $cmt = $row['comment'];
                $filename = $row['file']['name'];
              }
         
?>

<html>
    <body>
        <form method="post" action="../process/process_edit.php" enctype='multipart/form-data'>
            <div><input type="hidden" name="id" value="<?php echo $id; ?>" /></div>
            <div><input name="firstname" value="<?=$fname?>"></div>
            <div><input name="lastname" value="<?=$lname?>"></div>
            <div><input name="Middlename" value="<?=$mname?>"></div>
            <div><input name="Address" value="<?=$ads?>"></div>
            <div><input name="Contact" value="<?=$ctt?>"></div>
            <div>
                <textarea class="form-control" rows="3" name="comment"><?=$cmt?></textarea>
            </div>
            <div>
                <label value="<?=$filename?>"></label>
                <input name="file" type="file" multiple />
            </div>
            <button type="submit">저장</button>
            <button type="reset">초기화</button>
        </form>        
    </body>
</html>
