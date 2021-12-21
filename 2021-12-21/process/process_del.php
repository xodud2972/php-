<!-- 
	index.php인 메인 페이지에서 삭제버튼 클릭시 해당데이터를 delete 하기 위한 코드입니다.
    create by 엄태영 2021.12.16
-->
<?php
function DeleteUser(){
	include_once('../db/db.php');

	$id = $_GET['id'];

	// $querySelectFiles = sprintf(
	// 		'SELECT filename FROM t_file WHERE people_id=%d'
	// 	,$id);

	// $result = mysqli_query($conn, $querySelectFiles);
	// $row = mysqli_fetch_array($result);

	// $del_file = "../uploads/" . $row['file'];

	// if ($row['file'] && is_file($del_file)) {
	// 	unlink($del_file);
	// }

	$queryDeleteUsert = sprintf(
		'DELETE FROM t_people WHERE people_id=%d'
		, $id);

	$result = mysqli_query($conn, $queryDeleteUsert) or die(mysqli_error($conn));
}

DeleteUser();
?>

<script type="text/javascript">
	window.location = "../view/index.php";
</script>