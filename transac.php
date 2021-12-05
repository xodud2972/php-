<?php

include('connection.php');
include('header.php');

?>

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
                <a class="navbar-brand" href="index.php">Taeyoung PHP/MySQL</a>
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
                            수정 중 에러발생
                        </h1>

                    </div>
                </div>
                <!-- /.row -->


                <div class="col-lg-12">


    <?php
    
    
    $file = $_FILES['file']['name'];
    json_encode($file);
    print_r($file); 
    $countfiles = count($_FILES['file']['name']); 
    for($i=0;$i<$countfiles;$i++){
    $filename = $file[$i];
      // Upload file
      move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
     }

    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mname = $_POST['Middlename'];
    $address = $_POST['Address'];
    $contct = $_POST['Contact'];
    $comment = $_POST['comment'];
    
    switch ($_POST['action']) {
        
        case 'add':
            $query = "INSERT INTO people
                (first_name, last_name, mid_name, address, contact, comment, file)
                VALUES ('" . $fname . "','" . $lname . "','" . $mname . "','" . $address . "','" . $contct . "','" . $comment . "','" . $file . "')";
            echo $query;  
            mysqli_query($db, $query) or die('에러입니다');
            break;
    }
    ?>
    <script type="text/javascript">
        alert("새로운 회원이 등록되었습니다.");
        window.location = "index.php";
    </script>


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