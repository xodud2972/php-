<!-- 
  메인페이지입니다.
  create by 엄태영 2021.12.16
 -->
<?php
include('../include/header.php');
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
                            회원관리
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h2>회원목록</h2> <a href="add.php?action=add" type="button" class="btn btn-xs btn-info">회원추가</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>이름</th>
                                    <th>별명</th>
                                    <th>성</th>
                                    <th>주소</th>
                                    <th>연락처</th>
                                    <th>소개</th>
                                    <th>첨부파일(1)</th>
                                    <th>첨부파일(2)</th>
                                    <th>회원관리</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                include('../process/process_select_all.php'); 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>