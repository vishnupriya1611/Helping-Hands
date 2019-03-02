<?php
//require "header.php";
if(isset($_POST['sports_academy_post'])){
  session_start();
  require_once "connect.php";
    $image=$_FILES['image'];
    $target_dir = "uploads/sports_academy/";
    $_POST['VollyBall']=($_POST['VollyBall']=='on')?'1':'0';
    $_POST['Tennis']=($_POST['Tennis']=='on')?'1':'0';
    $_POST['Cricket']=($_POST['Cricket']=='on')?'1':'0';
    $_POST['Kabaddi']=($_POST['Kabaddi']=='on')?'1':'0';
    $_POST['Athletics']=($_POST['Athletics']=='on')?'1':'0';
    $_POST['Chess']=($_POST['Chess']=='on')?'1':'0';
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
  $q="insert into sports_academy values('".$_POST['email']."','".$_POST['name']."',".$_POST['VollyBall'].",".$_POST['Tennis'].",".$_POST['Cricket'].",".$_POST['Kabaddi'].",".$_POST['Athletics'].",".$_POST['Chess'].",'".$_POST['about']."','".$_POST['phone']."','".basename($image["name"])."');";
else
  $q="insert into sports_academy values('".$_POST['email']."','".$_POST['name']."',".$_POST['VollyBall'].",".$_POST['Tennis'].",".$_POST['Cricket'].",".$_POST['Kabaddi'].",".$_POST['Athletics'].",".$_POST['Chess'].",'".$_POST['about']."','".$_POST['phone']."',NULL);";
   $res=mysqli_query($conn,$q);
    if($res===false){
    $msg.='posting failed';
    $_SESSION['msg']=$msg;
    }
    else{
      $_SESSION['msg']=$msg.'Successfully posted';
    }
        $_SESSION['opt']='3';
    header("Location:post.php");
    //if($msg!='')    echo "<script>alert('".$msg."');</script>";

  }
 ?>

<br><br>
<form  method="post"   action="sports_academy_post.php" enctype="multipart/form-data"  >
  <div class="form-group">
    <div class="col-lg-2">Name : </div>
    <div class="col-lg-10"><input type=text class="form-control" name="name" required></div>
  </div>
    <div class="form-group">
    <div class="col-lg-2">About: </div>
    <div class="col-lg-10"><input type=text class="form-control" name="about"  required></div>
  </div>
   <div class="form-group">
    <div class= "col-lg-2">Sports interested:</div>
    <div class='row'>
    <div class="col-lg-4"></div>
    <div class="col-lg-2"><input type=checkbox class="form-control" name="VollyBall"></div>
    <label class="col-lg-6" style="text-align: left;">VollyBall</label>
    </div>
    <div class='row'>
    <div class="col-lg-4"></div>
    <div class="col-lg-2"><input type=checkbox class="form-control" name="Tennis"></div>
    <label class="col-lg-6" style="text-align: left;">Tennis</label>
    </div>
    <div class='row'>
    <div class="col-lg-4"></div>
    <div class="col-lg-2"><input type=checkbox class="form-control" name="Cricket"></div>
    <label class="col-lg-6" style="text-align: left;">Cricket</label>
    </div>
    <div class='row'>
    <div class="col-lg-4"></div>
    <div class="col-lg-2"><input type=checkbox class="form-control" name="Kabaddi"></div>
    <label class="col-lg-6" style="text-align: left;">Kabaddi</label>
    </div>
    <div class='row'>
    <div class="col-lg-4"></div>
    <div class="col-lg-2"><input type=checkbox class="form-control" name="Athletics"></div>
    <label class="col-lg-6" style="text-align: left;">Athletics</label>
    </div>
    <div class='row'>
    <div class="col-lg-4"></div>
    <div class="col-lg-2"><input type=checkbox class="form-control" name="Chess"></div>
    <label class="col-lg-6" style="text-align: left;">Chess</label>
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
      <div class="col-lg-4"><input type="submit" name="sports_academy_post" value="SUBMIT" class="btn btn-primary"></div>
      <div class="col-lg-4"></div>  
    </div></form>