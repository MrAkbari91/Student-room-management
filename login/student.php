		<?php
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
							<?php if($array['user_status'] !== "Resident"){ ?>
								<div class="row">
									<div class="col-6">
										<div class="bg-text">
											<p class="p-1">Building: 0</p>
										</div>
									</div>
									<div class="col-6">
										<div class="bg-text">
											<p class="p-1">Room: 0</p>
										</div>
									</div>
								</div>
							<?php }else{ ?>
								<div class="row">
									<div class="col-6">
										<div class="bg-text">
											<p class="p-1">Building: <?=$array['building_no']?></p>
										</div>
									</div>
									<div class="col-6">
										<div class="bg-text">
											<p class="p-1">Room: <?=$array['room_no']?></p>
										</div>
									</div>
								</div>
							<?php } ?>
								
						</div>
						<div class="col-md-4 text-center">
							<div>
								<p class="font-weight-bold">Status</p>
								<div class="border-bg mb-4 resident">
									<p><?php echo $array['user_status'];?></p>
								</div>
								<a href="logout.php" class="btn btn-colo box-sh sign-out">Sign Out</a>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-6 m-auto pt-5 pb-5">
					<div class="row m-0">
						<?php if(isset($_GET['roomfull'])){ ?>
							<div class="col-md-12">
								<p class="text-center bg-danger text-white p-3"> Room is FULL!</p>
							</div>
						<?php } ?>

						<?php if(isset($_GET['bookfailed'])){ ?>
							<div class="col-md-12">
								<p class="text-center bg-danger text-white p-3"> You already have room booked.</p>
							</div>
						<?php } ?>

						<?php if(isset($_GET['changeroomfailed']) || isset($_GET['cancelroomfailed']) || isset($_GET['maintainencefailed'])){ ?>
							<div class="col-md-12">
								<p class="text-center bg-danger text-white p-3"> Please Book the room first.</p>
							</div>
						<?php } ?>

						<div class="col-md-6">
							<div class="mb-3">
								<?php if($array['user_status'] == "Resident"){ ?>
									<a href="#" disabled class="text grayback btn btn-org">Booking<br> Requests</a>
								<?php }else{ ?>
									<a href="Student/booking_scrren.php" class="text btn btn-org">Booking<br> Requests</a>
								<?php } ?>
							</div>

							<div class="mb-3">
								<?php if($array['user_status'] == "Resident"){ ?>
									<a href="Student/Cancel_Room_Request.php" class="text btn btn-org">Cancel Room<br> Requests</a>
								<?php }else{ ?>
									<a href="#" class="text grayback btn btn-org">Cancel Room<br> Requests</a>
								<?php } ?>
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3">
								<?php if($array['user_status'] == "Resident"){ ?>
									<a href="Student/Change_Room_Request.php" class="text btn btn-org">Change Room <br>Requests</a>
								<?php }else{ ?>
									<a href="#" class="text grayback btn btn-org">Change Room <br>Requests</a>
								<?php } ?>
							</div>

							<div class="mb-3">
								<?php if($array['user_status'] == "Resident"){ ?>
									<a href="Student/Request_Maintainence.php" class="text btn btn-org">Maintence<br> Requests</a>
								<?php }else{ ?>
									<a href="#" class="text grayback btn btn-org">Maintence<br> Requests</a>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="row m-0">
						<div class="col-md-12 d-flex justify-content-center">
							<div class="mb-3">
								<a href="Student/View_Requests.php" class="text"><button class="btn btn-org">View <br>Requests</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			include 'footer.php';
		?>