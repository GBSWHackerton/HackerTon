<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
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
      <pre>
        <a href="/backend/info.php">내 정보 보기</a>  <a href="/backend/logoutprocss.php">로그아웃</a>
      </pre>
    </div>
  </header>
  <?php
    }else{
      ?>
        <header>
    <div class="header">

      <ul>
        <a href="../backend/login.php"><li>로그인</li></a>
        <a href="../backend/singup.php"><li>회원가입</li></a>
      </ul>
    </div>
  </header>
  <?php
    }
  ?>

  <br><br>

      <a href="test.html">
        <div class="go_test">
            나의 건강상태 체크하기
        </div>
      </a>
      <br>
      
</body>
</html>