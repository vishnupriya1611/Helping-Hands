<!DOCTYPE html>
<?php
include "header.php";
include "navbar.html"; 
?>
<script type="text/javascript">
function loadForm(){
	form=document.getElementById('select1').value;
	 var xmlRqst=new XMLHttpRequest();
 xmlRqst.open('POST',form,true);
 xmlRqst.onreadystatechange=function(){
  if(this.readyState==4 && this.status==200){
   document.getElementById('form').innerHTML=this.responseText;
 }
 };
 xmlRqst.send();
}
function filename(file,label){
    document.getElementById(label).innerHTML= document.getElementById(file).files[0].name;
}

</script>
<body class="container">
<center>
<label>Post type : </label>
<select id="select1" onchange="loadForm();" class="rounded">
<option selected disabled>--SELECT--</option>
<option value="edu_inst_post.php">Educational institute</option>
<option value="scholarship_post.php">Educational Sponsers</option>
<option value="sports_academy_post.php">Sport Academy</option>
<option value="sponsers_post.php">Sport Sponser</option>
</select>
</center>
<div id='form'></div>
</body>
<script type="text/javascript">
<?php

if(isset($_SESSION['opt'])){ 
	echo "document.getElementById('select1').selectedIndex='".$_SESSION['opt']."';\n";
	echo "loadForm();\n";
	unset($_SESSION['opt']);
}
if(isset($_SESSION['msg'])){
	echo "alert(\"".$_SESSION['msg']."\");";
	unset($_SESSION['msg']);
}
?>
</script>

</html>