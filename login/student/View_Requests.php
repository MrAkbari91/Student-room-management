    <?php
      include 'include/header.php';
      $userid = $array['userid'];


      $book_sql = "SELECT * FROM booking_request where userid = '$userid';";
      $book_result = $con->query($book_sql);
      $book_row = $book_result->fetch();

      $change_sql = "SELECT count(userid) FROM change_room_request where userid = '$userid';";
      $change_result = $con->query($change_sql);
      $change_row = $change_result->fetch();
      
      $cancle_sql = "SELECT count(userid) FROM cancle_room_request where userid = '$userid';";
      $cancle_result = $con->query($cancle_sql);
      $cancle_row = $cancle_result->fetch();
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
                  <?php if($book_row) {?>
                  <tr>
                    <th><?php echo $book_row['created_date'];?></th>
                    <td>Change Room</td>
                    <td>Accepted</td>
                    <td><a href="Change_Room_Approved_Report_pdf.php">pdf</a></td>
                  </tr>
                  <?php } ?>
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