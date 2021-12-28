
<?php

    include_once('../db/db.php');
    $db = db_open();

    $id = $_GET['file_id'];
    echo 'id : '.$id.'<br>';

if(isset($id)){
    
    $queryDelFile = sprintf('DELETE FROM t_file WHERE file_id = %s',  $id);
    
    echo 'query : ';
    echo $queryDelFile;
    
    que($db,$queryDelFile);
}
?>

