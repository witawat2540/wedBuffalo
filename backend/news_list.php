
<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง 

$query = "SELECT * FROM tbl_news " ;
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
 
echo  ' <table class="table table-hover  table-striped" id ="tblist" >';
  
//หัวข้อตาราง
echo "<thead >
<tr   class=' bg-success 'style='text-align: center;'>
  <td>ลำดับที่</td>
  <td>หัวข้อ</td>
  <td>รายละเอียด</td>
  <td>รูปภาพ</td>
  
  <td>edit</td>
  <td>delete</td>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["n_id"] .  "</td> ";
    echo "<td>" .$row["n_title"] .  "</td> ";
    echo "<td>" .$row["n_txtMessage"] .  "</td> ";
    echo "<td>" ."<img src=" .$row["n_img"] . ">" . "</td> ";
    //แก้ไขข้อมูล
    echo "<td><a href='product.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>edit</a></td> ";
    
    //ลบข้อมูล
    echo "<td><a href='product_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>