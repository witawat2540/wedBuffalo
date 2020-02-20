<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
///error_reporting( error_reporting() & ~E_NOTICE );
?>

<!--bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- ckeditor-->
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <body>
  <div class="container">
  <?php include('navbar.php');?>
  <p></p>
  <p></p>
  <div class="row">
      <div class="col-md-3">
      <h3> สวัสดี คุณ <?php echo $a_name; ?></h3>
        <?php include('menu_left_new.php');?>
      </div>


      <div class="col-md-9">
     
 <form action="news_form_add_db.php" method="POST" enctype="multipart/form-data"  name="addform" class="form-horizontal" id="addform">
        <div class="form-group">
        

        <h4> หัวข้อข่าว :</h4>
          <div class="col-md-9" align="left">
            <input  name="n_title" id="n_title" type="text" required class="form-control"  placeholder="หัวข้อข่าว"/>
          </div>
      </div>
        
        <div class="form-group">
        <h4> รายละเอียดข่าว :</h4> 
        <div class="col-md-9" align="left">
           <textarea name="n_txtMessage" id="n_txtMessage" class="ckeditor" cols="69" rows="5"></textarea>
          </div>
        </div>
        
        
        <div class="form-group">
   
          <div class="col-md-9" align="left">
            <input type="file" name="n_img" id="n_img" >
          </div>
        </div>
        
      <div class="form-group">
  
          <div class="col-md-5">
          <button type="submit" class="btn btn-primary" id="btn"> บันทึก
           </button>
          <input name="a_name" type="hidden" id="a_name" value="<?php echo $a_name; ?>">
          </div>
           
      </div>
      </form>

</div>
</div>	
</div>
</body>
<?php
///mysql_free_result($member);
?>
</head>
</html>