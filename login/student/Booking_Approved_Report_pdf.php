<?php
    include 'include/header.php';
    $userid = $array['userid'];
		$sql = "SELECT * FROM booking_request WHERE userid = '$userid' and status = 1";
		$result = $con->query($sql);
    $row = $result->fetch();
 
    ?>
    <div>
      <div class="row m-0 pt-5 pb-5">
        <div class="col-md-6 m-auto pt-5 pb-5 border-bg">
          <div>
            <div class="text-center pb-0 border-bottom mb-3">
              <h2 class="text-color font-weight-bold">Booking Approved Report</h2>
            </div>
            <div>
              <table class="m-auto">
                <tr>
                  <td class="pr-3">
                    <div class="px-3">
                      <p class="p-1">Your Booking For:</p>
                    </div>
                  </td>
                  <td>
                    <div>
                      <div class="bg-text">
                        
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="pr-3">
                    <div class="px-3">
                      <p class="p-1">Building:</p>
                    </div>
                  </td>
                  <td>
                    <div>
                      <div class="bg-text ">
                        <p class="p-1"><?php echo $row['building_no']; ?></p>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="pr-3">
                    <div class="px-3">
                      <p class="p-1">Room:</p>
                    </div>
                  </td>
                  <td>
                    <div>
                      <div class="bg-text ">
                        <p class="p-1"><?php echo $row['room_no']; ?></p>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="pr-3">
                    <div class="px-3">
                      <p class="p-1">category:</p>
                    </div>
                  </td>
                  <td>
                    <div>
                      <div class="bg-text ">
                        <p class="p-1"><?php echo $row['category']; ?></p>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <div class="text-center pb-0 my-3 w-75 m-auto">
                <label class="label_text">Please Has Been Approved Provide The Document To The Administrator.
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'include/footer.php';
    ?>