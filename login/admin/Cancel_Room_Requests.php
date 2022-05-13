 <?php
    include 'include/header.php';
    $sql = "SELECT user.username, user.userid, user.category, user.building_no, user.room_no, cancle_room_request.created_date FROM cancle_room_request INNER JOIN user ON user.userid=cancle_room_request.userid WHERE status IS NULL;";
    $result = $con->query($sql);
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
                             <a href='query.php?cancle_accid=<?php echo $row['userid'];?>' class="m-2 d_btn" name="accept">Accept</a>
                             <a href='query.php?cancle_rejectid=<?php echo $row['userid'];?>'class="m-2 d_btn" name="reject">Reject</a>
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