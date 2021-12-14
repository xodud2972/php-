<!-- 
  index.php에서 수정 버튼을 눌러서 보이는 회원수정 페이지입니다.
  create by 엄태영 2021.12.16
 -->
<?php
include('../db/db.php');
include('../include/header.php');
include('../process/process_select_one.php')
?>
<html>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Taeyoung PHP&MySQL</a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li class="active">
            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>회원관리 탭</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              회원관리
            </h1>
          </div>
        </div>
        <div class="col-lg-12">
          <h2 class="title_h2">회원정보 수정</h2>
          <div class="col-lg-6">
            <form id="form1" method="post" action="../process/process_edit.php" enctype="multipart/form-data" class="table_write">
              <div class="form-group"><input class="form-control" type="hidden" name="id" value="<?= $id ?>" /></div>
              <div class="form-group"><input class="form-control" name="firstname" value="<?= $firstName ?>"></div>
              <div class="form-group"><input class="form-control" name="lastname" value="<?= $lastName ?>"></div>
              <div class="form-group"><input class="form-control" name="Middlename" value="<?= $mid_Name ?>"></div>
              <div class="form-group"><input class="form-control" name="Address" value="<?= $ads ?>"></div>
              <div class="form-group"><input class="form-control" name="Contact" value="<?= $ctt ?>"></div>
              <div class="form-group">
                <textarea class="form-control" rows="3" name="comment"><?= $cmt ?></textarea>
              </div>
              <div class="form-group">
                <label downloads>기존 파일 목록 : <br>
                  <a href="../uploads/<?= $fileName ?>" download><?= $fileName ?></a><br>
                  <a href="../uploads/<?= $fileName2 ?>" download><?= $fileName2 ?></a> <br><br>
              </div>
              <div class="form-group" id="attachFileDiv">
                <input type="file" name="files[]" value="" size="40" />
                <input type="button" value="파일추가" onclick="attachFile.add()" style="margin-left:5px" />
              </div>
              <button class="btn btn-default" type="button" onclick="clkBtn();">전송</button>
            </form>
            <a class="btn btn-default" type="button" href="../view/index.php"> 목록으로 돌아가기 </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function clkBtn() {
      var form = $('#form1')[0];
      var data = new FormData(form);
      $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: '../process/process_edit.php', // form을 전송할 실제 파일경로
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
          // 전송 후 성공 시 실행 코드
          console.log(data);
          location="../view/index.php"
        },
        error: function(e) {
          // 전송 후 에러 발생 시 실행 코드
          console.log("ERROR : ", e);
        }
      });
    }
  </script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/morris/raphael.min.js"></script>
  <script src="js/plugins/morris/morris.min.js"></script>
  <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
<script src="/mvc/view/js/taeyoung.js"></script>