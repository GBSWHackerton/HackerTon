<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <form action="singup_procss.php" method="post">
        <input type="text" name="makeid" placeholder="생성할 id를 입력">
        <input type="text" name="makeemail" placeholder="email을 입력">
        <input type="text" name="makepassword" placeholder="생성할 비밀번호를 입력">
        <button id = "maker"></button>
        <script>
            const MakeButton = document.querySelector("#maker");
            function userId(){
                
            }
            userID.addEventListener('click',userId);
        </script>
    </form>
</body>
</html>