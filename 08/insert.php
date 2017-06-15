<?php
//1. POSTデータ取得
$bookname = $_POST["bookname"];
$bookURL = $_POST["bookURL"];
$writername = $_POST["writername"];
$bookcoment = $_POST["bookcoment"];





//2. DB接続します
    
try { $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('接続エラーを書くところだよ:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table( id, bookname, writername, bookURL, bookcoment, bookdate)
VALUES(NULL, :bookname, :writername, :bookURL, :bookcoment, sysdate())");

$stmt->bindValue(':bookname', $bookname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookURL', $bookURL, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookcoment', $bookcoment, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':writername', $writername, PDO::PARAM_STR);


$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;

}

?>
