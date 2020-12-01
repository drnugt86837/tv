<?php
require_once("dbConnect.php");
error_reporting(0) ;


$mon = <<<SqlQuery
select  picture from vedio where updatetable =1
SqlQuery;
$Mon = mysqli_query($link, $mon);

$tue = <<<SqlQuery
select  picture from vedio where updatetable =2
SqlQuery;
$Tue = mysqli_query($link, $tue);

$wed = <<<SqlQuery
select  picture from vedio where updatetable =3
SqlQuery;
$Wed = mysqli_query($link, $wed);

$thu = <<<SqlQuery
select  picture from vedio where updatetable =4
SqlQuery;
$Thu = mysqli_query($link, $thu);

$fri = <<<SqlQuery
select  picture from vedio where updatetable =5
SqlQuery;
$Fri = mysqli_query($link, $fri);

$sat = <<<SqlQuery
select  picture from vedio where updatetable =6
SqlQuery;
$Sat = mysqli_query($link, $sat);

$sun = <<<SqlQuery
select  picture from vedio where updatetable =7
SqlQuery;
$Sun = mysqli_query($link, $sun);








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
            <!-- 時間更新表 -->
            <div class="container">
                <h1>時間管理大師</h1>
                <table class="table table-borderless">
                    <tbody>
                  
                
                        <tr>
                            <th scope="row">月曜日</th>
                             <td>
                                 <div class="time">
                                 <?php while ($row = mysqli_fetch_assoc($Mon)) : ?>
                                     <img src="./img/<?= $row["picture"] ?>" alt="">
                                     <?php endwhile;?>
                                  </div>
                               
                            </td>
                     
                         </tr>
                        <tr>
                            <th scope="row">火曜日</th>
                             <td>
                                 <div class="time">
                                 <?php while ($row = mysqli_fetch_assoc($Tue)) : ?>
                                     <img src="./img/<?= $row["picture"] ?>" alt="">
                                     <?php endwhile;?>
                                  </div>
                               
                            </td>
                     
                         </tr>
                        <tr>
                            <th scope="row">水曜日</th>
                             <td>
                                 <div class="time">
                                 <?php while ($row = mysqli_fetch_assoc($Wed)) : ?>
                                     <img src="./img/<?= $row["picture"] ?>" alt="">
                                     <?php endwhile;?>
                                  </div>
                               
                            </td>
                     
                         </tr>
                        <tr>
                            <th scope="row">木曜日</th>
                             <td>
                                 <div class="time">
                                 <?php while ($row = mysqli_fetch_assoc($Thu)) : ?>
                                     <img src="./img/<?= $row["picture"] ?>" alt="">
                                     <?php endwhile;?>
                                  </div>
                               
                            </td>
                     
                         </tr>
                        <tr>
                            <th scope="row">金曜日</th>
                             <td>
                                 <div class="time">
                                 <?php while ($row = mysqli_fetch_assoc($Fri)) : ?>
                                     <img src="./img/<?= $row["picture"] ?>" alt="">
                                     <?php endwhile;?>
                                  </div>
                               
                            </td>
                     
                         </tr>
                        <tr>
                            <th scope="row">土曜日</th>
                             <td>
                                 <div class="time">
                                 <?php while ($row = mysqli_fetch_assoc($Sat)) : ?>
                                     <img src="./img/<?= $row["picture"] ?>" alt="">
                                     <?php endwhile;?>
                                  </div>
                               
                            </td>
                     
                         </tr>
                        <tr>
                            <th scope="row">日曜日</th>
                             <td>
                                 <div class="time">
                                 <?php while ($row = mysqli_fetch_assoc($Sun)) : ?>
                                     <img src="./img/<?= $row["picture"] ?>" alt="">
                                     <?php endwhile;?>
                                  </div>
                               
                            </td>
                     
                         </tr>
                       
                         
                         
                   
               
                       
                    </tbody>
                </table>
            </div>
            <?php include("footer.php"); ?>
        </div>

</body>


</html>