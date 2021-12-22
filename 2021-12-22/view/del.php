<?php
include('../db/db.php');
include('../include/header.php');
?>
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

            <form id="form1" method="post" class="table_write">
                <button id="delAjax" class="btn btn-default" type="button" onclick="BtnDel();">해당 파일 삭제하기</button>
            </form>
            <a class="btn btn-default" type="button" href="../view/index.php"> 목록으로 돌아가기 </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>

<script>
    function BtnEdit() {
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
            location="../view/index.php"
          },
          error: function(e) {
            // 전송 후 에러 발생 시 실행 코드
            console.log("ERROR : ", e);
          }
        });
      }
</script>
</body>
</html>
