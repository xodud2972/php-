<?php

?>
<html>
<body>
    <a href="../view/add.php">추가하기</a>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>이름</th>
                <th>별명</th>
                <th>성</th>
                <th>주소</th>
                <th>연락처</th>
                <th>소개</th>
                <th>파일</th>
                <th>회원관리</th>
            </tr>
        </thead>
        <tbody>
            <?php
        include('../process/process_select_all.php');
            ?>
        </tbody>
    </table>
</body>
</html>