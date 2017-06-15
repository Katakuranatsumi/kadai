<?php

$id = $_GET["id"];

//2.DB接続など    
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}    
    
$update = $pdo->prepare("DELETE FROM gs_user_table WHERE id=:id");
$update->bindValue(':id', $id, PDO::PARAM_INT);
$status = $update->execute();

 if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
 }else{
  header("Location: select2.php");
  exit;
 }

?>