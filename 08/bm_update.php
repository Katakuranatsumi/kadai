<?php
//1.POSTでParamを取得

$id = $_POST["id"];
$bookname = $_POST["bookname"];
$writername = $_POST["writername"];

$bookURL = $_POST["bookURL"];
$bookcoment = $_POST["bookcoment"];
//2.DB接続など

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
    
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。

$update = $pdo->prepare("UPDATE gs_bm_table SET bookname=:bookname,writername=:writername,bookURL=:bookURL,bookcoment=:bookcoment WHERE id=:id");

$update->bindValue(':id', $id, PDO::PARAM_INT);
$update->bindValue(':bookname', $bookname, PDO::PARAM_STR);
$update->bindValue(':writername', $writername, PDO::PARAM_STR);
$update->bindValue(':bookURL', $bookURL, PDO::PARAM_STR);
$update->bindValue(':bookcoment', $bookcoment, PDO::PARAM_STR);

$status = $update->execute();


$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $update->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  header("Location: select.php");
  exit;
}

?>
