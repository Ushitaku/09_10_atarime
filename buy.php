<?php
session_start();
include("functions.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>お買い上げ</title>
</head>

<body>
    <h1>お買い上げありがとうございました！</h1>
    <img src="img/atarime_02.png" alt="">
    <button class="button" type="submit" onclick="location.href='index.php'">トップに戻る</button>
    <script type="text/javascript" src="js/font.js"></script>
</body>

</html>