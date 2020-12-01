<?php 
require_once("dbConnect.php");

if (isset($_POST["btnNO"])) {
    header("Location: index.php");
    exit();
 }
if (isset($_POST["btnOK"])) {
    $sql = <<<sqlCommand
      update user set 
        password = '{$_POST["password"]}',
        email = '{$_POST["email"]}'
      where account = '{$_POST["account"]}'
   sqlCommand;
   // echo $sql;
   mysqli_query($link, $sql);
   header("Location: index.php");
   exit();

}

$commandText1 = <<<SqlQuery
select * from user where account= '{$_COOKIE["userName"]}'
SqlQuery;
$result1 = mysqli_query($link, $commandText1);
$row1=mysqli_fetch_assoc($result1);


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
                            <input type="text" value="<?= $row1["account"] ?>" readonly="readonly" class="form-control" id="account" name="account"  >
                            <label for="inputPassword4">密碼</label>
                            <input type="text" class="form-control" id="password"name="password" required="">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <input type="text" value="<?= $row1["email"] ?>" class="form-control"id="email" name="email" >
                     
                            
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" data-val="true">
                            <label class="form-check-label" for="gridCheck">
                                <span>我同意更改內容 </span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success "name="btnOK" id="btnOK">確認</button>
                    <button type="submit" class="btn btn-success "name="btnNO" id="btnNO">取消</button>
                
                </form>
            </div>
            <?php include("footer.php"); ?>
        </div>
</body>


</html>