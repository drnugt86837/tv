<?php
require_once("dbConnect.php");
error_reporting(0) ;

$aaa =substr($_GET["value"], 9); 

$sqlA = <<<sqlCommand
    SELECT * FROM vedio  where vedio_id =$aaa
    sqlCommand;

$resultA = mysqli_query($link, $sqlA);
$rowA = mysqli_fetch_assoc($resultA);




if (isset($_POST["btnOK"])) {
  
    $sql = <<<sqlCommand
    INSERT INTO favorite ( `vedio_id`,`account`)
    VALUES ('$aaa','{$_COOKIE["userName"]}')
      
   sqlCommand;

   mysqli_query($link, $sql);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mytv</title>

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
            <!-- vedio -->
            <div class=" container">
                <video class="video-placeholder" controls>
                    <source src="./vedio/<?= $rowA['vedio_file']?>" type="video/mp4">
                </video>
                <div class="screen_container"></div>
                <div class="screen_toolbar input-group mb-3">
                    <input class="form-control" id="screenBulletText" type="text" placeholder="請輸入內容" />
                    <button class="send btn btn-outline-success btn-sm">發送</button>
                    <button class="clear btn btn-outline-success btn-sm">關閉</button>
                </div>
            </div>
            <!-- 影片內容 -->
            <div class=" vedio-container container">
            <form  method="post" action="">
               <div class="buttoncontent ">
                    <h1><?=$rowA["name"]?>
                        <?php if ($sUserName == "Guest") : ?>
                            <a href="login.php"><img src="./img/baseline_favorite_border_black_18dp.png" class="btn like" alt="" style="float: right;"></a>
                        <?php else : ?>
                            <input type="submit" name="btnOK" id="btt"style="float: right; display:none;">
                    
                            <label for="btt"style="float: right;"><img src="./img/1.png"   onclick="next()" id="nImg"  alt="" > </label>
                            
                        <?php endif; ?>
                    </h1>
                    <div class="btn btn-outline-success btn-lg-sm ">1</div>
                    <div class="btn btn-outline-success btn-lg-sm ">2</div>
                    <div class="btn btn-outline-success btn-lg-sm ">3</div>
                    <div class="btn btn-outline-success btn-lg-sm ">4</div>
                    <div class="btn btn-outline-success btn-lg-sm ">5</div>
                    <div class="btn btn-outline-success btn-lg-sm ">6</div>
                    <div class="btn btn-outline-success btn-lg-sm ">7</div>
                    <div class="btn btn-outline-success btn-lg-sm ">8</div>
                    <div class="btn btn-outline-success btn-lg-sm ">9</div>
                    <div class="btn btn-outline-success btn-lg-sm ">10</div>
                    <div class="btn btn-outline-success btn-lg-sm ">11</div>
                    <div class="btn btn-outline-success btn-lg-sm ">12</div>
                    <div class="btn btn-outline-success btn-lg-sm ">13</div>
                    <div class="btn btn-outline-success btn-lg-sm ">14</div>
                    <div class="btn btn-outline-success btn-lg-sm ">15</div>
                    <div class="btn btn-outline-success btn-lg-sm ">17</div>
                    <div class="btn btn-outline-success btn-lg-sm ">18</div>
                    <div class="btn btn-outline-success btn-lg-sm ">19</div>
                    <div class="btn btn-outline-success btn-lg-sm ">20</div>
                    <div class="btn btn-outline-success btn-lg-sm ">21</div>
                    <div class="btn btn-outline-success btn-lg-sm ">22</div>
                    <div class="btn btn-outline-success btn-lg-sm ">23</div>
                    <div class="btn btn-outline-success btn-lg-sm ">24</div>
                    <div class="btn btn-outline-success btn-lg-sm ">25</div>
                </div>
                </form>
            </div>
            <hr>
            <div class="textcontent container">
                <h2>作品簡介</h2>
                <span><?=$rowA["vedio_span"]?></span>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </div>
</body>
<script src="./_js/barrage.js"></script>
<script typet="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script>
var i = 1;
function next(){
i++;
//步骤2：获取页面元素
var next = document.getElementById("nImg");
//步骤3：更改元素的src属性
next.src = "img/"+i+".png";
next.style.width = "33px";
if(i==2){
i=0;
} 
}
</script>

</html>