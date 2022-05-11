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
              <h2 class="text-color font-weight-bold">Request Maintenance approval Report</h2>
            </div>
            <div class="w-75 m-auto">
              <label class="text-center py-3 label_text">your Request has been sent to the administrator</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'include/footer.php';
    ?>