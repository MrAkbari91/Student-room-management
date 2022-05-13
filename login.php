<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/project/dbcon.php');
    $user_type = $_POST['user_type'];
    $username = $_POST['u_name'];  
    $password = $_POST['password'];
    if(isset($_POST['submit'])){
        if($user_type=="Administrator") {
            $sql = "select * from admin where userid='".$username."' and password = '".$password."'";
            $result = $con->query($sql);
            $row = $result->fetch();
            if($row){
                $_SESSION['data'] = $row;   
                $_SESSION['isLogin'] = true;   
                $_SESSION['isadminLogin'] = true;   
				header("Location: login/administrator.php");
				exit();
            }else{
                header("Location: index.php?login=no");
				exit();
            }
        }else if($user_type== "Student"){  
            $sql = "select * from user where userid='".$username."' and password = '".$password."'";
            $result = $con->query($sql);
            $row = $result->fetch();
            if($row){
                $_SESSION['data'] = $row;   
                $_SESSION['isLogin'] = true;  
                $_SESSION['isstudentLogin'] = true;  
                header("Location: login/student.php");
				exit();
            }else{
                header("Location: index.php?login=no");
				exit();
            }     
        } else{
            header("Location: index.php?usertype=no");
			exit();
        }
      }     
?>