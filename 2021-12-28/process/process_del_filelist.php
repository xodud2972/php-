
<?php
    include_once('../db/db.php');
    $db = db_open();

    if(isset($_GET['file_id'])){

        $id = $_GET['file_id'];
        $queryDelFile = sprintf('DELETE FROM t_file WHERE file_id = %s',  $id);
        que($db,$queryDelFile);
        echo '<h1>파일이 성공적으로 삭제되었습니다.</h1>';
        echo '<h2>삭제된 파일의 번호는 '.$id.'입니다. </h2>';
        echo '<h2>실행된 쿼리는 '.$queryDelFile.'</h2>';
        echo '<input type="button" value="뒤로돌아가기" onclick=bakcPage(); ></input>';
    }
?>

<script>
    function bakcPage(){
        window.location = document.referrer;
    }
</script>