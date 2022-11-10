<?php
session_start();
session_destroy();
?>
<script>
    location.href = "/front/index.php";
    alert("로그아웃　되었습니다")；
</script>