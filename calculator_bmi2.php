<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="contact1">
		
			<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtw33HguinFObHFeS-8fKf9w2Gni3r4ssYF3BLEkutTlwXCdb3xg" alt="IMG">
			</div>

			<form class="contact1-form validate-form"action=calculator_bmi2 method=post>
				<span class="contact1-form-title">
					HITUNG BERAT BADAN IDEAL ANDA
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<span class="label-input100">Berat Badan (Kg)</span>
					<input class="input1" type="text" name="berat" placeholder="Input" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<span class="label-input100">Tinggi Badan (m)</span>
					<input class="input1" type="text" name="tinggi" placeholder="Input" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required>
					<span class="shadow-input1"></span>
				</div>

				<!-- <div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>
 -->
				<<!-- div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Apakah Berat Badan Anda Ideal"></textarea>
					<span class="shadow-input1"></span>
				</div>
 -->
				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn"type="submit" name="hitung" value="hitung">
						<span>
							Lihat Hasilnya
							<i class="fa fa-long-arrow-right"aria-hidden="true"></i>
						</span>
					</button>
				</div>
				</form>

		 	<?php
				if(!empty($_POST['hitung'])) { 
			    $berat = $_POST['berat'];
			    $tinggi = $_POST['tinggi'];

			    function bmi($berat,$tinggi) {
			        $bmi = $berat/($tinggi*$tinggi);
			        return $bmi;
			    }   

			    $bmi = bmi($berat,$tinggi);

			    if ($bmi <= 18.5) {
			        $output = "UNDERWEIGHT";
			        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
			        $output = "NORMAL WEIGHT";
			        } else if ($bmi > 24.9 AND $bmi<=29.9) {
			        $output = "OVERWEIGHT";
			        } else if ($bmi > 30.0) {
			        $output = "OBESE";
			    }
			    echo "Your BMI value is  " . $bmi . "<br>  and you are : "; 
			    echo "$output";
			}
			?>

			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
