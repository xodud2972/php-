<html>

<body>
    <?php
    include('../process/process_select_one.php');
    ?>
    <div><input type="hidden"     name="id" value="<?= $id ?>"                 />   </div>
    <div><input name="firstname"            value="<?= $fname ?>"       disabled>   </div>
    <div><input name="lastname"             value="<?= $lname ?>"       disabled>   </div>
    <div><input name="Middlename"           value="<?= $mname ?>"       disabled>   </div>
    <div><input name="Address"              value="<?= $ads ?>"         disabled>   </div>
    <div><input name="Contact"              value="<?= $ctt ?>"         disabled>   </div>
    <div>
        <textarea class="form-control" rows="3" name="comment" disabled><?= $cmt ?></textarea>
    </div>
    <div>
        <label for="files" downloads>기존 파일 목록 : <br>
        <a href="../uploads/<?= $filename ?>" download><?= $filename ?></a>
    </div>
    <a type="button" href="../view/index.php"> 목록으로 돌아가기 </a>
</body>
</html>
