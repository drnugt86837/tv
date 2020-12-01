<?php
require_once("dbConnect.php");
error_reporting(0) ;
switch ($type=$_GET["type"]){
    case 1:
    $commandText = <<<SqlQuery
    select vedio_id, name, type,pageviews, time, picture from vedio where type= '冒險'
    SqlQuery;
    $result = mysqli_query($link, $commandText);
    mysqli_close($link);
    error_reporting(0) ;
    break;

    case 2:
    $commandText = <<<SqlQuery
    select vedio_id, name, type,pageviews, time, picture from vedio where type= '校園'
    SqlQuery;
    $result = mysqli_query($link, $commandText);
    mysqli_close($link);
    error_reporting(0) ;
    break;

    case 3:
    $commandText = <<<SqlQuery
    select vedio_id, name, type,pageviews, time, picture from vedio where type= '搞笑'
    SqlQuery;
    $result = mysqli_query($link, $commandText);
    mysqli_close($link);
    error_reporting(0) ;
    break;

    case 4:
    $commandText = <<<SqlQuery
    select vedio_id, name, type,pageviews, time, picture from vedio where type= '推理'
    SqlQuery;
    $result = mysqli_query($link, $commandText);
    mysqli_close($link);
    error_reporting(0) ;
    break;

    case 5:
    $commandText = <<<SqlQuery
    select vedio_id, name, type,pageviews, time, picture from vedio GROUP BY time DESC
    SqlQuery;
    $result = mysqli_query($link, $commandText);
    mysqli_close($link);
    error_reporting(0) ;
    break;

    case 6:
    $commandText = <<<SqlQuery
    select vedio_id, name, type,pageviews, time, picture from vedio GROUP BY pageviews DESC
    SqlQuery;
    $result = mysqli_query($link, $commandText);
    mysqli_close($link);
    error_reporting(0) ;
    break;

    case 7:
    $commandText = <<<SqlQuery
    select vedio_id, name, type,pageviews, time, picture from vedio GROUP BY favorite DESC
    SqlQuery;
    $result = mysqli_query($link, $commandText);
    mysqli_close($link);
    error_reporting(0) ;
    break;
}

if($value=$_GET["value"]){
$skip = ($value - 1) * 18;

$commandText = <<<SqlQuery
select vedio_id, name, type,pageviews, time, picture
  from vedio LIMIT $skip, 18
SqlQuery;

$result = mysqli_query($link, $commandText);


mysqli_close($link);
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
    <link rel="stylesheet" href="./_css/card.css">
    <script src="./_js/message.js"></script>
    <link rel="stylesheet" href="./_css/hamburger.css">

</head>


<body>
    <div class="screen">
        <!-- 頁首    -->
        <div class="top">
            <?php include("header.php"); ?>
            <!-- 下拉清單 -->
            <div class=" container listmenu">
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        所有
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="anime.php?type=1">冒險</a>
                        <a class="dropdown-item" href="anime.php?type=2">校園</a>
                        <a class="dropdown-item" href="anime.php?type=3">搞笑</a>
                        <a class="dropdown-item" href="anime.php?type=4">推理</a>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        排序
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="anime.php?type=5">最新</a>
                        <a class="dropdown-item" href="anime.php?type=6">熱門</a>
                        <a class="dropdown-item" href="anime.php?type=7">好評</a>
                    </div>
                </div>
            </div>
            <br>
            <!-- 動漫列表 -->
            <div class="container">
           
                   <?php for ($i = 1; $i <= 3; $i++) :  ?>
                    <div class="card-group row">
                        <?php for ( $a =1 ; $a<=6;$a++) : ?>
                           <?php $row = mysqli_fetch_assoc($result) ?> 
                            <div class="card col-6 ">
                                <div class="card-body">
                                    <a href="ghost.php?value=1vt_name=<?=$row["vedio_id"]?>"><img src="./img/<?= $row["picture"] ?>" alt="" class="img-fluid"></a>
                                    <div>
                                        <h6><?= $row["name"] ?></h6>
                                    </div>
                                </div>
                            </div>
                                 <?php endfor; ?>
                    </div>
                    <?php endfor; ?>
               
                        
            </div>     
            <br>
            <br>
            <!-- 頁數 -->
            <div class=" page">
                <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li><a href="anime.php?value=1">1</a></li>
                    <li><a href="anime.php?value=2">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
            <?php include("footer.php"); ?>
        </div>
      
</body>


</html>