<?php
      include 'include/header.php';
	
	$array = $_SESSION['data'];
	$userid = $array['userid'];
	$bookrequestid = $_GET['bookrequestid'];
	$sql = "SELECT * FROM change_room_request WHERE userid = '$userid' AND ID = $bookrequestid;";
	$result = $con->query($sql);
	$requestdata = $result->fetchAll()[0]; 
	
	$sql = "SELECT * FROM user WHERE userid = '$userid'";
	$result = $con->query($sql);
	$userdata = $result->fetchAll()[0]; 
	
    ?>
	<style>
		body{
			opacity:0;
		}
	</style>
    <div>
      <div class="row m-0 pt-5 pb-5">
        <div class="col-md-6 m-auto py-5 border-bg">
          <div>
            <div class="text-center pb-0 border-bottom mb-3">
              <h2 class="text-color font-weight-bold">Change Room Report</h2>
            </div>
            <div>
              <div class="row d-flex mt-4 ">                  
                  <div class=" col-md-10 d-flex  m-auto pt-5 pb-5 justify-content-around">
                    <div>
                      <p>From:</p>
                        <div class="bg-text px-3">
                          <p class="p-1">Category:<?=$userdata['category']?></p>
                        </div>
                        <div class="bg-text px-3">
                          <p class="p-1">Building:<?=$userdata['building_no']?></p>
                        </div>
                        <div class="bg-text px-3">
                          <p class="p-1">Room:<?=$userdata['room_no']?></p>
                        </div>
                    </div>
                    <div>
                      <p>To:</p>   
                        <div class="bg-text px-3">
                          <p class="p-1">Category:<?=$requestdata['new_category']?></p>
                        </div>             
                        <div class="bg-text px-3">
                          <p class="p-1">Building:<?=$requestdata['new_building_no']?></p>
                        </div>
                        <div class="bg-text px-3">
                          <p class="p-1">Room:<?=$requestdata['new_room_no']?></p>
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
</main>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<script>
var main = document.getElementById('main');
html2canvas(main).then(function (canvas) {
	var img = canvas.toDataURL("image/png");
	var doc = new jsPDF({
	  orientation: 'landscape',
	});
	const pdfWidth = doc.internal.pageSize.width - 45;
	doc.addImage(img, 'JPEG', 20, 20, pdfWidth, 150);
	doc.save('Change Room Report.pdf');        
});
setTimeout(function () {
	window.close();
}, 3000);

</script>
</body>
</html>