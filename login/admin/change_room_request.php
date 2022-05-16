<?php
include 'include/header.php';
$array = $_SESSION['data'];
$sql = "SELECT change_room_request.ID, change_room_request.new_category, change_room_request.userid, change_room_request.new_building_no, change_room_request.new_room_no, change_room_request.status, change_room_request.created_date, user.category, user.username, user.building_no, user.room_no FROM change_room_request INNER JOIN user ON user.userid=change_room_request.userid WHERE change_room_request.status = 0";
$result = $con->query($sql);

?>
<div class="text-center">
    <h2 class="d_h2">Change Room Requests.</h2>
</div>
<hr>
<div>
    <div>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == "success") { ?>
            <p class="text-center bg-success text-white p-3"> Request status updated successfully</p>
        <?php    }
        ?>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == "failed") { ?>
            <p class="text-center bg-danger text-white p-3"> Request status update Failed!</p>
        <?php    }
        ?>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>From</th>
                    <th>TO</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result->fetchAll() as $key => $row) { ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['userid']; ?></td>
                        <td><?php echo $row['category']; ?><br>Building <?php echo $row['building_no']; ?><br>Room <?php echo $row['room_no']; ?></td>
                        <td><?php echo $row['new_category']; ?><br>Building <?php echo $row['new_building_no']; ?><br>Room <?php echo $row['new_room_no']; ?></td>
                        <td><a class="m-2 d_btn" href="handlerequest.php?type=accept&from=changeroom&id=<?= $row['ID'] ?>">Accept</a><a class="m-2 d_btn" href="handlerequest.php?type=reject&from=changeroom&id=<?= $row['ID'] ?>">Reject</a></td>
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