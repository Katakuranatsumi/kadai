<?php

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('接続エラーを書くところだよ'.$e->getMessage());
}

//２．データ表示SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<tr>';
    $view .= '<br>';
    $view .= '<td style="background-color:whitesmoke">'.$result["bookname"].'</td>';
    $view .= '<td style="background-color:whitesmoke">'.$result["writername"].'</td>';
    $view .= '<td style="background-color:whitesmoke">'.$result["bookURL"].'</td>';
    $view .= '<td style="background-color:whitesmoke">'.$result["bookcoment"].'</td>';
    $view .= '</tr>';
      
  }

}
?>

<!DOCTYPE html>
<html lang="ja" class="hiyoshihtml">
<head>
   <meta                   name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="UTF-8">
<link rel="stylesheet" href="sample.css02.css">
  <title>フォーム：GET</title>
</head>
<body id="body">

<h1 class="title">本だ( ´ ▽ ` )ﾉ</h1>
<div class="image-crossfader">
 
  <div class="image-crossfader-inner">
  </div>
  <div class="image-crossfader-inner">
  </div>
  <div class="image-crossfader-inner">
  </div>
  <div class="image-crossfader-inner">
  </div>
  <div class="image-crossfader-inner">
  </div>
  <div class="image-crossfader-inner">
  </div>
  <div class="image-crossfader-inner">
  </div>
  <div class="image-crossfader-inner">
  </div>
  <div class="image-crossfader-inner">
  </div>
  
</div>
<h2 class="hiyoshititle">〜本のデータ一覧〜</h2>
<table class="kekka">
    <th style="background-color:#5f6527">本の名前</th>
    <th style="background-color:#f2dae8">作者の名前</th>
    <th style="background-color:#d1bada">本のURL</th>
    <th style="background-color:#c1ab05">感想</th><?=$view?></table>
    
<div class="hiyoshibutton">
<form action="user_id.php">
<button class="touroku1">ユーザー登録画面に進む</button>
</form>
<form action="input_data.php" >
<button class="kensaku1">好きな芸能人を答える</button>
</form> 
<form action="login.php">
<button class="login1">
ログイン登録画面に進む
</button>    
</form>
</div>
<div class="gomap">
<a href="sekaibungaku.html">世界にはこんな本もあるよ！</a>
</div>
</body>


<script src="js/jquery-2.1.3.min.js"></script>

<script>
    
var elInner, duration, defaultIndex, switchImage;
elInner = document.getElementsByClassName('image-crossfader-inner');
duration = 5000;
defaultIndex = 0;
switchImage = function(next) { 
  var current = next ? (next - 1) : elInner.length - 1;
  elInner[current].classList.remove('is-visible');
  elInner[next].classList.add('is-visible');
  next = (++next < elInner.length) ? next : 0;
  setTimeout(switchImage.bind(this, next), duration);
};
window.onload = switchImage.bind(this, defaultIndex);
       
</script>
</html>

