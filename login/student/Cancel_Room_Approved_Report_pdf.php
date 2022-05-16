<?php
include 'include/header.php';

$array = $_SESSION['data'];
$userid = $array['userid'];

$sql = "SELECT * FROM user WHERE userid = '$userid'";
$result = $con->query($sql);
$userdata = $result->fetchAll()[0];

?>
<style>
  body {
    opacity: 0;
  }
</style>
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
            <p class="">User ID : <?= $userid ?></p>
            <p class="">Request ID : <?= $_GET['cancelid'] ?></p>
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
                    <p class="p-1"><?= $userdata['category'] ?></p>
                  </div>
                  <div class="bg-text ">
                    <p class="p-1">Building <?= $userdata['building_no'] ?></p>
                  </div>
                  <div class="bg-text px-3">
                    <p class="p-1">Room <?= $userdata['room_no'] ?></p>
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
</main>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<script>
  var main = document.getElementById('main');
  html2canvas(main).then(function(canvas) {
    var img = canvas.toDataURL("image/png");
    var doc = new jsPDF({
      orientation: 'landscape',
    });
    const pdfWidth = doc.internal.pageSize.width - 45;
    doc.addImage(img, 'JPEG', 20, 20, pdfWidth, 170);
    doc.save('Request Maintenance Approval Report.pdf');
  });
  setTimeout(function() {
    window.close();
  }, 3000);
</script>
</body>

</html>