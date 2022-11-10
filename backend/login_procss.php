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
    session_start();
    $conn=mysqli_connect('localhost','root','sunlove8421!','hack');
    $id = $_POST['id'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE id ='{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $row['id'];
    $hashedPassword = $row['password'];
    $passwordResult = password_verify($password, $hashedPassword);
    if($passwordResult == true){
        session_start();
        $_SESSION['userid'] = $row['id'];
        ?>
        <script>
            alert("로그인에 성공");
            location.href = "/front/index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("로그인에 실패하였습니다");
        location.href = "/front/index.php";
        </script>
        <?php
    }

?>