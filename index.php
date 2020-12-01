<?php

require_once("dbConnect.php");

$result = mysqli_query($link,"select name");
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
            <!-- 旋轉木馬 -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/WebBanner_ 200531_1.png " class="d-block w-100 " alt="... ">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/WebBanner_200522_1.png " class="d-block w-100 " alt="... ">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/WebBanner_200518_1.jpg " class="d-block w-100 " alt="... ">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/WebBanner_200528_1.png " class="d-block w-100 " alt="... ">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/WebBanner_200520_1.jpg " class="d-block w-100 " alt="... ">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/WebBanner_200511_2.jpg " class="d-block w-100 " alt="... ">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/WebBanner_200516_3.jpg " class="d-block w-100 " alt="... ">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true "></span>
                    <span class="sr-only ">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            <!-- card -->
            <div class="container ">
                <h1 class="ld ld-bounce ">動漫人氣TOP10</h1>
                <div class="card-group row ">
                    <div class="card col-6 ">
                   
                    <div class="card-body ">
                            <a href="ghost.php"><img src="./img/card01.jpg " alt=" " class="img-fluid "></a>
                          
                            <div>
                                <h5>鬼滅之刃</h5>
                            </div>
                         
                        </div>

                    </div>

                    <div class="card col-6 ">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card02.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>進擊的巨人 第三季(下)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6 ">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card03.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>一拳超人 (第一季)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6 ">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card04.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>海賊王</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="float: right; ">
                    <a href="anime.php">
                        <h4>看更多</h4>
                    </a>
                </div>

                <br>
                <br>
                <br>
                <h1 class="ld ld-bounce ">韓劇人氣TOP10</h1>
                <div class="card-group row ">
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card05.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>皮諾丘</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card06.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>主君的太陽</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card07.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>我的大叔</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card08.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>W － 兩個世界</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="float: right; ">
                    <a href="# ">
                        <h4>看更多</h4>
                    </a>
                </div>
                <br>
                <br>
                <br>
                <h1 class="ld ld-bounce ">大陸人氣TOP10</h1>
                <div class="card-group row ">
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card09.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>致我們單純的小美好</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card10.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>琅琊榜</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card11.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>三生三世十里桃花</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card12.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>錦衣之下</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="float: right; ">
                    <a href="# ">
                        <h4>看更多</h4>
                    </a>
                </div>
                <br>
                <br>
                <br>

                <h1 class="ld ld-bounce ">其他</h1>
                <div class="card-group row ">
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card13.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>牠</h5>
                            </div>
                        </div>

                    </div>
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card14.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>美人魚</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card15.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>復仇者聯盟4</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6">
                        <div class="card-body ">
                            <a href="# "><img src="./img/card16.jpg " alt=" " class="img-fluid "></a>
                            <div>
                                <h5>Running Man</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="float: right; ">
                    <a href="# ">
                        <h4>看更多</h4>
                    </a>
                </div>
                <br>
                <br>
                <br>
            </div>
            <!-- 電梯 -->
            <div class="elevator ">
                <button class="btn ">
                    <a href="# "><img src="./img/remote-control.png " alt=" "></a>
                </button>

            </div>
            <?php include("footer.php"); ?>
        </div>

    </div>


</body>


</html>