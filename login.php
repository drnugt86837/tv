<?php 

require_once("dbConnect.php");


error_reporting(0) ;
session_start();

$txtUserName=$_POST['txtUserName'];

$txtPassword=$_POST['txtPassword'];

 $sSQL="select * from user
 where account='$txtUserName' and password ='$txtPassword'";
$result=mysqli_query($link,$sSQL);
$rowcount=mysqli_num_rows($result);  
if (isset($_POST["btnOK"])){
    if($rowcount==0 || $rowcount>1){
        echo "<script> alert('輸入錯誤');</script>";
    }else{
        $sUserName = $_POST["txtUserName"];
	if (trim($sUserName) != "")
	{
		setcookie("userName", $sUserName);
		if (isset($_COOKIE["lastPage"]))
		  header(sprintf("Location: %s", $_COOKIE["lastPage"]));
        else
        $rows=mysqli_fetch_array($result);
		   header("Location: index.php");
		exit();
	}
      
       

    }   


}


if (isset($_GET["logout"]))
{
setcookie("userName", "Guest", time() - 3600);
header("Location: index.php");
exit();
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
            <!-- 登入選項 -->
            <div class="box ">
                <form class="px-4 py-3" method="post" action="login.php">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">帳號</label>
                        <input type="text" class="form-control"  placeholder="帳號"  name="txtUserName" id="txtUserName"required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">密碼</label>
                        <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="密碼" required="">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                                記住我
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="btnOK" id="btnOK">登入</button>
                </form>
                <div class="dropdown-divider"></div>
                <br>
                <br>
                <a class="dropdown-item" href="createLogin.php">註冊帳號</a>
                <a class="dropdown-item" href="#">忘記密碼</a>
            </div>
            <?php include("footer.php"); ?>
        </div>

</body>


</html>