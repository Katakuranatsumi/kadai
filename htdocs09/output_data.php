<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="sample.css01.css">
<title>File書き込み</title>
</head>
<body>
<h1 class="midashi">みんなの意見を聞いてみよう!</h1>
<button id="button">最新データを見る</button>

<div id="resolut">  
</div>
<p class="past">↓過去のデータはこちらです↓</p>
</body>
</html>




<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');

$mail = htmlspecialchars($_GET['mail'], ENT_QUOTES, 'UTF-8');

$gender = htmlspecialchars($_GET['gender'], ENT_QUOTES, 'UTF-8');

$human = htmlspecialchars($_GET['human'], ENT_QUOTES, 'UTF-8');

$kansou = htmlspecialchars($_GET['kansou'], ENT_QUOTES, 'UTF-8');


$str = date("Y-m-d H:i:s")."文字列";

$str = $name.",".$mail.",".$gender.",".",".$human.$str;

$datas = array(
  array($name,$mail,$gender,$human,$kansou),
);


$fp = fopen('./data/data.csv', 'r');

   while(($data = fgetcsv($fp)) !== FALSE){
       
     echo '<br><img src="img/mig-4.jpeg" class="tomjeri" id="picture0">';
     echo '<br>名前:',$data[0];    
     echo '<br>MAIL:',$data[1];
     echo '<br>性別:',$data[2];
     echo '<br>好きな人:',$data[3];
     echo '<br>理由:',$data[4];
}

//$ar = array("A","B","C");
    
// var_dump($ar); 
        
//    echo '性別:',$data[2];
//    echo '好きな男性:',$data[3];   
//     echo '</p>';


fclose($fp);


$datas = array(
  array($name,$mail,$gender,$human,$kansou),
);

$fp = fopen('./data/data.csv','a');
      foreach($datas as $data){
      $line = implode(',',$data);
      fwrite($fp, $line. "\n");
}
fclose($fp);   

?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="sample.css01.css">
<title>File書き込み</title>
</head>
<body id="body1">
<div id="resolut">  
</div> 
    
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script> 
<!--<script  src="sweetalert2-master/dist/sweetalert2.min.js"></script>-->
<script>
    
  $(function(){
  var button = "#button";
      
  var resolut = "#resolut";

  var tomjeri = '<div class="resolut0"><p id="picture"><img src="img/mig-4.jpeg" class="tomjeri"></p><div class="hukidashi"><div id="balloon1-1"><p class="name0">名前:<?=$name?></p></div><div id="balloon1-2"><p class="mail0">MAIL:<?=$mail?></p></div><div id="balloon1-3"><p class="seibetsu0">性別:<?=$gender?></p></div><div id="balloon1-4"><p class="lover">好きな人:<?=$human?></p></div><div id="balloon1-5"><p class="naze0">理由:<?=$kansou?></p></div></div></div>';
      
  var tweetie = '<div class="resolut0"><p id="picture"><img src="img/cn_character_img_pc_1317404606.jpg" width="400" height="300" class="tweetie"></p><div class="hukidashi1"><div id="balloon1-6"><p class="name0">名前:<?=$name?></p></div><div id="balloon1-7"><p class="mail0">MAIL:<?=$mail?></p></div><div id="balloon1-8"><p class="seibetsu0">性別:<?=$gender?></p></div><div id="balloon1-9"><p class="lover">好きな人:<?=$human?></p></div><div id="balloon1-10"><p class="naze0">理由:<?=$kansou?></p></div></div></div>';
    
 var bucks ='<div class="resolut0"><div class="hukidashi2"><div id="balloon1-11"><p class="name0">名前:<?=$name?></p></div><div id="balloon1-12"><p class="mail0">MAIL:<?=$mail?></p></div><div id="balloon1-13"><p class="seibetsu0">性別:<?=$gender?></p></div><div id="balloon1-14"><p class="lover">好きな人:<?=$human?></p></div><div id="balloon1-15"><p class=ånaze0">理由:<?=$kansou?></p></div></div><p id="picture"><img src="img/ny7uz.jpeg" width="180" height="320" class="bucks"></p></div>';
    
 $(button).on("click",function(){
     
     var n = Math.floor(Math.random() *2+1);

     if(n == 1){
         alert("トゥウィーティが教えてくれるよ！");
         $(resolut).prepend(tweetie);   
     }
     
      if(n == 2 ){
          alert("バックスバーニーが教えてくれるよ！");
        $(resolut).prepend(bucks);  
      }
     });
});
    
</script>
</body>
</html>

