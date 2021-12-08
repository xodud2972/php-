<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> 
</head>
<body>
    <h2>새 회원추가</h2>
    <form role="form" method="post" action="../process/process_insert.php" enctype='multipart/form-data'>

        <input type="hidden" value="add" name="action" class="validation-form">

        <div><input placeholder="이름 : ex) 길동"            name="firstname"   id="firstname"></div>
        <div><input placeholder="별명 : ex) 좀도둑"          name="lastname"    id="lastname"></div>
        <div><input placeholder="성 : ex) 홍"                name="Middlename"  id="Middlename"></div>
        <div><input placeholder="주소 : ex) 조선"            name="Address"     id="Address"></div>
        <div><input placeholder="연락처 : ex) 010-1234-5678" name="Contact"     id="Contact"></div>
        <div>
            <label>소개</label>
            <textarea rows="3" name="comment" id="comment"></textarea>
        </div>
        <div>
            <label for="files">파일업로드</label><br>
            <input id="files" name="files" type="file" />
        </div>
        <input type="submit" id="submit">저장</input>
        <button type="reset">초기화</button>
    </form>
    <a type="button" href="../view/index.php"> 목록으로 돌아가기 </a>
</body>
</html>

<script>	
	$(document).ready(function(){ 
		$("#submit").click(function(){
				if($("#firstname").val().length==0){ alert("이름을 입력하세요."); $("#Name").focus(); return false; }
				if($("#lastname").val().length==0){ alert("별명을 입력하세요."); $("#Email").focus(); return false; }
				if($("#Middlename").val().length==0){ alert("성을 입력하세요."); $("#Phone").focus(); return false; }
				if($("#Address").val().length==0){ alert("주소를 입력하세요."); $("#Message").focus(); return false; }
                if($("#Contact").val().length==0){ alert("연락처를 입력하세요."); $("#Message").focus(); return false; }
                if($("#comment").val().length==0){ alert("소개를 입력하세요."); $("#Message").focus(); return false; }
			});		
	});
</script>