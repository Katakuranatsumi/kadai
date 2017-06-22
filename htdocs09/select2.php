<?php

session_start();
session_regenerate_id();

//0.外部ファイル読み込み
include("functions.php");

//1.  DB接続します
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");

$status = $stmt->execute();

//３．データ表示

$view="";
if($status==false){
  queryError($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="detail.php?id='.$result["id"].'">';
    $view .= h($result["name"]);
    $view .= 'さん</a>';
      
    if($_SESSION["kanri_flg"] == "1"){
    $view .= '<a href="delete.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .= '</a>';
  }
  $view .= '</p>';    
      
  }
}
?>


<!DOCTYPE html>
<html class="select2html">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="sample.css02.css">

<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
<div class="select2name">
<?=$_SESSION["name"]?>さん、こんにちは!
</div>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <h2 class="datatchiran">ユーザーデータ一覧</h2>
    </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="userdata"><?=$view?></div>
</div>
<!-- Main[End] -->
<div class="select2buttongroup">

<div>
<form action="hiyoshi.php">
<button class="select2button">はじめに戻る</button>
</form>
</div>
<div>
<form action="booktouroku.php">
<button class="select2button">本のデータ登録画面に行く</button></form>
</div>
<div>
<form action="logout.php">
<button class="select2button">ログアウトする</button></form>
</div>
</div>

</body>
</html>
