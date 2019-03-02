<?php session_start();
?>
	<head>
		<title>HelpingHands</title>
		<!--<meta name="viewport" content="width=1280,initial-scale=1">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
#footer{
    background-image: url('https://startupschool.ac/wp-content/uploads/2018/06/Footer_Background-Image-1024x268.png') ;
			background-position: center top;
			background-repeat:  no-repeat;
			background-attachment: top;
			background-size:100% 100%;
}
@media screen and (max-width: 600px) {
  #tag{
  		font-size:5vw;
}
}

</style>
	</head>
	<body class="container-fluid">
		<div class="row  bg-success " >
			<div class="col-lg-2 col-xs-12" style="width:150px">
				<center><img src="http://helpinghandsforthehopeless.org/wp-content/uploads/2016/02/HHH_logo_HighRes_clear.png" width="150px" height="150px"></center>
			</div>
			<div class="col-lg-8">
				<h1 style="font-style:italic;font-weight:900;font-family:Georgia;font-size:5vw;text-align:center;text-indent: -15px;" class="m-2">HELPING HANDS</h1>
				<h6 style="font-style:italic;font-weight:900;font-family:Georgia;color:yellow;text-align:center;text-indent:-150px;float: right;" id="tag">- ENLIGHTENMENT OF LIFE</h6>
			</div>
			<div class="col-lg-2 p-2">
			<center>
			<?php
			if(isset($_SESSION['login']))echo $_SESSION['login'];
			else echo "guest";
			?>
			</center>
			</div>
		</div>
