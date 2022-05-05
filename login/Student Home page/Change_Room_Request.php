    <?php
		  session_start();
		  include 'include/header.php';
		  $array = $_SESSION['data'];
	
    ?>
		<div>
			<div class="row m-0 pt-5 pb-5">
				<div class="col-md-6 m-auto pt-5 pb-5 border-bg">
					<div>
						<div class="text-center pb-0 border-bottom mb-3">
							<h2 class="text-color font-weight-bold">Room Change Request</h2>
						</div>
						<div>
						<form action="insert.php" method="post">
								<table class="m-auto">
									<tr>
										<td class="pr-3">
											<label class="btn-colo" for="Category">Category</label>
											<input type="hidden" name="booking_page">
										</td>
										<td class="pl-3">
											<select class="selct-type" id="Category" name="Category">
												<option value="With Roommate">With Roommate</option>
												<option value="With outRoommate">Without Roommate</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="pr-3">
											<label for="Building" class="btn-colo">Building</label>
										</td>
										<td class="pl-3">
											<select class="selct-type" id="Building" name="Building" onclick="selectroom()">
												<option value="">Select building</option>
												<option value="1">Building 1</option>
												<option value="2">Building 2</option>
												<option value="3">Building 3</option>
												<option value="4">Building 4</option>
												<option value="5">Building 5</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="pr-3">
											<label class="btn-colo">Room</label>
										</td>
										<td class="pl-3">
											<select class="selct-type" name="Room" id="Room">

											</select>
										</td>
									</tr>
									<tr class="text-center pt-5">
										<td colspan="2" class="pt-5">
											<input type="submit" value="book" name="change_room" class="btn btn-colo box-sh mx-1 w-1">
											<a href="../student.php"class="btn btn-colo box-sh mx-1 w-1">Exit</a>
										</td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function selectroom(){
				var conceptName = document.getElementById("Building").value;
				if(conceptName == "1"){
					var i=1;
					var txt =""
					for(i=1;i<=20;i++){
						txt += "<option value="+[i]+">Room "+[i]+"</option>";
					}
					document.getElementById("Room").innerHTML = txt;
				}else if(conceptName == "2"){
					var i=1;
					var txt =""
					for(i=21;i<=40;i++){
						txt += "<option value="+[i]+">Room "+[i]+"</option>";
					}
					document.getElementById("Room").innerHTML = txt;
				}else if(conceptName == "3"){
					var i=1;
					var txt =""
					for(i=41;i<=60;i++){
						txt += "<option value="+[i]+">Room "+[i]+"</option>";
					}
					document.getElementById("Room").innerHTML = txt;
				}else if(conceptName == "4"){
					var i=1;
					var txt =""
					for(i=61;i<=80;i++){
						txt += "<option value="+[i]+">Room "+[i]+"</option>";
					}
					document.getElementById("Room").innerHTML = txt;
				}else if(conceptName == "5"){
					var i=1;
					var txt =""
					for(i=81;i<=100;i++){
						txt += "<option value="+[i]+">Room "+[i]+"</option>";
					}
					document.getElementById("Room").innerHTML = txt;
				}
			}
		</script>
		<?php
	      include 'include/footer.php';
	  	?>