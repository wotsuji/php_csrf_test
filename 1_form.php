<?php

// デバッグ用
error_reporting(-1);            // 「-1」= 全てのPHPエラーを出力する
ini_set('display_errors', '1'); // 1 = 画面にエラーを表示する

// 初期処理
session_start();

// ログイン状態を作る（ログインセッションを作成する）
$_SESSION['login_id'] = '00001';

?>
<html>
<head>
<title></title>
</head>
<body>
<br>
（CSRF脆弱性がある状態）<br>
<h1>入力画面</h1>
<form action="./1_action.php" method="post">
<input type="text" name="txt"></input>
<input type="submit"></input>
</form>
<br>
</body>
</html>