<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
      <h3> สวัสดี คุณ <?php echo $a_name; ?></h3>
        <?php include('menu_left_animal.php');?>
      </div>

      <div class="col-md-9">
        <a href ="animal_add.php?act=add" class="btn-info btn-lg"> เพิ่ม </a>
        <p></p>

        <?php
        $act = $_GET['act'];
        if($act == 'add')
        {
        include('admin_form_add.php');
        }
        elseif ($act == 'edit') 
        {
        include('admin_form_edit.php');
        }
        elseif ($act == 'rwd') 
        {
        include('admin_form_rwd.php');
        }
        else 
        {
        include('admin_list.php');
        }
        ?>

       
      </div>

    </div>
  </div>
  </body>
</html>