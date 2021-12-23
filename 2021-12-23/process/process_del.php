<!-- 
	index.php인 메인 페이지에서 삭제버튼 클릭시 해당데이터를 delete 하기 위한 코드입니다.
    create by 엄태영 2021.12.16
-->
<?php

	include_once('../db/db.php');
	$db = db_open();

	$id = $_GET['id'];

	$querySelectFiles = sprintf(
			'SELECT filename FROM t_file WHERE file_people_id=%d'
		,$id);
	
	$result = mysqli_query($db, $querySelectFiles);
	
	while($row = mysqli_fetch_array($result)){
		$del_file = "../uploads/" . $row['filename'];
		echo $del_file;
		if ($row['filename'] && is_file($del_file)) {
			unlink($del_file);
		}
	}
		

	$queryDeleteUser = sprintf(
		'DELETE FROM t_people WHERE people_id=%d'
		, $id);

	que($db, $queryDeleteUser);

	
?>

<script type="text/javascript">
	window.location = "../view/index.php";
</script>