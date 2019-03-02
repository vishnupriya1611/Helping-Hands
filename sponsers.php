<?php
require "header.php";
require "navbar.html";
?>

<label>Sport : </label>
<select id="sport" onchange="load();" class="rounded">
<option selected disabled value=''>--select--</option>
<option value='vollyball'>VollyBall</option>
<option value='tennis'>Tennis</option>
<option value='cricket'>Cricket</option>
<option value='kabaddi'>Kabaddi</option>
<option value='athletics'>Athletics</option>
<option value='chess'>Chess</option>
</select>

<script>
function load(){
	var sport=document.getElementById('sport').value;
	var xhttp=new XMLHttpRequest();
	xhttp.open('POST','get_sports.php',true);
  	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			document.getElementById('out').innerHTML=this.responseText;
		}
	};
	xhttp.send('sport='+sport+'&table=sponsers');
}
<?php
if(isset($_SESSION['login'])){
	require_once 'connect.php';
	$q="select sports from sportsmen where mail='".$_SESSION['login']."';";
	$res=mysqli_query($conn,$q);
	if($res and $res->num_rows!=0){
		$res=mysqli_fetch_assoc($res);
		$sports=array('vollyball'=>1,'tennis'=>2,'cricket'=>3,'kabaddi'=>4,'athletics'=>5,'chess'=>6);
		echo "document.getElementById('sport').selectedIndex='".$sports[$res['sports']]."';";
		echo "load();";
	}
}
?>

</script>
<div id='out'></div>