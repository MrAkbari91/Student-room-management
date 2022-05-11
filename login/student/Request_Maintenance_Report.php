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
          <h2 class="text-color font-weight-bold">Request Maintenance Request</h2>
        </div>
        <div class="w-75 m-auto text-center">
          <label class="label_text py-3">Your Request Has Been Sent To The Administrator.</label>
          <div class="row m-0">
            <div class="col-md-12 d-flex justify-content-center">
              <div class="mb-3">
                <a href="Student Home page/View_Requests.php" class="text"><button class="btn btn-org">View Requests</button></a>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <a href="Request_Maintainence.php"><button class="btn btn-colo box-sh mx-1 w-1">Back</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'include/footer.php';
?>