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
              <h2 class="text-color font-weight-bold">Cancel Room Approval Report</h2>
            </div>
            <div>
              <div class="text-center pb-0 mb-3">
                <h2 class="fs-25">Your request has been approved</h2>
              </div>
              <table class="m-auto">
                <tr>
                  <td class="pr-3">
                    <div class="px-3">
                      <p class="p-1">To Cancel The Room :</p>
                    </div>
                  </td>
                  <td>
                    <div class="mt-5">
                      <div class="bg-text ">
                        <p class="p-1">Category:</p>
                      </div>
                      <div class="bg-text ">
                        <p class="p-1">Building:5</p>
                      </div>
                      <div class="bg-text px-3">
                        <p class="p-1">Room:5</p>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <div class="text-center pb-0 my-3 w-75 m-auto">
                <label class="label_text">Please Provide The Report To The Administrator.</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'include/footer.php';
    ?>