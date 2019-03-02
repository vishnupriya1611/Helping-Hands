<?php
//require "header.php";
if(isset($_POST['scholarship_post'])){
  session_start();
  require_once "connect.php";
    $image=$_FILES['image'];
    $target_dir = "uploads/scholarship/";
    if($_POST['pp_primary']=='')$_POST['pp_primary']='NULL';
    if($_POST['pp_secondary']=='')$_POST['pp_secondary']='NULL';
    if($_POST['pp_inter']=='')$_POST['pp_inter']='NULL';
    if($_POST['pp_ug']=='')$_POST['pp_ug']='NULL';
    if($_POST['pp_pg']=='')$_POST['pp_pg']='NULL';
    $target_file = $target_dir . basename($image["name"]);
    $msg='';
        $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
  if($image["tmp_name"]!=''){
      $check = getimagesize($image["tmp_name"]);
      if($check !== false ){ if (move_uploaded_file($image["tmp_name"], $target_file)===false) {
      $uploadOk=0;
    $msg.="Sory error in uploading image\n";
  }}

  else {
    $uploadOk=0;
    $msg.='File is not an image\n';
}}
else{
  $uploadOk=0;
}
if($uploadOk==1)
  $q="insert into scholarship values('".$_POST['email']."','".$_POST['name']."',".$_POST['pp_primary'].",".$_POST['pp_secondary'].",".$_POST['pp_inter'].",".$_POST['pp_ug'].",".$_POST['pp_pg'].",'".$_POST['about']."','".$_POST['phone']."','".basename($image["name"])."');";
else
  $q="insert into scholarship values('".$_POST['email']."','".$_POST['name']."',".$_POST['pp_primary'].",".$_POST['pp_secondary'].",".$_POST['pp_inter'].",".$_POST['pp_ug'].",".$_POST['pp_pg'].",'".$_POST['about']."','".$_POST['phone']."',NULL);";
   $res=mysqli_query($conn,$q);
    if($res===false){
    $msg.='posting failed';
    $_SESSION['msg']=$msg;
    }
    else{
      $_SESSION['msg']=$msg.'Successfully posted';
    }
        $_SESSION['opt']='2';
    header("Location:post.php");
    //if($msg!='')    echo "<script>alert('".$msg."');</script>";

  }
 ?>

<br><br>
<form  method="post"   action="scholarship_post.php" enctype="multipart/form-data"  >
  <div class="form-group">
    <div class="col-lg-2">Name : </div>
    <div class="col-lg-10"><input type=text class="form-control" name="name" required></div>
  </div>
    <div class="form-group">
    <div class="col-lg-2">About: </div>
    <div class="col-lg-10"><input type=text class="form-control" name="about"  required></div>
  </div>
   <div class="form-group">
    <div class= "col-lg-2">Percentage prefered:</div>
    <div class='row'>
    <label class="col-lg-4" style="text-align: center;">Primary</label>
    <div class="col-lg-6"><input type=number class="form-control" min=0 max=100 name="pp_primary"></div>
    </div>
    <div class='row'>
    <label class="col-lg-4" style="text-align: center;">Secondary</label>
    <div class="col-lg-6"><input type=number class="form-control" min=0 max=100 name="pp_secondary"></div>
    </div>
    <div class='row'>
    <label class="col-lg-4" style="text-align: center;">Intermediate</label>
    <div class="col-lg-6"><input type=number class="form-control" min=0 max=100 name="pp_inter"></div>
    </div>
    <div class='row'>
    <label class="col-lg-4" style="text-align: center;">UG</label>
    <div class="col-lg-6"><input type=number class="form-control" min=0 max=100 name="pp_ug"></div>
    </div>
    <div class='row'>
    <label class="col-lg-4" style="text-align: center;">PG</label>
    <div class="col-lg-6"><input type=number class="form-control" min=0 max=100 name="pp_pg"></div>
    </div>
    <div class="row">
      <div style="text-align: center;color: green;" class="col-lg-12">Please leave the irrelevant fields empty</div>
    </div>
  </div>
    <div class="form-group">
    <div class= "col-lg-2">Email:</div>
    <div class="col-lg-10"><input type=email class="form-control" name="email" required></div>
  </div>
  <div class="form-group">
        <div class="col-lg-2">phone : </div>
          <div class="col-lg-10"><input type=text name="phone" pattern="[0-9]+" class="form-control" required></div><br>
  </div>
  <div class="form-group">
      <div class="col-lg-2">Photo:</div>
      <div class= " custom-file">
        <div class="col-lg-10"><input type="file" class="custom-file-input" id="file2" name="image" onchange="filename('file2','filelabel2');" >
        <label class="custom-file-label" id="filelabel2">choose file</label></div>
      </div>
    </div>
  
  <br>
    <div class="form-group row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4"><input type="submit" name="scholarship_post" value="SUBMIT" class="btn btn-primary"></div>
      <div class="col-lg-4"></div>
    </div></form>