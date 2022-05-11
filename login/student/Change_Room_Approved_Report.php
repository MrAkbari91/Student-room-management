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
                <div class="bg-text px-3">
                  <p class="p-1">Building:5</p>
                </div>
                <div class="bg-text px-3">
                  <p class="p-1">Room:5</p>
                </div>
                <div class="bg-text px-3">
                  <p class="p-1">Category:</p>
                </div>
              </div>
              <div>
                <p>To:</p>
                <div class="bg-text px-3">
                  <p class="p-1">Building:5</p>
                </div>
                <div class="bg-text px-3">
                  <p class="p-1">Room:5</p>
                </div>
                <div class="bg-text px-3">
                  <p class="p-1">Category:</p>
                </div>
              </div>

            </div>
          </div>
          <div class="text-center w-75 m-auto">
            <p class="label_text">A change Request has been send to administrator</p>
            <div class="row m-0">
              <div class="col-md-12 d-flex justify-content-center">
                <div class="mb-3">
                  <a href="View_Requests.php" class="text"><button class="btn btn-org">View Requests</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center ">
            <a href="Change_Room_Request.php"><button class="btn btn-colo box-sh w-1 mt-2">Back</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'include/footer.php';
?>