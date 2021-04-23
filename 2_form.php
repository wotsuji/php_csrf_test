<?php

// デバッグ用
error_reporting(-1);            // 「-1」= 全てのPHPエラーを出力する
ini_set('display_errors', '1'); // 1 = 画面にエラーを表示する

// 初期処理
session_start();

// ログイン状態を作る（ログインセッションを作成する）
$_SESSION['login_id'] = '00001';

// CSRF対策：トークン作成（トークンが無かった場合に作成する）
if( !isset($_SESSION['token']) ) {
    $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(24));
}

?>
<html>
<head>
<title></title>
</head>
<body>
<br>
（CSRF脆弱性を改善した状態）<br>
<h1>入力画面</h1>
<form action="./2_action.php" method="post">
<input type="text" name="txt"></input>
<input type="submit"></input><br>
<br>
トークン：<?php echo $_SESSION['token'] ?><br>
<input type="hidden" name="token" value="<?php echo htmlspecialchars($_SESSION['token']) ?>"></input>
</form>
<br>
</body>
</html>
