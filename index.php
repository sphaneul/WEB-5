<?php session_start();
if(!isset($_SESSION['ID']) || !isset($_SESSION['PW'])) {
    header('location: login.php');}?>

<!DOCTYPE html>
<html>
<head>
  <title>INDEX</title>
</head>

<body>
  <h1>BLOG</h1>
<?php
$ID = $_SESSION['ID'];
$PW = $_SESSION['PW'];
echo "ID :($ID) PW :($PW) 상태로 로그인 하였습니다.";
        ?>
        <form>
        <input type="button" name="write" value="글쓰기" onclick="location.href='post.html'">
        <input type="button" name="logout" value="로그아웃" onclick="location.href='logout.php'">
</form>
</body>
</html>
