<!-- 
	index.php인 메인페이지에 DB데이터 전체를 보여주는 코드입니다.
    create by 엄태영 2021.12.16
-->
<?php
function SelectAllUser(){
	include('../db/db.php');
	$querySelectAllUser = 'SELECT people_id, first_name, last_name, mid_name, address, contact, comment, file, file2 FROM people';

	$result = mysqli_query($conn, $querySelectAllUser) or die(mysqli_error($conn));

	while ($row = mysqli_fetch_array($result)) {
		echo sprintf('<tr><td>%s</td>',$row['first_name']);
		echo sprintf('<td>%s</td>',$row['last_name']);
		echo sprintf('<td>%s</td>',$row['mid_name']);
		echo sprintf('<td>%s</td>',$row['address']);
		echo sprintf('<td>%s</td>',$row['contact']);
		echo sprintf('<td>%s</td>',$row['comment']);
		echo sprintf('<td><a href="../uploads/%s" download> %s </a></td>', $row['file'], $row['file']);
		echo sprintf('<td><a href="../uploads/%s" download> %s </a></td>', $row['file2'], $row['file2']);
		echo sprintf('<td><a class="btn btn-xs btn-info" type="button" href="../view/select.php?&id=%s" > 자세히 보기 </a>  ,', $row['people_id']);
		echo sprintf('<a class="btn btn-xs btn-warning" type="button" href="../view/edit.php?&id=%s"> 수정하기 </a>   ,', $row['people_id']);
		echo sprintf('<a class="btn btn-xs btn-danger" type="button" href="../process/process_del.php?&id=%s" onclick="delChecking(); clkBtn();">삭제하기</a> </td></tr>',$row['people_id']);
	}
}
?>

<script>

/** 
 	index.php인 메인페이지에서 삭제버튼 클릭시 삭제여부를 재확인하는 코드입니다..
	create by 엄태영 2021.12.16
**/
	function delChecking() {
		if (confirm("정말 삭제하시겠습니까??") == true) { //확인
			document.form.submit();
		} else { //취소
			return false;
		}
	}

	
/** 
 	index.php인 메인페이지에서 삭제버튼 클릭시 AJAX를 이용하여 process_del.php로 전송되는 코드입니다.
	create by 엄태영 2021.12.16
**/
	function clkBtn() {
		var form = $('#form1')[0];
		var data = new FormData(form);
		$.ajax({
			type: "POST",
			enctype: 'multipart/form-data',
			url: '../process/process_del.php', // form을 전송할 실제 파일경로
			data: data,
			processData: false,
			contentType: false,
			cache: false,
			timeout: 600000,
			success: function(data) {
				// 전송 후 성공 시 실행 코드
				console.log(data);
			},
			error: function(e) {
				// 전송 후 에러 발생 시 실행 코드
				console.log("ERROR : ", e);
			}
		});
	}
</script>