
<?php
include_once('../db/db.php');    

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mname = $_POST['Middlename'];
$ads = $_POST['Address'];
$ctt = $_POST['Contact'];
$cmt = $_POST['comment'];


$filename = $_FILES['files']['name'];
$count = count($filename);
$filepath = "../uploads";

// 업로드를 위한 For문 정상실행
for($i=0; $i<$count; $i++){
    $tmp_name = $_FILES["files"]["tmp_name"][$i];
    $name = basename($_FILES["files"]["name"][$i]);
    move_uploaded_file($tmp_name, "$filepath/$name");
}

// // query에 넣기 위한 for문 미완성 아래 출력되는 것 처럼 게시판에 등록이 되어야 함
// function filename($filename, $count){
//     for($i=0; $i<$count; $i++){
//         $filename[$i];
//     } 
// }

// print_r(filename($filename, $count));

$arraydata = implode(',',$filename);
echo $arraydata.'<br>';

$joindata = join(',',$filename);
echo $joindata;

$query = "INSERT INTO people
            (first_name, last_name, mid_name, address, contact, comment, file)
            VALUES ('" . $fname . "','" . $lname . "','" . $mname . "','" . $ads . "','" . $ctt . "','" . $cmt . "','" . $joindata . "')";

mysqli_query($conn, $query) or die('에러입니다');
?>

<script type="text/javascript">
    //alert("새로운 회원이 등록되었습니다.");
    //window.location = "../view/index.php";
</script>