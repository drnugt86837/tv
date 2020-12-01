<?php

require_once("dbConnect.php");

error_reporting(0) ;
$account = $_POST["account"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$email = $_POST["email"];

$commandText = <<<SqlQuery
select * from user where account= $account
SqlQuery;
$result = mysqli_query($link, $commandText);
$row=mysqli_fetch_assoc($result);

 



if (isset($_POST["btnOK"])) {
    if ( $row != 0){
        echo "<script> alert('帳號重複');</script>";
    }else if ( $password == $password2) {
        $sql = "insert into user (`account`, `password`, `email`) values ('$account', '$password', '$email')";
        mysqli_query($link, $sql);
            header('Location:login.php');
        }else{
            echo "<script> alert('輸入錯誤');</script>";
        }
}


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mytv</title>
    <script src="./_js/canvas.js"></script>
    <link rel="stylesheet" href="./_css/bootstrap.min.css">
    <link rel="stylesheet" href="./_css/animate.css">
    <link rel="stylesheet" href="./_css/loading.css">
    <script src="./_js/jquery.min.js"></script>
    <script src="./_js/popper.min.js"></script>
    <script src="./_js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./_css/tv.css">
    <script src="./_js/message.js"></script>
    <link rel="stylesheet" href="./_css/hamburger.css">


</head>


<body>
    <div class="screen">
        <!-- 頁首    -->
        <div class="top">
        <?php include("header.php"); ?>
            <!-- 登入資料 -->
            <div class="box2">
                <form method="post" action="">
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="inputEmail4">帳號</label>
                            <input type="text" class="form-control" id="account" name="account" required="">
                            <label for="inputPassword4">密碼</label>
                            <input type="password" class="form-control" id="password" name="password" required="">
                            <label for="inputPassword4">再次輸入密碼</label>
                            <input type="password" class="form-control" id="password2" name="password2" required="">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required="">
              
                           

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" data-val="true">
                            <label class="form-check-label" for="gridCheck">
                                <span>我同意 服務條款, 停權管理規章 和 隱私政策，同時也了解若我未滿20歲，我的法定代理人或監護人必須代表我完整檢閱和同意使用條款。</span>
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success " name="btnOK" id="btnOK" placeholder="立刻註冊"></input>
                </form>

            </div>
            <?php include("footer.php"); ?>
        </div>
</body>


</html>