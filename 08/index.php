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
<h2 class="favbook">お気に入りの本の情報を入れてね！</h2>

<form method="post" action="insert.php">
  <div class="jumbotron">
   <div>
     <label class="bookname1">本の名前：<input type="text" name="bookname" style="font-size:20px;"></label>
     
     <br>
     <label class="writername1">作者の名前：<input type="text" name="writername" style="font-size:20px;"></label>
     <br>
     
     <label class="bookURL1">本のURL：<input type="text" name="bookURL" style="font-size:20px;"></label>
     <br>
     
     <label class="kansou">感想<textArea name="bookcoment" rows="4" cols="40" style="font-size:20px;"></textArea></label><br>
     
     <button type="submit" value="送信" class="datasubmit">送信</button>
    </div>
  </div>
</form>
<form action="select.php">
<button type="submit" value="送信" class="godata">本のデータ一覧を見る</button>
</form>

<div class="modoru2"><a href="hiyoshi.php">はじめに戻る</a></div>

<!-- Main[End] -->


</body>
</html>
