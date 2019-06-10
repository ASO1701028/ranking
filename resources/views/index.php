<!-- test帝豪！！！！  -->
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false) {
    if ($_REQUEST['view'] == 'pc') {
        readfile('index_pc.html');
    }
}
?>
<html lang="top">
    <!-- 背景の色 -->
    <head>
        <!-- top.cssを参照 -->
        <link rel="stylesheet" type="text/css" href="top.css"
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>TOP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <!-- マスコット -->
    <div align="center">
        <form method="post">
            <span style="line-height: 200%">
                <!-- 空白 -->
                <?php
                for ($i=0;$i<1;$i++){
                    echo "<br/>";
                }
                ?>
                <font color="#FFFFFF"; size="7">Instant Ranking</font><br>
                <!-- 空白 -->
                <?php
                for ($i=0;$i<2;$i++){
                    echo "<br/>";
                }
                ?>
                <img src="hukurou.png" width="340" height="470"><br>
            </span>
            <!-- 空白 -->
            <?php
                for ($i=0;$i<3;$i++){
                    echo "<br/>";
                }
            ?>
            <!-- 新規登録ボタン -->
            <input class="button" type="submit" value="新規登録"><br>
            <!-- 空白 -->
            <?php
            for ($i=0;$i<2;$i++){
                echo "<br/>";
            }
            ?>
            <!-- ログインボタン -->
            <input class="button" type="submit" value="ログイン"><br>
        </form>
    </div>
</html>

