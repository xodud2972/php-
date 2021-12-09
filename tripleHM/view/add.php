<?php
include('../view/header.php')
?>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CRUD Using PHP/MySQL</a>
            </div>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> 회원관리 탭</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            회원추가하기
                        </h1>

                    </div>
                </div>
                <!-- /.row -->


                <div class="col-lg-12">
                    <h2>새 회원추가</h2>
                    <div class="col-lg-6">

                        <form role="form" method="post" action="../process/process_insert.php" enctype='multipart/form-data' class="table_write">
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
                            <div  class="form-group" id="attachFileDiv">
                                <input type="file" name="files[]" value="" size="40" />
                                <input type="button" value="파일추가" onclick="attachFile.add()" style="margin-left:5px" />
                            </div>
                            <input class="btn btn-default" type="submit" id="submit"></input>
                            <button class="btn btn-default" type="reset">초기화</button>
                        </form>
                        <a type="button" href="../view/index.php"> 목록으로 돌아가기 </a>


                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
<script src="js/taeyoung.js"></script>