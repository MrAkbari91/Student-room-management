<?php
include 'include/header.php';

$array = $_SESSION['data'];
$userid = $array['userid'];
$bookrequestid = $_GET['bookrequestid'];
$sql = "SELECT * FROM booking_request WHERE userid = '$userid' AND id = $bookrequestid;";
$result = $con->query($sql);
$row = $result->fetchAll()[0];

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
                      <p class="p-1"><?= $row['category'] ?></p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="pr-3">
                    <label for="Building" class="btn-colo">Building</label>
                  </td>
                  <td class="pl-3">
                    <div class="bg-text">
                      <p class="p-1">Building <?= $row['building_no'] ?></p>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="pr-3">
                    <label class="btn-colo" name="Room">Room</label>
                  </td>
                  <td class="pl-3">
                    <div class="bg-text">
                      <p class="p-1">Room <?= $row['room_no'] ?></p>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="text-center p-4">
            <label class="label_text py-3">To check your Request Status please go to view requests.</label>

          </div>
          <div class="d-flex justify-content-center ">
            <a href="../student.php"><button class="btn btn-colo box-sh w-1 mt-3">Back</button></a>
            <a href="View_Requests.php" class="text pl-4"><button class="btn btn-colo box-sh w-1 mt-3">View Requests</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'include/footer.php';
?>