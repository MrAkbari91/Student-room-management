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
$userid = $array['userid'];

$sql = "SELECT * FROM booking_request WHERE userid = '$userid' order by userid desc;";
$result = $con->query($sql);
$row = $result->fetch();
?>
<div>
  <div class="row m-0 pt-5 pb-5">
    <div class="col-md-10 m-auto py-5 border-bg">
      <div>
        <div class="text-center pb-0 border-bottom mb-3">
          <h2 class="text-color font-weight-bold">Booking Report</h2>
        </div>
        <div>
          <div class="d-flex mt-4 D_flex">
            <div class="col-md-4 m-auto pt-5 pb-5 border-bg">
              <div class="d-flex justify-content-around">
                <div class="">
                  <div>
                    <p class="p-1">Name:</p>
                  </div>
                  <div>
                    <p class="p-1">Student Id:</p>
                  </div>
                  <div>
                    <p class="p-1">Email:</p>
                  </div>
                </div>
                <div>
                  <div class="bg-text">
                    <p class="p-1"><?php echo $array['username']; ?></p>
                  </div>
                  <div class="bg-text">
                    <p class="p-1"><?php echo $array['userid']; ?></p>
                  </div>
                  <div class="bg-text">
                    <p class="p-1"><?php echo $array['email']; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="m-auto pt-5 pb-5">
              <table class="m-auto">
                <tr>
                  <td class="pr-3">
                    <label class="btn-colo" for="Category">Category</label>
                  </td>
                  <td class="pl-3">
                    <div class="bg-text">
                      <p class="p-1"><?php echo $row['category'];?></p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="pr-3">
                    <label for="Building" class="btn-colo">Building</label>
                  </td>
                  <td class="pl-3">
                    <div class="bg-text">
                      <p class="p-1"><?php echo $row['building_no'];?></p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="pr-3">
                    <label class="btn-colo" name="Room">Room</label>
                  </td>
                  <td class="pl-3">
                    <div class="bg-text">
                      <p class="p-1"><?php echo $row['room_no'];?></p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <div class="row m-0">
                      <div class="col-md-12 d-flex justify-content-center">
                        <div class="mb-3">
                          <a href="View_Requests.php" class="text"><button class="btn btn-org">View Requests</button></a>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="d-flex justify-content-center ">
            <a href="booking_scrren.php"><button class="btn btn-colo box-sh w-1 mt-5">Back</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'include/footer.php';
?>