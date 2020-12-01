<?php
require_once("dbConnect.php");
error_reporting(0);
// 輸入關鍵字搜尋
$nnn = $_GET["name"];
$sql1 = <<<sqlCommand
    SELECT * FROM vedio WHERE name LIKE '%$nnn%'
    sqlCommand;

$result5 = mysqli_query($link, $sql1);

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

            <br>
            <!-- 動漫列表 -->
            <div class="container">

              
                    <div class="card-group row">
                        <?php for ($a = 1; $a <= 4; $a++) : ?>
                            <?php $row5 = mysqli_fetch_assoc($result5) ?>
                            <div class="card col-6 ">
                                <div class="card-body">
                                    <a href="<?= $row5["link"] ?>"><img src="./img/<?= $row5["picture"] ?>" alt="" class="img-fluid"></a>
                                    <div>
                                        <h6><?= $row5["name"] ?></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
               


            </div>
            <br>
            <br>
            <!-- 頁數 -->
            <div class=" page">
                <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li><a href="">1</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
            <?php include("footer.php"); ?>
        </div>

</body>


</html>