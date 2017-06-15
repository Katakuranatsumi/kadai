<?php
$id = $_GET["id"];

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  $row = $stmt->fetch();
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="sample.css02.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="bm_update.php">
 <input type="hidden" name="id" value="<?=$id?>">
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
<!-- Main[End] -->


</body>
</html>






