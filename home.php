<html>
<?php require "header.php";
require "navbar.html";
 ?>

		<div class="row m-5">
			<div class="col-lg-12">
				<img src="images/gigm.gif" class="rounded" width="100%" height="500px" >
			</div>
		</div>
		<div class="row">
		 	<div class="col-lg-8">
		 		<center><h3 style="font-style:italic;font-weight:900;font-family:Georgia;color:blue;text-align:center;">ABOUT US</h3></center><br>
		 		<p style="text-align: justify;text-indent:45px;font-weight:500;">
		 			"Helping hands" is all about providing information about all free education institutions and free sports academies that all girl students need. This website is mainly for the girl students who are not able to make their dreams come true, also for the people who can offer their service to the needy.Helping hands works as a bridge between deprived and the contributor.
		 							<center>
								ఆపకు నీ ప్రయాణం దేనికి బయపడి<br>
								ఈ రాతిరి నీకై రగులుతూ ఎదురవుతుంది<br>
								సాగే సెలయేరు దారి తప్పకుండా నీకు బాట వేస్తుంది<br>
								కొండగాలి నువ్వు క్రుంగకుండా భుజం తడుతుంది<br>
								విశ్వమంతా తలుపు తెరిచి నిను ఆహ్వానిస్తుంది.
							</center></p><p style="text-align: justify;text-indent:45px;font-weight:500;">
								Their are many women who faced lot many problems in their life want some motivation to step in to new life , for those people "HELPING HANDS" provide some motivational persons biographies to inspire them and lead a happy life :-) .
		 		</p>
		 	</div>
		 	<div class="col-lg-4"><center>
		 			<iframe   src="https://www.youtube.com/embed/Psgd3OiGwbU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="img-fluid w-100 h-50" allowfullscreen></iframe>
		 				</center>
		 	</div>
		</div>
<?php require "footer.php" ?>
</body>
<script type="text/javascript">
<?php
if(isset($_SESSION['msg'])){
	echo "alert(\"".$_SESSION['msg']."\");";
	unset($_SESSION['msg']);
}
?>
</script>


</html>