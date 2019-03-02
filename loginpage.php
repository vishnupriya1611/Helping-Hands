<?php
	require "header.php";
	//echo "<body>";
if(isset($_SESSION['login'])){
	session_unset();
}
if(isset($_POST["login_request"]))
	{
		require_once "connect.php";
		$q="select pwd from ".$_POST['ltype']." where mail='".$_POST['mail']."';";
		$res=mysqli_query($conn,$q);
        if(!$res )echo "<script>alert(\"Please Enter valid mail ".$q."\");</script>";
		else{
			$res=mysqli_fetch_assoc($res);
			if($res['pwd']!=$_POST['pwd'])
				echo "<script>alert(\"Please Enter valid Password\");</script>";
		else{
			$_SESSION['login']=$_POST['mail'];
			header("Location:home.php");
		}
		}
	}
?>
<br>
	<div class="container">
	<form action="loginpage.php" method=POST>
		<div class="row form-group">
			<div class="col-lg-2">Login type:</div>
			<div class="col-lg-10"><select class="form-control" name='ltype' required>
				<option selected value='stud'>Student</option>
				<option value="sportsmen">Sportsmen</option>
			</select></div><br>
		</div>
		<div class="row form-group">
			<div class="col-lg-2">Mail:</div>
			<div class="col-lg-10"><input type=email class="form-control" name="mail"  required></div><br>
		</div>
		<div class="row form-group">
			<div class="col-lg-2">Password:</div>
			<div class="col-lg-10"><input type=password class="form-control" name="pwd"  required></div><br>
		</div>
		
		
		</div>
		<center>
		<div class="form-group row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4"><input type="SUBMIT" name="login_request" value="LOGIN" class="btn btn-primary">
			</div>
		
		</div>
		<div class="form-group row">
		<div class="col-lg-12">Click here to 
			<a href="register.php">Register</a>
		</div>
	</div>
			<div class="col-lg-4"></div>
	</center>
	</form>
