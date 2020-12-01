<?php
require_once("dbConnect.php");
error_reporting(0);



$sqlB = <<<sqlCommand
    SELECT vt.name,vt.picture
    FROM user ut,favorite ft,vedio vt
    where ut.account = ft.account
    AND ft.vedio_id = vt.vedio_id
    AND ut.account = '{$_COOKIE["userName"]}'
 sqlCommand;

$resultB = mysqli_query($link, $sqlB);

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
    <link rel="stylesheet" href="./_css/collect.css">

</head>


<body>
    <div class="screen">
        <!-- 頁首    -->
        <div class="top">
            <?php include("header.php"); ?>
            <!-- 最愛列表 -->
            <div class="container">
                <h1>收藏</h1>
                <div id="app" class="containercard">
                    <?php while ($rowB = mysqli_fetch_assoc($resultB)) : ?>
                        <a href="http://localhost/TV/employee/ghost.php?value=1vt_name=<?= $row["vedio_id"] ?>">
                            <card data-image="./img/<?= $rowB["picture"] ?>">
                                <h3 slot="header"><?= $rowB["name"] ?></h3>
                            </card>
                        </a>
                    <?php endwhile; ?>
                </div>

            </div>
            <!-- 頁數 -->
            <div class=" page">
                <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
            <?php include("footer.php"); ?>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="./_js/collect.js"></script>


</html>