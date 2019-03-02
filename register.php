<!DOCTYPE html>
<?php
include "header.php";
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
function validate(){
  pwd=document.getElementsByName('pwd')[0].value;
  cpwd=document.getElementsByName('cpwd')[0].value;
  if(pwd!=cpwd){
    alert("password mismatch");
    return false;
  }
  return true;
}

</script>
<body class="container">
<center>
<label>Register type : </label>
<select id="select1" onchange="loadForm();" class="rounded">
<option selected disabled>--SELECT--</option>
<option value="stud_reg.php">Student</option>
<option value='sportsmen_reg.php'>Sportsmen</option>
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