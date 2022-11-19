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
    $conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    //$conn=mysqli_connect('localhost','root','sunlove8421!','hack');
    $covid = $_POST['Covid'];
    $pneumonia = $_POST['Pneumonia'];
    $cold = $_POST['cold'];
    $flu = $_POST['flu'];
    $id = $_SESSION['userid'];
    $date = date("Y-m-d");
    if($covid == '1'){
        $sql = "INSERT INTO result(da,disease,prescription,id)
        VALUES('{$date}','Covid','가까운 병원으로 빨리 이동','{$id}')";
        $result = mysqli_query($conn, $sql);
        ?>
        <img src="/front/favicon/코로나.jpg" alt="코로나 사진">
        <?php
    }else  if($flu == '1'){
        $sql = "INSERT INTO result(da,disease,prescription,id)
        VALUES('{$date}','flu','병원으로 가급적 빨리 이동바람','{$id}')";
         $result = mysqli_query($conn, $sql);
         ?>
         <img src="/front/favicon/폐렴.png" alt="폐렴 사진">
         <?php
    }else if($pneumonia == '1'){
        $sql = "INSERT INTO result(da,disease,prescription,id)
        VALUES('{$date}','pneumonia','병원가서 입원 바람','{$id}')";
         $result = mysqli_query($conn, $sql);
         ?>
         <img src="/front/favicon/독감.png" alt="독감 사진">
         <?php
    }else if($cold == '1'){
        $sql = "INSERT INTO result(da,disease,prescription,id)
        VALUES('{$date}','cold','병원가서 약을 타거나 근처 약국에서 약틀 타먹으세요','{$id}')";
         $result = mysqli_query($conn, $sql);
         ?>
         <img src="/front/favicon/감기.png" alt="감기 사진">
         <?php
    }else{
        ?>
        <script>
        alert("값을 저장하는데 오류거 났습니다 관리자에게 문의하세요");
        location.href="/front/index.php";
      </script>
      <?php
      exit;
    }
?>
<a href="/front/index.php">메인화면으로 돌아가기</a>