<!DOCTYPE html>
<html class="loginhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<!--<link rel="stylesheet" href="css/main.css" />-->
<link  rel="stylesheet" href="sample.css02.css">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

<header>
  <nav class="logintitle">ログインしてください</nav>
</header>
<img src="img/main_58599_33270_detail.jpg" width="375" height="250" class="logionpicture">
<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
<div class="loginform">
<p class="loginfont">
ID:<input type="text" name="lid" />
</p>
<p class="loginfont">
PW:<input type="password" name="lpw" />
</p>
</div>
<input type="submit" value="ログイン" class="loginbutton" />
</form>


</body>
</html>