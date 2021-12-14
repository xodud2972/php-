<!-- 
  index.php에서 추가 버튼을 눌러서 보이는 회원추가 페이지입니다.
  create by 엄태영 2021.12.16
 -->
<?php
include('../include/header.php');
?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
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
                <a class="navbar-brand" href="index.php">CRUD Using PHP/MySQL</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> 회원관리 탭</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            회원추가하기
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h2 class="title_h2">새 회원추가</h2>
                    <div class="col-lg-6">
                        <form id="form1" role="form" method="post" action="../process/process_insert.php" enctype='multipart/form-data' class="table_write">
                            <input type="hidden" value="add" name="action" class="validation-form">
                            <div class="form-group"><input class="form-control" placeholder="이름 : ex) 길동" name="firstname" id="firstname"></div>
                            <div class="form-group"><input class="form-control" placeholder="별명 : ex) 좀도둑" name="lastname" id="lastname"></div>
                            <div class="form-group"><input class="form-control" placeholder="성 : ex) 홍" name="Middlename" id="Middlename"></div>
                            <div class="form-group"><input class="form-control" placeholder="주소 : ex) 조선" name="Address" id="Address"></div>
                            <div class="form-group"><input class="form-control" placeholder="연락처 : ex) 010-1234-5678" name="Contact" id="Contact"></div>
                            <div class="form-group">
                                <label>소개</label>
                                <textarea class="form-control" rows="3" name="comment" id="comment"></textarea>
                            </div>
                            <div class="form-group" id="attachFileDiv">
                                <span style="color: red;">※파일은 최대 2개까지만 첨부 가능합니다※</span>
                                <input type="file" name="files[]" value="" size="40" />
                                <input id="fileField" type="button" value="파일추가" onclick="attachFile.add()" style="margin-left:5px" />
                            </div>
                            <button id="ajax" class="btn btn-default" type="button">전송</button>
                            <button class="btn btn-default" type="reset">초기화</button>
                        </form>
                        <a class="btn btn-default" type="button" href="../view/index.php"> 목록으로 돌아가기 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

/** 
    전송버튼을 클릭시 AJAX로 전송되면 함수입니다.
    taeyoung.js파일과 연관됩니다.

    create by 엄태영 2021.12.16
 **/
        function clkBtn() {
            var form = $('#form1')[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: '../process/process_insert.php', 
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function(data) {
                    console.log(data);
                    location="../view/index.php"
                },
                error: function(e) {
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
    <script src="js/taeyoung.js"></script>
</body>
</html>