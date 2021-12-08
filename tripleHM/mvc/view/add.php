<?php
include_once('../db/db.php');
?>
<body>
    <h2>새 회원추가</h2>
    <form role="form" method="post" action="../process/process_insert.php" enctype='multipart/form-data'>

        <input type="hidden" value="add" name="action">

        <div><input placeholder="이름 : ex) 길동"            name="firstname"></div>
        <div><input placeholder="별명 : ex) 좀도둑"          name="lastname"></div>
        <div><input placeholder="성 : ex) 홍"                name="Middlename"></div>
        <div><input placeholder="주소 : ex) 조선"            name="Address"></div>
        <div><input placeholder="연락처 : ex) 010-1234-5678" name="Contact"></div>
        <div>
            <label>소개</label>
            <textarea rows="3" name="comment"></textarea>
        </div>
        <div>
            <label for="files">파일업로드</label><br>
            <input id="files" name="files[]" type="file" multiple />
        </div>
        <input type="submit">저장</input>
        <button type="reset">초기화</button>
    </form>
</body>
</html>