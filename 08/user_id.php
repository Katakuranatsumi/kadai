<?php
//共通で使うものを別ファイルにしておきましょう。
//DB接続関数（PDO）
//SQL処理エラー
//XSS:htmlspecialchars
?>
<!DOCTYPE html>
<html lang="ja" class="indexhtml">
<head>
  <meta charset="UTF-8">
  <title>ユーザー情報登録</title>
  <link href="sample.css02.css" rel="stylesheet">
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<h2 class="favbook">まずはあなたの情報を登録しましょう！</h2>

<form method="post" action="insert2.php">
  <div class="jumbotron">
   <div>
     <label class="bookname1">あなたの名前：<input type="text" name="name" style="font-size:20px;"></label>
     
     <br>
     <label class="writername1">あなたのid：<input type="text" name="lid" style="font-size:20px;"></label>
     <br>
     
     <label class="bookURL1">あなたのパスワード：<input type="text" name="lpw" style="font-size:20px;"></label>
     <br>
     
<div class="kind">
     <p class="bookname1">一般の人</p><input type="radio" name="kanri_flg" value="0" class="button"></div>
     
 <div class="kind">
      <p class="bookname1">管理者</p><input type="radio" name="kanri_flg" value="1" class="button"></div>
     
    
<div class="user">  
      <p class="bookname1">使用中</p><input type="radio" name="life_flg" value="0" class="button"></div>
      <div class="user">
      <p class="bookname1">使用しなくなった</p>
       <input type="radio" name="life_flg" value="1" class="button"></div>
        
         <button type="submit" value="送信" class="datasubmit">送信</button>
</div>
</div>
</form>

<form action="hiyoshi.php">
<button type="submit" value="送信" class="bookname1">トップページに移動する</button>
</form>
<form action="select2.php">
<button type="submit" value="送信" class="godata">データ一覧を見る</button>
</form>

<div class="modoru2"><a href="hiyoshi.php">はじめに戻る</a></div>

<!-- Main[End] -->


</body>
</html>
