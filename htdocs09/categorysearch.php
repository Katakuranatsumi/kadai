<?php
//共通で使うものを別ファイルにしておきましょう。
session_start();
session_regenerate_id();

$searchword2 = $_GET["searchword2"];

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('接続エラーを書くところだよ'.$e->getMessage());
}

$stmt2 = $pdo->prepare("SELECT * FROM gs_bm2_table WHERE category LIKE '%$searchword2%'");

$status2 = $stmt2->execute();

$view2="";
if($status2==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt2->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt2->fetch(PDO::FETCH_ASSOC)){
    $view2 .= '<tr>';
    $view2 .= '<td
    style="background-color:whitesmoke">'.$result["bookname"].'</td>';
    $view2 .= '<td
    style="background-color:whitesmoke">'.$result["writername"].'</td>';
    $view2 .= '<td
    style="background-color:whitesmoke">'.$result["bookURL"].'</td>';
    $view2 .= '<td
    style="background-color:whitesmoke">'.$result["bookcoment"].'</td>';
    $view2 .= '</tr>';
      
  }

}
?>

<!DOCTYPE html>
<html lang="ja" class="searchhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link href="sample.css02.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
  <h2 class="namekekka">カテゴリー検索結果！</h2>
<div class="writersearchname">
 <?=$_SESSION["name"]?>さん、欲しい本は見つかりましたか？
</div>
 <img src="img/daefa5e2.jpg" class="writersearchpicture">
  <div class="kekka2">
    <table>
    <th style="background-color:#5f6527">本の名前</th>
    <th style="background-color:#f2dae8">作者の名前</th>
    <th style="background-color:#d1bada">本のURL</th>
    <th style="background-color:#c1ab05">感想</th>
    <?=$view2?></table>
    </div>
<!-- Main[End] -->
<!--
    <form action="select.php" method="get">
        <input type="text" name="searchword">
        <button id="btn">検索</button>
    </form>
-->
<div class="modoru1"><a href="loginselect.php">検索画面に戻る</a>
<a href="hiyoshi.php">はじめに戻る</a>
</div>
<form action="logout.php">
<button class="writersearchlogout">ログアウトする</button></form>
</body>
</html>
