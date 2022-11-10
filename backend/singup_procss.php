<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn=mysqli_connect("localhost","root","sunlove8421!","hack");//test용
    $id = $_POST['makeid'];
    $email = $_POST['makeemail'];
    $password = $_POST['makepassword'];
   
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    echo $hashedPassword;
    $sql = "
    INSERT INTO user
    (email, password, id)
    VALUES('{$email}', '{$hashedPassword}', '{$id}'
    )";
    $sql1 =  "SELECT id FROM user WHERE id='".$_POST['makeid']."'";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_num_rows($result);
    if($row>0){
      ?>
      <script>
        alert("이미 존재하는 아이디입니다. 다시 입력해주세요.");
      </script>
      <?php
      exit;
    }
    if ($result === false) {
        echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    } else {
    ?>
        <script>
            alert("회원가입이 완료되었습니다");
            location.href="/front/index.php"
        </script>
    <?php
    }
    ?>