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
</html><?php
    session_start();
    $conn=mysqli_connect('localhost','root','sunlove8421!','hack');
    $hashedPassword = password_hash($_POST['makepassword'], PASSWORD_DEFAULT);
    echo $hashedPassword;
   
    $sql = "
    INSERT INTO user
    (email, password, id)
    VALUES('{$_POST['makeemail']}', '{$hashedPassword}', '{$_POST['makeid']}'
    )";
    $result = mysqli_query($conn, $sql);
    if ($result === false) {
        echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    } else {
    ?>
        <script>
            alert("회원가입이 완료되었습니다");
            location.href = "index.html";
        </script>
    <?php
    }
    ?>