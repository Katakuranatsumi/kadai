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
<img src="img/animal0099.jpg" width="440" height="296" class="user_idpicture">
<form method="post" action="insert2.php">
  <div class="jumbotron">
   <div>
     <div class="bookname1">あなたの名前：<input type="text" name="name" style="font-size:20px;"></div>
     
     <br>
     <div class="writername1">あなたのid：<input type="text" name="lid" style="font-size:20px;"></div>
     <br>
     
     <div class="bookURL1">あなたのパスワード：<input type="text" name="lpw" style="font-size:20px;"></div>
     <br>
     
    <button type="submit" value="送信" class="datasubmit2">登録</button>
    
</div>
</div>
</form>

<form action="hiyoshi.php">
<button type="submit" value="送信" class="user_idhajime">トップページに移動する</button>
</form>

<!-- Main[End] -->


</body>
</html>
