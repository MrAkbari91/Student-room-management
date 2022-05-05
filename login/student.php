		<?php
			session_start();
			include 'head.php';
			$array = $_SESSION['data'];

		?>

		<div class="w-80 m-auto"> 
			<div class="row m-0 pt-5 pb-5 align-items-center">
				<div class="col-md-6 m-auto pt-5 pb-5 border-bg">
					<div class="row justify-content-around">
						<div class="col-md-6">
							<div>
								<div class="bg-text">
									<p class="p-1"><?php echo $array['username'];?></p>
								</div>
								<div class="bg-text">
									<p class="p-1"><?php echo $array['userid'];?></p>
								</div>
								<div class="bg-text">
									<p class="p-1"><?php echo $array['email'];?></p>
								</div>
							</div>							
						</div>
						<div class="col-md-4 text-center">
							<div>
								<p class="font-weight-bold">Status</p>
								<div class="border-bg mb-4 resident">
									<p><?php echo $array['user_status'];?></p>
								</div>
								<button class="btn btn-colo box-sh sign-out">Sign Out</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 m-auto pt-5 pb-5">
					<div class="row m-0">
						<div class="col-md-6">
							<div class="mb-3">
								<a href="Student Home page/booking_scrren.php" class="text"><button class="btn btn-org">Booking<br> Requests</button></a>
							</div>
							<div class="mb-3">
								<a href="Student Home page/Cancel_Room_Request.php" class="text"><button class="btn btn-org">Cancel Room<br> Requests</button></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<a href="Student Home page/Change_Room_Request.php" class="text"><button class="btn btn-org">Change Room <br>Requests</button></a>
							</div>
							<div class="mb-3">
								<a href="Student Home page/Request_Maintainence.php" class="text"><button class="btn btn-org">Maintence<br> Requests</button></a>
							</div>
						</div>
					</div>
					<div class="row m-0">
						<div class="col-md-12 d-flex justify-content-center">
							<div class="mb-3">
								<a href="Student Home page/View_Requests.php" class="text"><button class="btn btn-org">View <br>Requests</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			include 'footer.php';
		?>