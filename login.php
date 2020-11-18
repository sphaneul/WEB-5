<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="check.php">
            <p>아이디: <input type="text" name="ID" /></p>
            <p>비밀번호: <input type="password" name="PW" /></p>
            <p><input type="submit" value="로그인" onclick="location.href='check.php'" /></p>
            <p><input type="button" value="회원가입" onclick="location.href='signup.html'"/></p>
        </form>
    </body>
</html>
