 <?php
    include 'include/header.php';
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
                                    <tr>
                                        <td>04/18/2022</td>
                                        <td>abc xyz</td>
                                        <td>1234567</td>
                                        <td>Without roommate</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td><button class="m-2 d_btn">Accept</button><button class="m-2 d_btn">Reject</button></td>
                                    </tr>
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