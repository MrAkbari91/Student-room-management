<?php
include 'include/header.php';
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
          <h2 class="text-color font-weight-bold">Request Maintenance Approval Report</h2>
        </div>
        <div class="w-75 m-auto text-center">
          <label class="text-center py-3 label_text">Maintenance ID = <?= $_GET['maintenanceid'] ?></label>
          <label class="text-center py-3 label_text">Your request has been approved.</label>
          <label class="text-center py-3 label_text">Please provide the document to the administrator to schedule the maintenance.</label>
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
    doc.addImage(img, 'JPEG', 20, 20, pdfWidth, 150);
    doc.save('Request Maintenance Approval Report.pdf');
  });
  setTimeout(function() {
    window.close();
  }, 3000);
</script>
</body>

</html>