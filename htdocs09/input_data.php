<?php

//$datas = array(
//  array(1,'name',100),
//  array(2,'みかん',150),
//  array(3,'いちご',300),
//);
//
//$fp =fopen('./data/data.csv','a');
//     foreach($datas as $data){
//     $line = implode(',',$data);
//     fwrite($fp, $line . "\n");
//}
//fclose($fp);     
?>



<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="sample.css01.css">
<title>File書き込み</title>
</head>
<body id="body">
<h1 class="title">あなたは誰が好き？</h1>
<form action="output_data.php" method="get">
	 <p class="font">お名前</p> <input type="text" name="name" value="名前を入れてね" class="namae">
      <p class="font">Email</p><input type="text" name="mail" value="メルアドを入れてね" class="mail">
      <p class="font">性別</p>
      
      <div class="gender0">
      <p class="font1">男性</p><p class="font2">女性</p></div>
       <div class="gender1"><input type="radio" name="gender" value="男" id="men" class="gender">
    
       <input type="radio" name="gender" value="女" id="women" class="gender"></div>
<div id="mendare">
<img src="img/43fd8c2f2a09a3ee302c7545e26e567c.jpg" >
<img src="img/cached.jpg" width="420" height="315">
<img src="img/8b7f90bb3f12ad2b3d4c98692982c93e.jpg" width="320" height="320"></div>
    
     <div class="menbutton"><p class="font3">森山未來さん</p><input type="radio" name="human" value="森山未來さん" class="morisan">
　　　　　　<p class="font4">星野源さん</p><input type="radio" name="human" value="星野源さん" id="women" class="hoshisan">
　　　　　　<p class="font5">綾野剛さん</p><input type="radio" name="human" value="綾野剛さん" class="gousan"></div>
    
    
<div id="womendore">
<img src="img/3ec284b0f7eef43b693d0f1764216532.jpg" width="400" height="280">
<img src="img/main.jpg" width="303" height="262.6" class="humipic">
<img src="img/20141118_mitsushimahikari_50.jpg" width="238" height="306">
    
</div>
<div class="womendore">
        <div class="womenbutton"><p class="font6">麻生久美子さん</p> <input type="radio" name="human"
                 value="麻生久美子さん" class="asosan">
　　　　　　       <p class="font7">二階堂ふみさん</p><input type="radio" name="human" value="二階堂ふみさん" class="humisan">
              <p class="font8">満島ひかりさん</p><input type="radio" name="human" value="満島ひかりさん" class="mitsusan"></div>
</div> 
　　　　 <p class="naze">選んだ人の好きなところを教えてください!</p>
      <textarea name="kansou" class="naze1">どうして？</textarea>
      <p>
      <button type=submit id="submit" >送信する</button></p>
    
<!--   　 <input type="submit" value="送信" class="sousin">-->
    
</form>
<!--
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
-->
</body>
</html>

