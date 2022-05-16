<?php
include 'include/header.php';

$array = $_SESSION['data'];
$userid = $array['userid'];

$sql = "SELECT * FROM booking_request WHERE userid = '$userid' ORDER BY created_date DESC;";
$result = $con->query($sql);
$booking_request = $result->fetchAll();


$sql = "SELECT * FROM cancle_room_request WHERE userid = '$userid' ORDER BY created_date DESC;";
$result = $con->query($sql);
$cancle_room_request = $result->fetchAll();

$sql = "SELECT * FROM change_room_request WHERE userid = '$userid' ORDER BY created_date DESC;";
$result = $con->query($sql);
$change_room_request = $result->fetchAll();

$sql = "SELECT * FROM maintainence_request WHERE userid = '$userid' ORDER BY created_date DESC;";
$result = $con->query($sql);
$maintainence_request = $result->fetchAll();

$final = array_merge($booking_request, $cancle_room_request, $change_room_request, $maintainence_request);

if (!empty($final)) {
  $price = array();
  foreach ($final as $key => $row) {
    $price[$key] = strtotime($row['created_date']);
  }
  array_multisort($price, SORT_DESC, $final);
  // $final = array_reverse($final);
}


?>
<div>
  <div class="row m-0 pt-5 pb-5">
    <div class="col-md-6 m-auto pt-5 pb-5 border-bg">
      <div>
        <div class="text-center pb-0 border-bottom mb-3">
          <h2 class="text-color font-weight-bold">View Requests</h2>
        </div>
        <?php
        if (!empty($final)) { ?>
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

                <?php
                foreach ($final as $key => $value) {
                  $date = str_replace(" 00:00:00", "", $value['created_date']);
                  $id = $value['ID'];
                  if (isset($value['building_no'])) {
                    $type = "Booking Room";
                  } elseif (isset($value['new_building_no'])) {
                    $type = "Change Room";
                  } elseif (isset($value['concern'])) {
                    $type = "Request Maintenance";
                  } elseif (isset($value['reason'])) {
                    $type = "Cancel Room";
                  }

                  if ($value['status'] == 0) {
                    $status = "Pending";
                    $link = "-";
                  } elseif ($value['status'] == 1) {
                    $status = "Accepted";
                    if ($type == "Booking Room") {
                      $link = "<a target='_blank' href='Booking_Approved_Report_pdf.php?bookrequestid=$id'><img style='width:30px;' src='../../image/attachment.png'></a>";
                    }
                    if ($type == "Change Room") {
                      $link = "<a target='_blank' href='Change_Room_Approved_Report_pdf.php?bookrequestid=$id'><img style='width:30px;' src='../../image/attachment.png'></a>";
                    }
                    if ($type == "Request Maintenance") {
                      $link = "<a target='_blank' href='Request_Maintenance_Approved_Report_pdf.php?maintenanceid=$id'><img style='width:30px;' src='../../image/attachment.png'></a>";
                    }
                    if ($type == "Cancel Room") {
                      $link = "<a target='_blank' href='Cancel_Room_Approved_Report_pdf.php?cancelid=$id'><img style='width:30px;' src='../../image/attachment.png'></a>";
                    }
                  } else {
                    $status = "Rejected";
                    $link = "-";
                  }
                ?>
                  <tr>
                    <th><?= $date ?></th>
                    <td><?= $type ?></td>
                    <td><?= $status ?></td>
                    <td><?= $link ?></td>
                  </tr>

                <?php  }
                ?>
              </tbody>
            </table>
            <div class="d-flex justify-content-center">
              <a href="../student.php"><button class="btn btn-colo box-sh mx-1 w-1">Back</button></a>
            </div>
          </div>
        <?php  } else { ?>
          <div>
            <h2 class="text-color font-weight-bold text-center py-3">There Is No Requests Submitted.</h2>
            <div class="d-flex justify-content-center">
              <a href="../student.php"><button class="btn btn-colo box-sh mx-1 w-1 p-7-30">Back</button></a>
            </div>
          </div>
        <?php  } ?>



      </div>
    </div>
  </div>
</div>
<?php
include 'include/footer.php';
?>