<?php
include('connections.php');

$a_user = $_POST['a_user'];
$a_pass = $_POST['a_pass'];
$a_name = $_POST['a_name'];

$sql ="INSERT INTO tbl_admin
    
    (a_user,  a_pass, a_name) 

    VALUES 

    ('$a_user', '$a_pass', '$a_name')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('บันทึกข้อมูลสำเร็จ');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('เกิดข้อผิดพลาด');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    }
?>