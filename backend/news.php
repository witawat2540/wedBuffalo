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
        <?php include('menu_left_new.php');?>
      </div>

      <div class="col-md-9">
        <a href ="news.php?act=add" class="btn-success btn-lg"> เพิ่มข่าว </a>
        <p></p>

        <?php
        $act = $_GET['act'];
        if($act == 'add')
        {
        include('news_form_add.php');
        }
        elseif ($act == 'edit') 
        {
        include('#');
        }
        elseif ($act == 'rwd') 
        {
        include('#');
        }
        else 
        {
        include('news_list.php');
        }
      
        
        ?>

       
      </div>

    </div>
  </div>
  </body>
</html>