<?php
include 'include/header.php';
$userid = $array['userid'];
$sql = "SELECT change_room_request.new_category, change_room_request.new_building_no, change_room_request.new_room_no, user.category, user.building_no, user.room_no FROM change_room_request INNER JOIN user ON user.userid = change_room_request.userid;";
$result = $con->query($sql);
$row = $result->fetch();
?>
<div>
  <div class="row m-0 pt-5 pb-5">
    <div class="col-md-6 m-auto py-5 border-bg">
      <div>
        <div class="text-center pb-0 border-bottom mb-3">
          <h2 class="text-color font-weight-bold">Change Room Report</h2>
        </div>
        <div>
          <div class="row d-flex mt-4 ">
            <div class=" col-md-6 d-flex  m-auto pt-5 pb-5 justify-content-around">
              <div>
                <p>From:</p>
                <div class="bg-text m-2">
                  <p class="p-1">Category: <?php echo $row['category']; ?></p>
                </div>
                <div class="bg-text m-2">
                  <p class="p-1">Building: <?php echo $row['building_no']; ?></p>
                </div>
                <div class="bg-text m-2">
                  <p class="p-1">Room: <?php echo $row['room_no']; ?></p>
                </div>
              </div>
              <div>
                <p>To:</p>
                <div class="bg-text m-2">
                  <p class="p-1">Category: <?php echo $row['new_category']; ?></p>
                </div>
                <div class="bg-text m-2">
                  <p class="p-1">Building: <?php echo $row['new_building_no']; ?></p>
                </div>
                <div class="bg-text m-2">
                  <p class="p-1">Room: <?php echo $row['new_room_no']; ?></p>
                </div>
              </div>

            </div>
          </div>
          <div class="text-center w-75 m-auto">
            <p class="label_text">Please Provide The Report To The Administrator</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'include/footer.php';
?>