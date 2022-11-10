<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <form action="singup_procss.php">
        <input type="text" name="makeid" id="ID" placeholder="생성할 id를 입력">
        <input type="email" name="makeemail" id="mail"placeholder="email을 입력">
        <input type="password" name="makepassword"id="PW" placeholder="생성할 비밀번호를 입력">
        <script>
            const pushAll= function(){
                let userNewId = document.querySelector("#ID");
                let userNewEmail = document.querySelector("#mail");
                let userNewPw = document.querySelector("#PW");
                let a = 0;
                
                if(userNewId.value==""){

                  alert("ID 를 입력해주세요.");
                  document.getElementsByName("makeid").focus();
                 
                }
                if(userNewEmail.value==""){
                  alert("email을 입력해주세요.");
                  document.getElementsByName("makeemail").focus();
                  a = 1;
    
                }
                if(userNewPw.value == ""){
                  alert("비밀번호를 입력해주세요.");
                  document.getElementsByName("makepassword").focus();
                  a = 1;
                }
            }
        </script>
        <button id = "maker" onclick="pushAll();">전송</button>
     
    </form>
</body>
</html>
