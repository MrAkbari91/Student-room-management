		<?php
		if (!isset($_SESSION)) {
			session_start();
		}
		if (isset($_SESSION['data'])) {
			$array = $_SESSION['data'];
		} else {
			echo "<script>location.href='../index.php';</script>";
		}

		include 'head.php';
		$userid = $array['userid'];
		$sql = "SELECT count(userid) FROM booking_request WHERE userid = '$userid'";
		$result = $con->query($sql);
		$row = $result->fetch();
		$count = $row[0];

		?>



		<div class="w-80 m-auto">
			<div class="row m-0 pt-5 pb-5 align-items-center">
				<div class="col-md-6 m-auto pt-5 pb-5 border-bg">
					<div class="row justify-content-around">
						<div class="col-md-6">
							<div>
								<div class="bg-text">
									<p class="p-1"><?php echo $array['username']; ?></p>
								</div>
								<div class="bg-text">
									<p class="p-1"><?php echo $array['userid']; ?></p>
								</div>
								<div class="bg-text">
									<p class="p-1"><?php echo $array['email']; ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div>
								<p class="font-weight-bold">Status</p>
								<div class="border-bg mb-4 resident">
									<p><?php echo $array['user_status']; ?></p>
								</div>
								<a href="logout.php" class="btn btn-colo box-sh sign-out">Sign Out</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 m-auto pt-5 pb-5">
					<div class="row m-0">
						<div class="col-md-6">
							<div class="mb-3">
								<a href="student/booking_scrren.php" class="text btn btn-org" id="bokking_btn">Booking<br> Requests</a>
							</div>
							<div class="mb-3">
								<a href="student/Cancel_Room_Request.php" class="text btn btn-org" id="cancel_room_btn">Cancel Room <br>Requests</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<a href="student/Change_Room_Request.php" class="text btn btn-org" id="change_room_btn">Change Room <br>Requests</a>
							</div>
							<div class="mb-3">
								<a href="student/Request_Maintainence.php" class="text"><button class="btn btn-org" id="maintenence_btn">Maintenence<br> Requests</button></a>
							</div>
						</div>
					</div>
					<div class="row m-0">
						<div class="col-md-12 d-flex justify-content-center">
							<div class="mb-3">
								<a href="student/View_Requests.php" class="text"><button class="btn btn-org">View <br>Requests</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		include 'footer.php';
		?>