<!-- 
	index.php인 메인 페이지에서 삭제버튼 클릭시 해당데이터를 delete 하기 위한 코드입니다.
    create by 엄태영 2021.12.16
-->
<?php
include_once('../db/db.php');

$sql = '
	SELECT file, file2 FROM people WHERE people_id=' . $_GET['id'];

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$del_file = "../uploads/" . $row['file'];
$del_file2 = "../uploads/" . $row['file2'];

if ($row['file'] && is_file($del_file)) {
	unlink($del_file);
}
if ($row['file2'] && is_file($del_file2)) {
	unlink($del_file2);
}

$sqldel = '
	DELETE FROM people WHERE people_id=' . $_GET['id'];

mysqli_query($conn, $sqldel) or die(mysqli_error($conn));


$query = 'DELETE FROM people 
	WHERE 
		people_id = ' . $_GET['id'];
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

?>

<script type="text/javascript">
	window.location = "../view/index.php";
</script>