<?php

// デバッグ用
error_reporting(-1);            // 「-1」= 全てのPHPエラーを出力する
ini_set('display_errors', '1'); // 1 = 画面にエラーを表示する

// 初期処理
session_start();

// ログイン確認
if (isset($_SESSION['login_id'])) {
  $login_id = $_SESSION['login_id'];
} else {
  echo '<br><h1>NG：ログインされていません。</h1>';
  die();
}
?>
<html>
<head>
<title></title>
</head>
<body>
<br>
（CSRF脆弱性がある状態）<br>
<h1>処理実行</h1>
ログインID「<?php echo $login_id ?>」を確認しました。ログインが確認されているので下記を処理します。<br>
<br>
フォーム入力値「<?php echo htmlspecialchars($_REQUEST['txt']) ?>」<br>
<br>
上記の値でデータベースを更新しました。<br>
<br>
<br>
</body>
</html>
