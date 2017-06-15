<?php
//$mail = $_GET["searchword"];

//$searchword = $_GET["searchword"];

//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('接続エラーを書くところだよ'.$e->getMessage());
}

//２．データ表示SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//$stmt1 = $pdo->prepare("SELECT * FROM gs_bm_table WHERE bookname LIKE '%$searchword%'");

//$status1 = $stmt1->execute();

//$word = "%".$mail."%";

//$stmt1->bindValue(':searchword', $searchword, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)


//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
//    $view .= '<tr>';
//    $view .= '<br>';
//    $view .= '<a href="bm_update_view.php?  id='.$result["id"].'">';
//    $view .= ' '; 
//    $view .= '<td style="background-color:whitesmoke">'.$result["bookname"].'</td>';
//    $view .= '</a>';
    $view .= '<p>';
    $view .= '<a href="bm_update_view2.php?id='.$result["id"].'">';
      
    $view .= $result["name"].
        
    "・".$result["lid"]."";
      
    $view .= "・".$result["lpw"]."";
    $view .= '</a>';
    $view .= ' '; 
      
    $view .= '<a href="delete2.php?id='.$result["id"].'">'; 
    $view .= '[削除]'; 
    $view .= '</a>'; 
    $view .= '</p>';
      
//    $view .= '<td style="background-color:whitesmoke">';
//    $view .= ' ';
//    $view .= '<a href="bm_update_view.php?id='.$result["id"].'">'.$result["writername"].'</a>';
//    $view .= '</td>';
//      
//    $view .= '<td style="background-color:whitesmoke">';
//    $view .= ' ';
//    $view .= '<a href="bm_update_view.php?id='.$result["id"].'">'.$result["bookURL"].'</a>';
//    $view .= '</td>';
//      
//    $view .= '<td style="background-color:whitesmoke">';
//    $view .= ' ';
//    $view .= '<a href="bm_update_view.php?id='.$result["id"].'">'.$result["bookcoment"].'</a>';
//    $view .= '</td>';
//      
//    $view .= '<td>'; 
//    $view .= ' '; 
//    $view .= '<a href="delete.php?id='.$result["id"].'>'; 
//    $view .= '[削除]'; 
//    $view .= '</a>';
//    $view .= '</td>'; 
//    $view .= '</tr>';
      
//    $view .= '<td style="background-color:whitesmoke">'.$result["bookname"].'</td>';
//    $view .= '</a>';
//    $view .= '<td style="background-color:whitesmoke">'.$result["writername"].'</td>';
//    $view .= '<td style="background-color:whitesmoke">'.$result["bookURL"].'</td>';
//    $view .= '<td style="background-color:whitesmoke">'.$result["bookcoment"].'</td>';
//    $view .= '</a>';
      
  }

}


//$view1="";
//if($status1==false){
//  //execute（SQL実行時にエラーがある場合）
//  $error = $stmt1->errorInfo();
//  exit("ErrorQuery:".$error[2]);
//
//}else{
//  //Selectデータの数だけ自動でループしてくれる
//  while( $result = $stmt1->fetch(PDO::FETCH_ASSOC)){
//    $view1 .= '<tr>';
//    $view1 .= '<td>'.$result["bookname"].'</td>';
//    $view1 .= '<td>'.$result["writername"].'</td>';
//    $view1 .= '<td>'.$result["bookURL"].'</td>';
//    $view1 .= '<td>'.$result["bookcoment"].'</td>';
//    $view1 .= '</tr>';
//      
//  }
//
//}

?>


<!DOCTYPE html>
<html lang="ja" class="selecthtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link href="sample.css02.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!--
<h1 class="bookdatatitle">〜本のデータ一覧〜</h1>
<h2 class="bookserch">本の名前であいまい検索をする</h2>
<form action="search.php" method="get">
     <div class="searchform"><input type="text" size="40" name="searchword" class="searchword" style="font-size:25px;">
        <button id="btn" class="kensaku2">検索</button>
     </div>
    </form>
    
<h2 class="bookserch">作者名であいまい検索をする</h2>
<form action="search2.php" method="get">
     <div class="searchform"><input type="text" size="40" name="searchword1" class="searchword" style="font-size:25px;">
        <button id="btn" class="kensaku2">検索</button>
     </div>
    </form>
-->
    
<!--
    <table class="kekka">
    <th style="background-color:#5f6527">本の名前</th>
    <th style="background-color:#f2dae8">作者の名前</th>
    <th style="background-color:#d1bada">本のURL</th>
    <th style="background-color:#c1ab05">感想</th>
    <th style="background-color:#d1bada">削除</th></table>
-->
   <h2>ユーザーデータ一覧！</h2>
    <div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
<!-- Main[End] -->
<div class="modoru">
<a href="user_id.php" >ユーザーデータ登録画面に戻る</a>
<a href="hiyoshi.php" >トップページに戻る</a>
</div>
</body>
</html>
