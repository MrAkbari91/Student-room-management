<?php
    session_start();
    include "dbcon.php";

    $user_type = $_POST['user_type'];
    $username = $_POST['u_name'];  
    $password = $_POST['password'];

    if(isset($_POST['submit'])){
        if($user_type=="Administrator") {
            $sql = "select * from admin where userid='".$username."' and password = '".$password."'";
            $result = $con->query($sql);
            $row = $result->fetch();
            if($row == true){
                $_SESSION['data'] = $row;   
                $array = $_SESSION['data'];
                    header("Location: login/administrator.php");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('userid or password is invalid');
                window.location.href='index.php';
                </script>");
            }              
        }else if($user_type== "Student"){  
            $sql = "select * from user where userid='".$username."' and password = '".$password."'";
            $result = $con->query($sql);
            $row = $result->fetch();
            if($row == true){
                $_SESSION['data'] = $row;   
                $array = $_SESSION['data'];
                if(isset($array)){
                    header("Location: login/student.php");
                }
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('userid or password is invalid');
                window.location.href='index.php';
                </script>");
            }     
        } else{
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Please select the value');
            window.location.href='index.php';
            </script>");
        }
      }     
?>