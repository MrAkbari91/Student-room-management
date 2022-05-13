<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/project/dbcon.php');
	if(isset($_SESSION['isadminLogin']) && $_SESSION['isadminLogin']){
		header("Location: /login/administrator.php");
		exit();
	}
	if(isset($_SESSION['isstudentLogin']) && $_SESSION['isstudentLogin']){
		header("Location: /login/student.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<main>
	<div class="bg-color pb-3 pt-3">
		<div class="d-flex justify-content-around text-center align-items-center boder-w p-3">
			<div>
				<img src="image/download.jpeg" class="w-75" alt="logo">
			</div>
			<div>
				<h2 class="text-white"> Jubail University College <br> Dormitory system</h2>
			</div>
			<div>
				<img src="image/rightimg.png" class="w-75" alt="rightimg">
			</div>
		</div>
	</div>
		
	</table>
		<div>
			<div class="row m-0 pt-5 pb-5">
				<div class="col-md-6 m-auto pt-5 pb-5 border-bg">
					<div>
						<div>
							<form method="post" action="login.php">
								<table class="m-auto">
									<?php
										if(isset($_GET['usertype']) && $_GET['usertype'] == "no"){ ?>
											<tr>
												<td class="pr-3" colspan="2">
													<p class="text-center bg-danger text-white p-3"> Please select User type.</p>
												</td>
											</tr>
									<?php	}
									?>
									<?php
										if(isset($_GET['login']) && $_GET['login'] == "no"){ ?>
											<tr>
												<td class="pr-3" colspan="2">
													<p class="text-center bg-danger text-white p-3">Invalid Username Password.</p>
												</td>
											</tr>
									<?php	}
									?>
									<tr>
										<td class="pr-3">
											<label class="btn-colo" for="u_type">User Type</label>
										</td>
										<td class="pl-3">
											<select class="selct-type" id="u_type" name="user_type">
											    <option value="">Select Type</option>
											    <option value="Administrator">Administrator</option>
											    <option value="Student">Student</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="pr-3">
											<label for="u_name" class="btn-colo">User Name</label>
										</td>
										<td class="pl-3">
											<input type="text" name="u_name" id="u_name" required>
										</td>
									</tr>
									<tr>
										<td class="pr-3">
											<label class="btn-colo" for="password">Password</label>
										</td>
										<td class="pl-3">
											<input type="password" name="password" id="password" required>
										</td>
									</tr>
									<tr class="text-center pt-5">
										<td colspan="2" class="pt-5">
											<input type="submit" class="btn btn-colo box-sh" id="login" name="submit" value="Log In">
										</td>
									</tr>
								</table>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>