<?php
include("index.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<title>signup page</title>
	<style>
		.container {
			margin-top: 50px;
		}
	</style>
</head>

<body>


	<div class="container">
		<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">please sign up page <small>It's free!</small></h3>
					</div>
					<div class="panel-body">
						<form role="form" action="login_from.php" method="POST" id="anchor" name="achor">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">


									<div class="form-group">
										<input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="First Name" required>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="Last Name" required>
									</div>
								</div>
							</div>

							<div class="form-group">
								<input type="text" name="username" id="username" class="form-control input-sm" placeholder="username" required>
							</div>


							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
							</div>

							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="passqq" id="pass" class="form-control input-sm" placeholder="Confirm Password" required>
									</div>
								</div>
							</div>
							<div>


							</div>

							<input type="submit" value="Register" class="btn btn-info btn-block" id="submit">
                              <div id="damo"></div>
						</form>
            

					</div>
				</div>
			</div>
		</div>
	</div>


	<script>
		$("#submit").on("click", function(e) {
			e.preventDefault();
			let firstname = document.getElementById("firstname").value;
			let lastname = document.getElementById("lastname").value;
			let username = document.getElementById("username").value;
			let email = document.getElementById("email").value;
			let pass = document.getElementById("password").value;
			let cpass = document.getElementById("pass").value;
			let postData = {

				fname: firstname,
				lname: lastname,
				uname: username,
				email: email,
				pass: pass,
				cpass: cpass,
			};


			if (email == "") {

				document.getElementById("damo").innerHTML = "Enter a vaild email";
			} else if (firstname && lastname == "") {


				document.getElementById("damo").innerHTML = "Enter a vaild Name";
			} else if (username == "") {
				document.getElementById("damo").innerHTML = "Enter a vaild username";
			} else if (pass && cpass != "" && pass == cpass) {

				$.ajax({
					url: "login_from.php",
					type: "Post",
					data: postData,
					success: function(data) {
					if (data == 1) {

							document.getElementById("damo").innerHTML = "this username already exit "
						} else {
							if (data != 1) {
								document.getElementById("damo").innerHTML = "your account has been created"
								window.location.href = "login.php";

							}
						}
					}
				});
			}else{

				document.getElementById("damo").innerHTML = "Enter valid password"

			}










		})
	</script>

</body>

</html>


<?php
/* sesstion_start();
if (!isset($_SESSION['fname'])) {
	if (isset($_REQUEST['username']) || isset($_REQUEST['lastname']) || isset($_REQUEST['email']) || isset($_REQUEST['password'])) {
		$fname = $_REQUEST['first_name'];
		$lname = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];
		$pass = $_REQUEST['password'];
		$_SESSION['fname'] = $fname;
		$_SESSION['lname'] = $lname;
		$_SESSION['email'] = $email;
		$_SESSION['pass'] = $pass;

		header("location:welcome.php");
	}
}
*/

?>