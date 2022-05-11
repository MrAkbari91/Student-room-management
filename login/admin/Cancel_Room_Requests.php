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
    $sql = "SELECT user.username, user.userid, user.category, user.building_no, user.room_no, cancle_room_request.created_date FROM cancle_room_request INNER JOIN user ON user.userid=cancle_room_request.userid;";
    $result = $con->query($sql);
    // var_dump($result);
    // die();
    ?>
 <div class="text-center">
     <h2 class="d_h2">Cancel Room Requests.</h2>
 </div>
 <hr>
 <div>
     <div>
         <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
             <thead>
                 <tr>
                     <th>Date</th>
                     <th>Name</th>
                     <th>ID</th>
                     <th>Category</th>
                     <th>Building</th>
                     <th>Room</th>
                     <th></th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($result->fetchAll() as $key => $row) { ?>
                     <tr>
                         <td><?php echo $row['created_date']; ?></td>
                         <td><?php echo $row['username']; ?></td>
                         <td><?php echo $row['userid']; ?></td>
                         <td><?php echo $row['category']; ?></td>
                         <td><?php echo $row['building_no']; ?></td>
                         <td><?php echo $row['room_no']; ?></td>
                         <td>
                             <button class="m-2 d_btn">Accept</button>
                             <button class="m-2 d_btn">Reject</button>
                         </td>
                     </tr>
                 <?php
                    }
                    ?>
             </tbody>
         </table>
         <div class="d-flex justify-content-center">
             <a href="../administrator.php" class="d_btn m-2 align-center">Back</a>
         </div>
     </div>
 </div>
 <?php
    include 'include/footer.php';
    ?>