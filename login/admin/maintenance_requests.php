    <?php
    include 'include/header.php';
    $sql = "SELECT user.username, user.userid, user.category, user.building_no, user.room_no, maintainence_request.concern FROM maintainence_request INNER JOIN user ON user.userid=maintainence_request.userid WHERE status IS NULL;";
    $result = $con->query($sql);
    ?>
    <div class="text-center">
        <h2 class="d_h2">Maintenance Requests</h2>
    </div>
    <hr>
    <div>
        <div>
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Concern</th>
                        <th>Buildings</th>
                        <th>Room</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($result->fetchAll() as $key => $row) { ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['userid']; ?></td>
                        <td><?php echo $row['concern']; ?></td>
                        <td><?php echo $row['building_no']; ?></td>
                        <td><?php echo $row['room_no']; ?></td>
                        <td>
                             <a href='query.php?maintainence_accid=<?php echo $row['userid'];?>' class="m-2 d_btn" name="accept">Accept</a>
                             <a href='query.php?maintainence_rejectid=<?php echo $row['userid'];?>'class="m-2 d_btn" name="reject">Reject</a>
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