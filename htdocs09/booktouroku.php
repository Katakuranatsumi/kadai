<?php
session_start();
session_regenerate_id();

?>
<!DOCTYPE html>
<html lang="ja" class="indexhtml">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
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
<h2 class="favbook">管理人さん、本の情報を入れてくださいな</h2>
<img src="img/images%202.jpeg" class="booktourokupicture">
<form method="post" action="bookinsert.php">
  <div class="jumbotron">
   <div>
     <div class="bookname1">本の名前：<input type="text" name="bookname" style="font-size:20px;"></div>
     
     <br>
     <label class="writername1">作者の名前：<input type="text" name="writername" style="font-size:20px;"></label>
     <br>
     
     <div class="bookURL1">本のURL：<input type="text" name="bookURL" style="font-size:20px;"></div>
     <br>
     
     <div class="kansou">感想:<textArea name="bookcoment" rows="4" cols="40" style="font-size:20px;"></textArea></div><br>
     
     <div class="bookcategory">本のカテゴリーは何ですか？</div>
     
     <div class="catedorybutton"><div class="iyashi">癒し系<input type="radio" value="癒されたいなぁ・・・" name="category"></div>
     <div class="shigoto">仕事頑張る系<input type="radio" value="仕事頑張りたいなぁ・・・" name="category"></div>
     <div class="enjoy">楽しみたい系<input type="radio" value="楽しみたいなぁ・・・" name="category">
     </div>
     </div>
     
     <button type="submit" value="送信" class="datasubmit">送信</button>
    </div>
  </div>
</form>
<form action="loginselect.php">
<button type="submit" value="送信" class="godata">本のデータ一覧を見る</button>
</form>

<div class="booktourokubutton">
<div>
<form action="logout.php">
<button class="booktourokurogout">ログアウトする</button></form>
</div>
<div>
<form action="hiyoshi.php">
<button type="submit" value="送信" class="booktourokuhajime">はじめに戻る</button>
</form>
</div>
</div>
<!-- Main[End] -->


</body>
</html>
