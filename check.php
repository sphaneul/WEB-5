<?php session_start();
$ID=$_POST['ID'];//ID, PW 변수
$PW=$_POST['PW'];
$con=mysqli_connect("localhost","root","kitty0809","mydb");
//mysql연결

$query="SELECT * FROM member;";
$result=mysqli_query($con, $query);
if($result->num_rows==1){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  if($row['userpw']==$pw){
    $_SESSION['userid']=$id;
    if(isset($_SESSION['userid'])){
      header('location: index.php')
    }
    else{
      echo "로그인 실패"
    }
  }
  else{
    echo "아이디 혹은 비밀번호가 잘못되었습니다."
  }
}
else{
  echo "아이디 혹은 비밀번호가 잘못되었습니다."
}
?>
