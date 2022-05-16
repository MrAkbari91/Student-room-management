<?php
include 'include/header.php';
$array = $_SESSION['data'];
$sql = "SELECT maintainence_request.ID, maintainence_request.concern, maintainence_request.userid, maintainence_request.status, maintainence_request.created_date, user.username, user.category, user.building_no, user.room_no FROM maintainence_request INNER JOIN user ON user.userid=maintainence_request.userid WHERE maintainence_request.status = 0";
$result = $con->query($sql);
?>
<div class="text-center">
    <h2 class="d_h2">Maintenance Requests</h2>
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
                    <th>Concern</th>
                    <th>Category</th>
                    <th>Buildings</th>
                    <th>Room</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result->fetchAll() as $key => $row) { ?>
                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['userid']; ?></td>
                        <td><?php echo $row['concern']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td>Building <?php echo $row['building_no']; ?></td>
                        <td>Room <?php echo $row['room_no']; ?></td>
                        <td><a class="m-2 d_btn" href="handlerequest.php?type=accept&from=maintenance&id=<?= $row['ID'] ?>">Accept</a><a class="m-2 d_btn" href="handlerequest.php?type=reject&from=maintenance&id=<?= $row['ID'] ?>">Reject</a></td>
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