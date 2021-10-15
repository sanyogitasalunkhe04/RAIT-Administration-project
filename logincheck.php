<?php
include('connect.php');


$user=$_POST['username'];
$pass=$_POST['password'];

$query="select UserName from tblUserMaster where UserName='$user'";
$result=mssql_query($query);
$r = mssql_fetch_array($result);
if(empty($r))
{
	echo "username not exist";
}
else
{
	$query="select Passwrd from tblUserMaster where UserName='$user'";
	$result=mssql_query($query);
	$r = mssql_fetch_array($result);
	if($pass!=$r["Passwrd"])
	{
		echo "wrong Password";
	}
	else
	{
		$query="select UserName,Passwrd from tblUserMaster where Username='$user' AND passwrd='$pass'";
		$result=mssql_query($query);
		$r = mssql_fetch_array($result);
		if(empty($r))
		{		
			echo "username Password mismatch";
		}
		else
		{
			session_start();
			$_SESSION['username']=$user;
			$query="select UserId,LevelId from tblUserMaster where UserName='$user'";
			$result=mssql_query($query);
			$r=mssql_fetch_array($result);
			$_SESSION['uid']=$r['UserId'];
			$_SESSION['levelid']=$r['LevelId'];
			echo $_SESSION['levelid'];
		}
	}
	
}

?>