<?php
//共通で使うものを別ファイルにしておきましょう。

$searchword = $_GET["searchword"];

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('接続エラーを書くところだよ'.$e->getMessage());
}

$stmt1 = $pdo->prepare("SELECT * FROM gs_bm_table WHERE bookname LIKE '%$searchword%'");

$status1 = $stmt1->execute();

$view1="";
if($status1==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt1->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt1->fetch(PDO::FETCH_ASSOC)){
    $view1 .= '<tr>';
    $view1 .= '<td
    style="background-color:whitesmoke">'.$result["bookname"].'</td>';
    $view1 .= '<td
    style="background-color:whitesmoke">'.$result["writername"].'</td>';
    $view1 .= '<td
    style="background-color:whitesmoke">'.$result["bookURL"].'</td>';
    $view1 .= '<td
    style="background-color:whitesmoke">'.$result["bookcoment"].'</td>';
    $view1 .= '</tr>';
      
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
  <h2 class="namekekka">本の名前のあいまい検索結果！</h2>
  <div class="kekka1">
    <table>
    <th style="background-color:#5f6527">本の名前</th>
    <th style="background-color:#f2dae8">作者の名前</th>
    <th style="background-color:#d1bada">本のURL</th>
    <th style="background-color:#c1ab05">感想</th>
    <?=$view1?></table>
    </div>
<!-- Main[End] -->
<!--
    <form action="select.php" method="get">
        <input type="text" name="searchword">
        <button id="btn">検索</button>
    </form>
-->
<div class="modoru1"><a href="select.php">検索画面に戻る</a>
<a href="hiyoshi.php">はじめに戻る</a>
</div>
</body>
</html>






