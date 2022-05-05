		<?php
			include 'head.php';
		?>
		<div class="w-80 m-auto"> 
			<div class="row m-0 pt-5 pb-5 align-items-center">
				<div class="col-md-6 m-auto pt-5 pb-5 border-bg">
					<div class="row justify-content-around">
						<div class="col-md-4 text-center">
							<div>
								<div class="border-bg mb-4 resident fs-25">
									<p>Administrator</p>
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
								<a href="Administrator Home Page/booking_request.php" class="text"><button class="btn btn-org">Booking<br> Requests</button></a>
							</div>
							<div class="mb-3">
								<a href="Administrator Home Page/Cancel_Room_Requests.php" class="text"><button class="btn btn-org">Cancel Room<br> Requests</button></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<a href="Administrator Home Page/change_room_request.php" class="text"><button class="btn btn-org">Change Room <br>Requests</button></a>
							</div>
							<div class="mb-3">
								<a href="Administrator Home Page/maintenance_requests.php" class="text"><button class="btn btn-org">Maintenance<br> Requests</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			include 'footer.php';
		?>