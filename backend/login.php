<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
   
    <title>Login</title>
</head>
<body>
    <form action="/backend/login_procss.php" method="post">
        <input type="text" name="id" placeholder="id를 입력하세요">
        <input type="password" name="password" placeholder="비밀번호를 입력해주세요">
        
        <button>전송</button>
    </form>
</body>
</html>