<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/front/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon/favicon.ico" type="favicon/x-icon">

  <title>Hackerton</title>
</head>
<body>
  <?php
    session_start();
    if (isset($_SESSION['userid'])){
      
      ?>
        <header>
      <div class="header">
      <ul>
        <li><a href="info.php">내 정보 보기</a></li> 
        <li><a href="/backend/logoutprocss.php">로그아웃</a></li>
      </ul>
    </div>
  </header>
  <?php
    }else{
      ?>
        <header>
    <div class="header">

      <ul>
        <li><a href="../backend/login.php">로그인</a></li>
        <li><a href="../backend/singup.php">회원가입</a></li>
      </ul>
    </div>
  </header>
  <?php
    }
  ?>

  <br><br>
  <?php
  if (isset($_SESSION['userid'])){
      
      ?>
         <a href="test.html">
        <div class="go_test">
            나의 건강상태 체크하기
        </div>
      </a>
      <br>
  <?php
    }else{
      ?>
        <a href="#" onclick="alert('로그인후 이용해주세요');">
        <div class="go_test">
            로그인 후 이용해주세요
        </div>
      </a>
      <br>
  <?php
    }
  ?>
 
      

</body>
</html>