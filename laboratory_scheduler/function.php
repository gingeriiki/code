<?php
session_start();
include("config.php");
$_SESSION["loggedIn"] = 0; 
$_SESSION["cloggedIn"] = 0; 
$_SESSION["gloggedIn"] = 0;
$res = array();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = " SELECT * FROM account WHERE User_Name = '$username' and Password = '$password' ";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);

    if($row == 1){
        if($username == "admin"){
        $res["url"] = 'adminindex.php';
            $_SESSION["loggedIn"] = 1;
            $res["type"] = 1;
            $res["msg"] = "Login success!";
        }
        else if($username == "prefect"){
        $res["url"] = 'prefect_allusers.php';
            $_SESSION['prefect'] = $username;
            $_SESSION["ploggedIn"] = 1;
            $res["type"] = 2;
            $res["msg"] = "Login success!";
        }
        else if($username == "20211124"){
        $res["url"] = 'clinic_allusers.php';
            $_SESSION['clinic'] = $username;
            $_SESSION["cloggedIn"] = 1;
            $res["type"] = 2;
            $res["msg"] = "Login success!";
        }
        else if($username == "20211332"){
        $res["url"] = 'clinic_allusers.php';
            $_SESSION['clinic'] = $username;
            $_SESSION["cloggedIn"] = 1;
            $res["type"] = 3;
            $res["msg"] = "Login success!";
        }
        else if($username == "20211718"){
           $res["url"] = 'qrscanner.php';
            $_SESSION['guard'] = $username;
            $_SESSION["gloggedIn"] = 1;
            //header('location:search.php');
            $res["type"] = 4;
            $res["msg"] = "Login success!";
        }
        else if($username == "20211719"){
        $res["url"] = 'qrscanner.php';
            $_SESSION['guard'] = $username;
            $_SESSION["gloggedIn"] = 1;
            //header('location:search.php');
            $res["type"] = 5;
            $res["msg"] = "Login success!";
        }else if($username == "20211720"){
           $res["url"] = 'qrscanner.php';
            $_SESSION['guard'] = $username;
            $_SESSION["gloggedIn"] = 1;
            //header('location:search.php');
            $res["type"] = 6;
            $res["msg"] = "Login success!";
        }
        else if($username == "20211721"){
        $res["url"] = 'qrscanner.php';
            $_SESSION['guard'] = $username;
            $_SESSION["gloggedIn"] = 1;
            //header('location:search.php');
            $res["type"] = 7;
            $res["msg"] = "Login success!";
        }else if($username == "20211717"){
           $res["url"] = 'qrscanner.php';
            $_SESSION['guard'] = $username;
            $_SESSION["gloggedIn"] = 1;
            //header('location:search.php');
            $res["type"] = 8;
            $res["msg"] = "Login success!";
        }
    }else{
        $res["type"] = 0;
        $res["msg"] = "Check your Username & Password.";
    }
}
echo json_encode($res);
?>