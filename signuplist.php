<?php
    $host = "localhost";
    $user = "root";
    $pw = "dkssud22@@";
    $dbName = "testdata";

    $conn = new mysqli($host, $user, $pw, $dbName);

    /* DB 연결 확인 */
    if($conn){ echo "Connection established"."<br>"; }
    else{ die( 'Could not connect: ' . mysqli_error($conn) ); }

    /* INSERT 예제 */
    $sql = "INSERT INTO signup(nname, nickname, email, aaddress, address2, code) 
    VALUES
    ('$_POST[Name]', '$_POST[Nickname]', '$_POST[Email]', '$_POST[Address]', '$_POST[Address2]', '$_POST[Code]')";

    $result = mysqli_query($conn, $sql);
 	
    if($result) { echo "insert success!"; }

    else { echo "failure"; }
    
    mysqli_close($conn);
?>
