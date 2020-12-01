<?php
   require_once("dbConnect.php");
    error_reporting(0) ;


//    每日更新訊息
    $cc=date("N");
    echo $cc;

    switch($cc){
        case 7:
            $text = <<<SqlQuery
            select  name from vedio where updatetable =7
            SqlQuery;
            $ddd = mysqli_query($link, $text);
            mysqli_close($link);
        break;
        case 6:
            $text = <<<SqlQuery
            select  name from vedio where updatetable =6
            SqlQuery;
            $ddd = mysqli_query($link, $text);
            mysqli_close($link);
        break;
        case 5:
            $text = <<<SqlQuery
            select  name from vedio where updatetable =5
            SqlQuery;
            $ddd = mysqli_query($link, $text);
            mysqli_close($link);
        break;
        case 4:
            $text = <<<SqlQuery
            select  name from vedio where updatetable =4
            SqlQuery;
            $ddd = mysqli_query($link, $text);
            mysqli_close($link);
        break;
        case 3:
            $text = <<<SqlQuery
            select  name from vedio where updatetable =3
            SqlQuery;
            $ddd = mysqli_query($link, $text);
            mysqli_close($link);
        break;
        case 2:
            $text = <<<SqlQuery
            select  name from vedio where updatetable =2
            SqlQuery;
            $ddd = mysqli_query($link, $text);
            mysqli_close($link);
        break;
        case 1:
            $text = <<<SqlQuery
            select  name from vedio where updatetable =1
            SqlQuery;
            $ddd = mysqli_query($link, $text);
            mysqli_close($link);
        break;
    }

    // 輸入關鍵字搜尋
  
   $input = $_POST['search'];
   if (isset($_POST["btnsearch"])){
      header("Location:search.php?name={$input}");
     } 
// 使用者登入介面切換

if (isset($_COOKIE["userName"])){
    $sUserName = $_COOKIE["userName"];
}else{
    $sUserName = "Guest";
}
?>



<div class="sky">
    <div class="sky-container">
        <div class="logo">
            <a href="index.php"> <img src="./img/LOGO.png" alt=""></a>
        </div>
     
        <form method="post"  action="">
        <div class="search">
            <input type="text" name="search" id="search">
            <label for="search"> <button  name="btnsearch"><img src="./img/baseline_search_white_18dp.png" alt="" ></a></button></label>
        </div>
        </form> 

        <ul class="list">
                
            <?php if ($sUserName == "Guest") : ?>
                <li>
                    <a href="login.php"><img src="./img/baseline_favorite_border_black_18dp.png" alt=""> </a>
                </li>
            <?php else : ?>
                <li>
                    <a href="favorite.php"><img src="./img/icons8-heart-outline-48.png" alt="" style="height:40px;"></a>
                </li>
            <?php endif; ?>
            <?php if ($sUserName == "Guest") : ?>
                <li>
                    <a href="login.php"><img src="./img/baseline_local_post_office_black_18dp.png" alt=""> </a>
                </li>
            <?php else : ?>
                <li>
                    <div id="flip"><img src="./img/email.png" alt="" style="height:40px;"></div>
                    <div id="panel">
                        <h5 class="notice">通知</h5>
                        <div class="msg ">
                        <?php while ($row = mysqli_fetch_assoc($ddd)) : ?>
                            <h4><?= $row["name"]?></h3>
                            <?php endwhile;?>
                            
                        </div>
                        <a href="updatetable.php">
                            <h5 class="notice">時間管理大師</h5>
                        </a>
                    </div>
                <?php endif; ?>
                </li>
                <?php if ($sUserName == "Guest") : ?>
                    <li>
                        <a href="login.php"><img src="./img/baseline_perm_identity_black_18dp.png" alt=""> </a>
                    </li>
                <?php else : ?>
                    <li>
                    <a href="updateLogin.php "><img src="./img/icons8-customer-48.png" alt="" style="height:35px;"> </a>
                    </li>
                    <li>
                    <a href="login.php?logout=1"><img src="./img/logout.png" alt="" style="height:35px;"> </a>
                    </li>
                <?php endif; ?>
                
        </ul>
        <div class="hammanu">
            <nav class="menu">
                <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
                <label class="menu-open-button" for="menu-open">
                    <span class="hamburger hamburger-1"></span>
                    <span class="hamburger hamburger-2"></span>
                    <span class="hamburger hamburger-3"></span>
                </label>
                <?php if ($sUserName == "Guest") : ?>

                    <a href="login.php" class="menu-item"><img src="./img/baseline_favorite_black_18dp2.png" alt=""> </a>

                <?php else : ?>

                    <a href="favorite.php" class="menu-item"><img src="./img/baseline_favorite_border_black_18dp.png" alt="" ></a>

                <?php endif; ?>



                <?php if ($sUserName == "Guest") : ?>

                    <a href="login.php" class="menu-item"><img src="./img/baseline_local_post_office_black_18dp2.png" alt=""> </a>

                <?php else : ?>

                    <a href="updatetable.php" class="menu-item"><img src="./img/baseline_local_post_office_black_18dp.png" alt=""> </a>

                <?php endif; ?>



                <?php if ($sUserName == "Guest") : ?>

                    <a href="login.php" class="menu-item"><img src="./img/baseline_perm_identity_black_18dp2.png" alt=""> </a>

                <?php else : ?>

                    <a href="login.php?logout=1" class="menu-item"><img src="./img/baseline_perm_identity_black_18dp.png" alt="" > </a>

                <?php endif; ?>


            </nav>
        </div>




    </div>

</div>
<!-- 導覽列 -->
<div class="">
    <nav>
        <ul class="navBar ">
            <li>
                <a href="index.php">首頁</a>
            </li>
            <li>
                <a href="# ">陸劇</a>
            </li>
            <li>
                <a href="# ">韓劇</a>
            </li>
            <li>
                <a href="anime.php?value=1">動漫</a>
            </li>
            <li>
                <a href="# ">觀看紀錄</a>
            </li>
            <li>
                <a href="# ">收藏</a>
            </li>
            <li>
                <a href="# ">問題回報</a>
            </li>

        </ul>
    </nav>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>