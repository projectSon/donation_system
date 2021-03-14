<?php
	include "db.php";
	include "password.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$name = $_POST['name'];
//  $address = $_POST['address'];
//	$pos = $_POST['pos'];
	$email = $_POST['email'];

$sql = mq("select * from member where id=".$userid."'");

if ($sql) {
	echo "<script>alert('이미 존재하는 아이디입니다.'); history.back();</script>";
} else{
	$sql = mq("insert into member(id, pw, name, email) values('".$userid."','".$userpw."','".$name."','".$email."')");
}

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
