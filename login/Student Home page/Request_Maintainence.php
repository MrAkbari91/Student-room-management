		<?php
			include 'include/header.php';
		?>
		<div>
			<div class="row m-0 pt-5 pb-5">
				<div class="col-md-8 m-auto pt-5 pb-5 border-bg ">
					<div>
						<div class="text-center pb-0 border-bottom mb-3">
							<h2 class="text-color font-weight-bold">Request Maintainence</h2>
						</div>
						<div>						
							<table class="m-auto">
								<tr class="row">
									<td class="col-12">
										<label class="label_text" for="Category">Write Your Concern Bliefly<span class="text-danger">*</span></label>
									</td>
									<td class="col-12">

										<textarea type="text" name="textarea_txt" class="form-control" id="details" aria-describedby="basic-addon3" rows="5" cols="30"></textarea>
									</td>
								</tr>
								<tr class="text-center pt-5">
									<td colspan="2" class="pt-5">
										<a href="Request_Maintenance_Report.php"><button class="btn btn-colo box-sh mx-1 w-1">Request</button></a>
										<a href="../student.php"><button class="btn btn-colo box-sh mx-1 w-1">Exit</button></a>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			include 'include/footer.php';
		?>