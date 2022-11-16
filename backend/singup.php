<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/front/singup.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="icon" href="../front/favicon/favicon.ico" type="favicon/x-icon">
    <title>회원가입</title>
</head>

<body>
    <a href="#" class="back">
            돌아가기
    </a>

    <form action="singup_procss.php" method="POST" class="Form">
        <div class="loginwrap">
            <h1>회원가입</h1>
            <div class="wrap">
                <div class="Mailclass">
                    <input type="email" name="makeemail" placeholder="이메일을 입력" class="Mail"id="mail">
                </div>
                <div class="IDclass">
                    <input type="text" name="makeid" placeholder="생성할 아이디를 입력" class="ID" id="ID">
                </div>
                <div class="PWDclass">
                    <input type="password" name="makepassword" placeholder="생성할 비밀번호를 입력" class="PWD" id="PW">
                </div>
            </div>
            <div class="button">
                <button class="maker" id="maker" onclick="pushAll();">제출</button>
            </div>
        </div>
        <script>
            const pushAll= function(){
                let userNewId = document.querySelector("#ID");
                let userNewEmail = document.querySelector("#mail");
                let userNewPw = document.querySelector("#PW");
                
                if(userNewId.value==""){
                    alert("ID 를 입력해주세요.");
                    document.getElementsByName("makeid").focus();
                    
                }
                if(userNewEmail.value==""){
                    alert("email을 입력해주세요.");
                    document.getElementsByName("makeemail").focus();
                
                }
                if(userNewPw.value == ""){
                    alert("비밀번호를 입력해주세요.");
                    document.getElementsByName("makepassword").focus();
                
                }
            }
        </script>
    </form>
</body>

</html>