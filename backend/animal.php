<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
///error_reporting( error_reporting() & ~E_NOTICE );

  
?>

  <body>
  <div class="container">
  <?php include('navbar.php');?>
  <p></p>
  <p></p>
  <div class="row">
      <div class="col-md-3">
      <h3> สวัสดี คุณ <?php echo $a_name; ?></h3>
        <?php include('menu_left_animal.php');?>
      </div>

       
        <h4>เลือกอำเภอ</h4>
        <div class="col-md-6">
        <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    กรุณาเลือกอำเภอ
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">เกษตรวิสัย</a>
    <a class="dropdown-item" href="#">เชียงขวัญ</a>
    <a class="dropdown-item" href="#">เมยวดี</a>
    <a class="dropdown-item" href="#">เมืองร้อยเอ็ด</a>
    <a class="dropdown-item" href="#">เมืองสรวง</a>
    <a class="dropdown-item" href="#">เสลภูมิ</a>
    <a class="dropdown-item" href="#">โพธิ์ชัย</a>
    <a class="dropdown-item" href="#">โพนทราย</a>
    <a class="dropdown-item" href="#">โพนทอง</a>
    <a class="dropdown-item" href="#">จตุรพักตรพิมาน</a>
    <a class="dropdown-item" href="#">จังหาร</a>
    <a class="dropdown-item" href="#">ทุ่งเขาหลวง</a>
    <a class="dropdown-item" href="#">ธวัชบุรี</a>
    <a class="dropdown-item" href="animal_ptr.php">ปทุมรัตน์</a>
    <a class="dropdown-item" href="#">พนมไพร</a>
    <a class="dropdown-item" href="#">ศรีสมเด็จ</a>
    <a class="dropdown-item" href="#">สุวรรณภูมิ</a>
    <a class="dropdown-item" href="#">หนอกพอก</a>
    <a class="dropdown-item" href="#">หนองฮี</a>    
    <a class="dropdown-item" href="#">อาจสามารถ</a>    

  </div>
</div>


       
      </div>

    </div>
  </div>
  </body>
  
</html>


