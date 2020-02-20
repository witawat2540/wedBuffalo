<?php
include('connections.php');

$ani_statusname = $_POST['ani_statusname'];
$ani_name = $_POST['ani_name'];
$ani_lassname = $_POST['ani_lassname'];
$ani_serialnum = $_POST['ani_serialnum'];
$ani_numhome = $_POST['ani_numhome'];
$ani_grouphome = $_POST['ani_grouphome'];
$ani_home = $_POST['ani_home'];
$ani_district = $_POST['ani_district'];
$ani_conton = $_POST['ani_conton'];
$ani_locatity = $_POST['ani_locatity'];
$ani_cow = $_POST['ani_cow'];
$ani_buf = $_POST['ani_buf'];
$ani_price = $_POST['ani_price'];
$ani_givedata = $_POST['ani_givedata'];
$ani_serialanimal = $_POST['ani_serialanimal'];
$ani_compactnum = $_POST['ani_compactnum'];
$ani_sex = $_POST['ani_sex'];
$ani_sonbirth1 = $_POST['ani_sonbirth1'];
$ani_sonsex1 = $_POST['ani_sonsex1'];
$ani_sonstatus1 = $_POST['ani_sonstatus1'];



$sql ="INSERT INTO tbl_animal
    
    (ani_statusname,  ani_name, ani_lassname, ani_serialnum,ani_numhome,ani_grouphome,ani_home,
    ani_district,ani_conton,ani_locatity ,ani_cow,ani_buf,ani_price,ani_givedata,ani_serialanimal,
    ani_compactnum,ani_sex,ani_sonbirth1,ani_sonsex1,ani_sonstatus1) 

    VALUES 

    
    ('$ani_statusname',  '$ani_name', '$ani_lassname', '$ani_serialnum','$ani_numhome','$ani_grouphome','$ani_home',
    '$ani_district','$ani_conton','$ani_locatity' ,'$ani_cow','$ani_buf','$ani_price','$ani_givedata','$ani_serialanimal',
    '$ani_compactnum','$ani_sex','$ani_sonbirth1','$ani_sonsex1','$ani_sonstatus1')"; 
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('บันทึกข้อมูลสำเร็จ');";
      echo "window.location ='animal.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('เกิดข้อผิดพลาด');";
      echo "window.location ='animal.php'; ";
      echo "</script>";
    }
?>