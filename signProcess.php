<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 화면 샘플 - Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        body {
            min-height: 100vh;
            background: -webkit-gradient(linear, left bottom, right top, from(#92b5db), to(#1d466c));
            background: -webkit-linear-gradient(bottom left, #92b5db 0%, #1d466c 100%);

            background: -moz-linear-gradient(bottom left, #92b5db 0%, #1d466c 100%);

            background: -o-linear-gradient(bottom left, #92b5db 0%, #1d466c 100%);

            background: linear-gradient(to top right, #92b5db 0%, #1d466c 100%);
        }

        .input-form {
            max-width: 680px;

            margin-top: 80px;
            padding: 32px;

            background: #fff;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15);
            box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.15)
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="input-form-backgroud row">
            <div class="input-form col-md-12 mx-auto">
                <h4 class="mb-3">회원가입을 축하드립니다.</h4>

                <form action="signProcess.php" class="validation-form" method="post">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">이름</label>
                            <input type="text" class="form-control" name="Name" value="<?php echo $_POST["Name"]; ?>" disabled>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nickname">별명</label>
                            <input type="text" class="form-control" name="Nickname" value="<?php echo $_POST["Nickname"]; ?>" disabled>
                            <div class="invalid-feedback">
                                별명을 입력해주세요.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">이메일</label>
                        <input type="email" class="form-control" name="Email" value="<?php echo $_POST["Email"]; ?>" disabled>
                        <div class="invalid-feedback">
                            이메일을 입력해주세요.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">주소</label>
                        <input type="text" class="form-control" name="Address" value="<?php echo $_POST["Address"]; ?>" disabled>
                        <div class="invalid-feedback">
                            주소를 입력해주세요.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address2">상세주소<span class="text-muted">&nbsp;(필수 아님)</span></label>
                        <input type="text" class="form-control" name="Address2" value="<?php echo $_POST["Address2"]; ?>" disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="root">가입 경로</label>
                            <?php $slectoption = $_POST['Root']; ?>
                            <select class="custom-select d-block w-100" name="Root" disabled>
                                <option value="1">인터넷검색</option>
                                <option value="2">지인추천</option>
                            </select>
                            <div class="invalid-feedback">
                                가입 경로를 선택해주세요.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="code">추천인 코드</label>
                            <input type="text" class="form-control" name="Code" value="<?php echo $_POST["Code"]; ?> " disabled>
                            <div class="invalid-feedback">
                                추천인 코드를 입력해주세요.
                            </div>
                        </div>
                    </div>
                    
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block"><a href="../index.php" style="color: white;">홈페이지로 이동</a></button>

                </form>


            </div>
        </div>
        <footer class="my-3 text-center text-small">
            <p class="mb-1">&copy; 2021 YD</p>
        </footer>
    </div>
    <script>
        window.addEventListener('load', () => {
            const forms = document.getElementsByClassName('validation-form');
            Array.prototype.filter.call(forms, (form) => {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    </script>
</body>
</html>
