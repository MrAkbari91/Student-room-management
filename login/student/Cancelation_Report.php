<?php
include 'include/header.php';

$array = $_SESSION['data'];
$userid = $array['userid'];
$cancelrequestid = $_GET['cancelrequestid'];
$sql = "SELECT * FROM cancle_room_request WHERE userid = '$userid' AND ID = $cancelrequestid;";
$result = $con->query($sql);
$requestdata = $result->fetchAll()[0];

$sql = "SELECT * FROM user WHERE userid = '$userid'";
$result = $con->query($sql);
$userdata = $result->fetchAll()[0];
?>
<div>
	<div class="row m-0 pt-5 pb-5">
		<div class="col-md-6 m-auto pt-5 pb-5 border-bg">
			<div>
				<div class="text-center pb-0 border-bottom mb-3">
					<h2 class="text-color font-weight-bold warning">Cancelation Report</h2>
				</div>
				<div class="w-75 m-auto text-center">
					<div>
						<label class="label_text" for="Category">Your Cancelation Request has been sent to the administiator<span class="text-danger">*</span></label>
						<div class="row m-0">
							<div class="col-md-12 d-flex justify-content-center">
								<div class="mb-3">
									<a href="View_Requests.php" class="text"><button class="btn btn-org">View Requests</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-center">
						<a href="../student.php"><button class="btn btn-colo box-sh mx-1 w-1">Back</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'include/footer.php';
?>