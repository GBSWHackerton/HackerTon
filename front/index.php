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
        <script>
          var log_ok = 1;
        </script>
      </pre>
    </div>
  </header>
  <?php
    }else{
      ?>
        <header>
    <div class="header">
      <pre>
        <a href="/backend/login.php">로그인</a>  <a href="/backend/singup.php">회원가입</a>
        <script>
          var log_ok = 0;
        </script>
      </pre>
    </div>
  </header>
  <?php
    }
  ?>
  <div class="chu"><img src="gochu.jpg" class="medic"></div>
  <script>
    const gotest = function(){
      if(log_ok == 1){
        location.href="../front/test.html";
      }
      else{
        location.href="../backend/login.php";
      }
    }
  </script>
  <br><br>
      <a href="#nono"onclick="gotest();">
        <div class="go_test">
            검사하러 갈거면 누르세요
        </div>
      </a>
      <br>
</body>
</html>