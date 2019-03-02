<?php
require "header.php";
require "navbar.html";
?>

<label>Course : </label>
<select id="course" onchange="load();" class="rounded">
<option selected disabled value=''>--select--</option>
<option value="primary">Primary</option>
<option value='secondary'>Secondary</option>
<option value='inter'>Intermediate</option>
<option value='ug'>Under Graduate</option>
<option value='pg'>Post Graduate</option>
</select>

<label>Percentage :</label>
<input type=number min=0 max=100 name='percentage' id='percentage' onchange="load();">
<script>
function load(){
	var course=document.getElementById('course').value;
	var percentage=document.getElementById('percentage').value;
	if(course=='' || percentage==''){
		return;
	}
	var xhttp=new XMLHttpRequest();
	xhttp.open('POST','get_edu.php',true);
  	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			document.getElementById('out').innerHTML=this.responseText;
		}
	};
	xhttp.send('course='+course+'&percentage='+percentage+'&table=edu_inst');
}
<?php
if(isset($_SESSION['login'])){
	require_once 'connect.php';
	$q="select edu,percentage from stud where mail='".$_SESSION['login']."';";
	$res=mysqli_query($conn,$q);
	if($res and $res->num_rows!=0){
		$res=mysqli_fetch_assoc($res);
		$courses=array('primary'=>1,'secondary'=>2,'inter'=>3,'ug'=>4,'pg'=>5);
		echo "document.getElementById('course').selectedIndex='".$courses[$res['edu']]."';";
		echo "document.getElementById('percentage').value='".$res['percentage']."';";
		echo "load();";
	}
}
?>

</script>
<div id='out'></div>