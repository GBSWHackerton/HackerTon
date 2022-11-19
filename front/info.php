<?php
    session_start();
    $conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    //$conn=mysqli_connect('localhost','root','sunlove8421!','hack');
    $userid = $_SESSION['userid'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Info</title>
    <link href="info.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="icon" href="../front/favicon/favicon.ico" type="favicon/x-icon">
</head>
<body>
<table>
    <thead>
        <tr>
            <th>id</th><th>날짜</th><th>병명</th><th>처방</th>
        </tr>
    </thead>
        <?php
            $sql = "SELECT * FROM result WHERE id='{$userid}'";
            $result = mysqli_query($conn, $sql);
            while( $row = mysqli_fetch_array($result)) {
            $filtered = array(
                'id' => htmlspecialchars($row['id']),
                '날짜' => htmlspecialchars($row   ['da']),
                '병명' => htmlspecialchars($row['disease']),
                '처방' => htmlspecialchars($row['prescription'])
            );
        ?>
    <tr>
        <td><?= $filtered['id'] ?></td>
        <td><?= $filtered['날짜'] ?></td>
        <td><?= $filtered['병명'] ?></td>
        <td><?= $filtered['처방'] ?></td>
    </tr>

<?php
            }
        ?>
</table>
=======
    <title>Document</title>
</head>
<body>
<table>
		<thead>
			<tr>
				<th>id</th><th>날짜</th><th>병명</th><th>처방</th>
			</tr>
		</thead>
        <?php
				$sql = "SELECT * FROM result WHERE id='{$userid}'";
				$result = mysqli_query($conn, $sql);
				while( $row = mysqli_fetch_array($result)) {
					$filtered = array(
						'id' => htmlspecialchars($row['id']),
						'날짜' => htmlspecialchars($row	['da']),
						'병명' => htmlspecialchars($row['disease']),
						'처방' => htmlspecialchars($row['prescription'])
					);
			?>
    	<tr>
				<td><?= $filtered['id'] ?></td>
				<td><?= $filtered['날짜'] ?></td>
				<td><?= $filtered['병명'] ?></td>
				<td><?= $filtered['처방'] ?></td>
			</tr>

<?php
				}
			?>
	</table>
>>>>>>> 6d7c8e8ab9011738aafdce50532c060142be437b
    <a href="/front/index.php">메인화면 돌아가기</a>
</body>
</html>