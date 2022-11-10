<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <form action="/backend/singup_procss.php" method="post">
        <input type="text" name="makeid" placeholder="생성할 id를 입력">
        <input type="text" name="makeemail" placeholder="email을 입력">
        <input type="text" name="makepassword" placeholder="생성할 비밀번호를 입력">
        <button id = "maker">전송</button>
        <script>
            const MakeButton = document.querySelector("#maker");
            function pushAll(){
                const userNewId = document.getElementsByName("makeid")[0].value;
                const userNewEmail = document.getElementsByName("makeemail")[0].value;
                const userNewPw = document.getElementsByname("makepassword")[o].value;
                
                if((userNewId == null)||(userNewEmail==null)||(userNewPw=null)){
                  aleat("입력되지 않았습니다. 다시 입력해주세요.");
                  window.loction.reload();
                }else{
                  const userId = userNewId; //id 저장
                }
            }
            MakeButton.addEventListener('click',pushAll);
        </script>
    </form>
</body>
</html>