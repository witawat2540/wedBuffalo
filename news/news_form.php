<?php require_once('Connections.php'); ?>
<?php
session_start();
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_member = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_member = $_SESSION['MM_Username'];
}
mysql_select_db($database_condb, $condb);
$query_member = sprintf("SELECT * FROM tb_member WHERE m_username = %s", GetSQLValueString($colname_member, "text"));
$member = mysql_query($query_member, $condb) or die(mysql_error());
$row_member = mysql_fetch_assoc($member);
$totalRows_member = mysql_num_rows($member);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!--bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- ckeditor-->
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
</head>
<body>
<div class="container">
      
      <div class="row">
        <div class="col-md-12">
          <?php include('banner.php');?>
        </div>
      </div>
    </div>

<div class="container">
      
      <div class="row">
        <div class="col-md-2">
          <?php include('menu.php');?>
        </div>
    
    
  
		<div class="col-md-10">
        
    <form action="form_add.php" method="POST" enctype="multipart/form-data"  name="addform" class="form-horizontal" id="addform">
    	<div class="form-group">
        
        <div class="col-sm-8">
       <div class="alert alert-warning" role="alert" align="center"><span class="glyphicon glyphicon-ok"></span> เพิ่มข่าว ยินดีตอนรับ <?php echo $row_member['m_name']; ?></div>
       </div>
       </div>
       <div class="form-group">
       
          <div class="col-sm-8" align="left">
            <input  name="title" id="title" type="text" required class="form-control"  placeholder="หัวข้อข่าว"/>
          </div>
      </div>
        
        <div class="form-group">
        
          <div class="col-sm-8" align="left">
           <textarea name="txtMessage" id="txtMessage" class="ckeditor" cols="69" rows="5"></textarea>
          </div>
        </div>
        
        
        <div class="form-group">
   
          <div class="col-sm-7" align="left">
            <input type="file" name="img" id="img" required>
          </div>
        </div>
        
      <div class="form-group">
  
          <div class="col-sm-5">
          <button type="submit" class="btn btn-primary" id="btn"> บันทึก
           </button>
          <input name="m_username" type="hidden" id="m_username" value="<?php echo $row_member['m_username']; ?>">
          </div>
           
      </div>
      </form>

</div>
</div>	
</div>
</body>
<?php
mysql_free_result($member);
?>
