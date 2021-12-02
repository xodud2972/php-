<script> alert("가입이 완료되었습니다"); </script>
<?php

    $link = mysqli_connect('localhost', 'root', '1111', 'testdata');

    $filtered = array(
        'name' => mysqli_real_escape_string($link, $_POST['name']),
        'nickname' => mysqli_real_escape_string($link, $_POST['nickname']),
        'email' => mysqli_real_escape_string($link, $_POST['email']),
        'address' => mysqli_real_escape_string($link, $_POST['address']),
        'address2' => mysqli_real_escape_string($link, $_POST['address2']),
        'code' => mysqli_real_escape_string($link, $_POST['code']),
    );

    $sql = "
        INSERT INTO members
            (name, nickname, email, address, address2, code)
        VALUES (
            '{$filtered['name']}',
            '{$filtered['nickname']}',
            '{$filtered['email']}',
            '{$filtered['address']}',
            '{$filtered['address2']}',
            '{$filtered['code']}'
        )
    ";

    $result = mysqli_query($link, $sql);
    if($result === false){

        echo '저장하는 과정에서 문제가 생겼습니다.';
    } else{
        header('location: ../board.php');
    }

?>