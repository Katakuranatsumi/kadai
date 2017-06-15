<?php
$id = $_GET["id"];

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
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
    </div>
  </nav>
</header>


<h2 class="favbook">データを更新させよう！</h2>

<form method="post" action="bm_update2.php">
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

<!-- Main[End] -->


</body>
</html>
