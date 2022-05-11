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
$sql = "SELECT user.username, user.userid, change_room_request.new_category, change_room_request.new_building_no, change_room_request.new_room_no, user.category, user.building_no, user.room_no FROM change_room_request INNER JOIN user ON user.userid = change_room_request.userid WHERE status IS NULL;";
$result = $con->query($sql);
?>
<div class="text-center">
    <h2 class="d_h2">Change Room Requests.</h2>
</div>
<hr>
<div>
    <div>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>From</th>
                    <th>TO</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result->fetchAll() as $key => $row) { ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['userid']; ?></td>
                        <td>Category: <?php echo $row['category']; ?>
                            <br> Building: <?php echo $row['building_no']; ?>
                            <br> Room: <?php echo $row['room_no']; ?>
                        </td>
                        <td>Category: <?php echo $row['new_category']; ?>
                        <br> Building: <?php echo $row['new_building_no']; ?>
                        <br> Room: <?php echo $row['new_room_no']; ?></td>
                        <td>
                             <a href='query.php?change_accid=<?php echo $row['userid'];?>' class="m-2 d_btn" name="accept">Accept</a>
                             <a href='query.php?change_rejectid=<?php echo $row['userid'];?>'class="m-2 d_btn" name="reject">Reject</a>
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