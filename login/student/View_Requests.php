    <?php
    if (!isset($_SESSION)) {
			session_start();
		}
		if (isset($_SESSION['data'])) {
			$array = $_SESSION['data'];
		} else {
			echo "<script>location.href='../../index.php';</script>";
		}
      include 'include/header.php';
    ?>
    <div>
      <div class="row m-0 pt-5 pb-5">
        <div class="col-md-6 m-auto pt-5 pb-5 border-bg">
          <div>
            <div class="text-center pb-0 border-bottom mb-3">
              <h2 class="text-color font-weight-bold">View Requests</h2>
            </div>
            <div>
              <table class="table table-bordered text-center ">
                <thead>
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Request</th>
                    <th scope="col">Request Status</th>
                    <th scope="col">Report</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1/5/2022</th>
                    <td>Change Room</td>
                    <td>Accepted</td>
                    <td><a href="Change_Room_Approved_Report_pdf.php">pdf</a></td>
                  </tr>
                  <tr>
                    <th>2/5/2022</th>
                    <td>Booking Room</td>                    
                    <td>Accepted</td>
                    <td><a href="Booking_Approved_Report_pdf.php">pdf</a></td>
                  </tr>
                  <tr>
                    <th>3/5/2022</th>
                    <td>Request Maintenance</td>                    
                    <td>Accepted</td>
                    <td><a href="Request_Maintenance_Approved_Report_pdf.php">pdf</a></td>
                  </tr>
                  <tr>
                    <th>3/5/2022</th>
                    <td>Cancel Room</td>                    
                    <td>Accepted</td>
                    <td><a href="Cancel_Room_Approved_Report_pdf.php">pdf</a></td>
                  </tr>
                </tbody>
              </table>
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