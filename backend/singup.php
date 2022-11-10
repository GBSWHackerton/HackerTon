<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="check.js"></script>
    <title>회원가입</title>
</head>
<body>
    <form action="singup_procss.php" method="POST" name="regiform" onsubmit="return sendit()">
        <input type="text" name="makeid" id="makeid" placeholder="생성할 id를 입력">
        <input type="email" name="makeemail" id="makeemail"placeholder="email을 입력">
        <input type="password" name="makepassword"id="makepassword" placeholder="생성할 비밀번호를 입력">
        <input type="submit" value="전송">
     
    </form>
</body>
</html>
