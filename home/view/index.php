<html>
<body>
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
            include_once('../db/db.php');

            $query = 'SELECT * FROM people';
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo '<td>' . $row['first_name'] . '</td>';
                echo '<td>' . $row['last_name'] . '</td>';
                echo '<td>' . $row['mid_name'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                echo '<td>' . $row['contact'] . '</td>';
                echo '<td>' . $row['comment'] . '</td>';
                echo '<td>' . $row['file'] . '</td>';
                echo '<td><a type="button" href="../view/select.php?&id=' . $row['people_id'] . '" > 자세히 보기 </a></td> ';
                echo '<td><a type="button" href="../view/edit.php?& id=' . $row['people_id'] . '"> 수정하기 </a></td> ';
                echo '<td><a type="button" href="../process/process_del.php?&id=' . $row['people_id'] . '">삭제하기 </a> </td>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>