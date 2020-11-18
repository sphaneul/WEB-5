<?php $id = $_POST['userid'];
$pw = $_POST['userpw'];
$pwa = $_POST['userpw_a'];
$name = $_POST['username'];
$gender = $_POST['usergender'];
$email = $_POST['useremail'];

if($pw!=$pwa) //비밀번호와 비밀번호 확인이 일치하는지 검사
{
echo"비밀번호와 비밀번호 확인이 일치하지 않습니다.";
echo "<a href=signup.html>회원가입</a>";
exit();
}

if($id==NULL||$pw==NULL||$name==NULL||$email==NULL){
  echo "입력하지 않은 정보가 있습니다.";
  echo "<a href=signup.html>회원가입</a>";
  exit();
}

$mysqli=mysqli_connect("localhost","root","kitty0809","mydb");
$query="select * from member where userid='$id'";
$result=mysqli_query($query);
if($result->num_rows==1){
  echo "중복된 ID입니다.";
  echo "<a href=signup.html>회원가입</a>";
  exit();
}

$signup=mysqli_query($mysqli,"insert into user_info (userid,userpw,username,useremail)
values('$id','$pw','$name','$email')");
if($signup){
  echo "회원이 되신 것을 환영합니다.";
}
?>
