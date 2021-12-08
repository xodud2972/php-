<?php
    include_once('../process/process_select.php');   
?>


<html>
    <body>
      <?php    
      selectPeople();
      ?>
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
                <label for="files">기존 파일 목록 : <?=$filename?></label><br>
                <input id="files" name="files[]" type="file" multiple />
            </div>       
            <a type="button" href="../view/index.php" > 목록으로 돌아가기 </a> 
    </body>
</html>