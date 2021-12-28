
<?php

    include_once('../db/db.php');
    $db = db_open();

    if(isset($_GET['file_id'])){

        $id = $_GET['file_id'];
        $queryDelFile = sprintf('DELETE FROM t_file WHERE file_id = %s',  $id);
        que($db,$queryDelFile);
        echo '파일이 성공적으로 삭제되었습니다.';
        echo '<input type="button" value="뒤로돌아가기" onclick=bakcPage();></input>';
    }
?>

<script>
    function bakcPage(){
        window.location = document.referrer;
    }
</script>