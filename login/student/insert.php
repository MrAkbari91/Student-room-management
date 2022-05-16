<?php
      include ($_SERVER['DOCUMENT_ROOT'].'/code/dbcon.php');
	  $array = $_SESSION['data'];

      
	if(isset($_POST['book_room'])){
        $userid	= $array['userid'];
		$user_status = $array['user_status'];
        $Category = $_POST['Category'];
        $Building = $_POST['Building'];
        $Room = $_POST['Room'];
        $date = date("m/d/Y");
        $update_date = date("m/d/Y");
		
		if($user_status == "Non-Resident"){
			$con->beginTransaction();
			if($Category == "With Roommate"){
				$sql = "SELECT * FROM user WHERE room_no = $Room;";	
				$result = $con->query($sql);
				$output = $result->fetch();
				if(is_array($output) && count($output) > 2){
					$con->commit();
					header("Location: ../student.php?roomfull=true");
				}else{
					$query = "INSERT INTO booking_request (userid, category, building_no, room_no, status, created_date, updated_date) VALUES ($userid,'$Category',$Building,$Room , 0, '$date', '$update_date');";
					$result = $con->prepare($query);
					$output = $result->execute();
					$sql = "SELECT @@IDENTITY AS ID;";	
					$result = $con->query($sql);
					$lastinsertedid = $result->fetch()['ID'];
					$con->commit();
					if($output){
						header("Location: Booking_Report.php?bookrequestid=$lastinsertedid");
					}
				}
			}else{
				$sql = "SELECT * FROM user WHERE room_no = $Room;";	
				$result = $con->query($sql);
				$output = $result->fetch();
				if(is_array($output) && count($output) > 1){
					$con->commit();
					header("Location: ../student.php?roomfull=true");
				}else{
					$query = "INSERT INTO booking_request (userid, category, building_no, room_no, status, created_date, updated_date) VALUES ($userid,'$Category',$Building,$Room , 0, '$date', '$update_date');";
					$result = $con->prepare($query);
					$output = $result->execute();
					$sql = "SELECT @@IDENTITY AS ID;";	
					$result = $con->query($sql);
					$lastinsertedid = $result->fetch()['ID'];
					$con->commit();
					if($output){
						header("Location: Booking_Report.php?bookrequestid=$lastinsertedid");
					}
				}
			}
		}else{
			header("Location: ../student.php?bookfailed=true");
		}
	}  
    if(isset($_POST['change_room'])){
        $userid	= $array['userid'];
		$user_status = $array['user_status'];
        $Category = $_POST['Category'];
        $Building = $_POST['Building'];
        $Room = $_POST['Room'];
        $date = date("m/d/Y");
        $update_date = date("m/d/Y");
        
		if($user_status !== "Non-Resident"){
			
			$con->beginTransaction();
			if($Category == "With Roommate"){
				$sql = "SELECT * FROM user WHERE room_no = $Room;";	
				$result = $con->query($sql);
				$output = $result->fetch();
				if(is_array($output) && count($output) > 2){
					$con->commit();
					header("Location: ../student.php?roomfull=true");
				}else{
					$query = "INSERT INTO change_room_request (userid, new_category, new_building_no, new_room_no, created_date, updated_date) VALUES ($userid,'$Category', $Building, $Room , '$date', '$update_date');";
					$result = $con->prepare($query);
					$output = $result->execute();
					$sql = "SELECT @@IDENTITY AS ID;";	
					$result = $con->query($sql);
					$lastinsertedid = $result->fetch()['ID'];
					$con->commit();
					if($output){
						header("Location: Change_Room_Approved_Report.php?bookrequestid=$lastinsertedid");
					}
				}
			}else{
				$sql = "SELECT * FROM user WHERE room_no = $Room;";	
				$result = $con->query($sql);
				$output = $result->fetch();
				if(is_array($output) && count($output) > 1){
					$con->commit();
					header("Location: ../student.php?roomfull=true");
				}else{
					$query = "INSERT INTO change_room_request (userid, new_category, new_building_no, new_room_no, created_date, updated_date) VALUES ($userid,'$Category', $Building, $Room , '$date', '$update_date');";
					$result = $con->prepare($query);
					$output = $result->execute();
					$sql = "SELECT @@IDENTITY AS ID;";	
					$result = $con->query($sql);
					$lastinsertedid = $result->fetch()['ID'];
					$con->commit();
					if($output){
						header("Location: Change_Room_Approved_Report.php?bookrequestid=$lastinsertedid");
					}
				}
			}
		}else{
			header("Location: ../student.php?changeroomfailed=true");
		}
    }
    if(isset($_POST['cancel_room'])){
        $userid	= $array['userid'];
		$user_status = $array['user_status'];
        $cancellationreason = $_POST['cancellationreason'];
        $date = date("m/d/Y");
        $update_date = date("m/d/Y");
        
		if($user_status !== "Non-Resident"){
			$con->beginTransaction();
			$query = "INSERT INTO cancle_room_request (userid, reason, status, created_date, updated_date) VALUES ($userid,'$cancellationreason', 0,  '$date', '$update_date');";
			$result = $con->prepare($query);
			$output = $result->execute();
			$sql = "SELECT @@IDENTITY AS ID;";	
			$result = $con->query($sql);
			$lastinsertedid = $result->fetch()['ID'];
			$con->commit();
			
			if($output){
				header("Location: Cancelation_Report.php?cancelrequestid=$lastinsertedid");
			}
		}else{
			header("Location: ../student.php?cancelroomfailed=true");
		}
    }
    if(isset($_POST['maintainence_room'])){
        $userid	= $array['userid'];
		$user_status = $array['user_status'];
        $maintainence_room = $_POST['maintainenceconcern'];
        $date = date("m/d/Y");
        $update_date = date("m/d/Y");
        
		if($user_status !== "Non-Resident"){
			$con->beginTransaction();
			$query = "INSERT INTO maintainence_request (userid, concern, status, created_date, updated_date) VALUES ($userid,'$maintainence_room', 0,  '$date', '$update_date');";
			$result = $con->prepare($query);
			$output = $result->execute();
			$sql = "SELECT @@IDENTITY AS ID;";	
			$result = $con->query($sql);
			$lastinsertedid = $result->fetch()['ID'];
			$con->commit();
			
			if($output){
				header("Location: Request_Maintenance_Report.php?maintainencerequestid=$lastinsertedid");
			}
		}else{
			header("Location: ../student.php?maintainencefailed=true");
		}
    }
?>