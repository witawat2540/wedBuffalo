<div class="container">
      
      <div class="row">
        <div class="col-md-12">
          <?php include('banner.php');?>
        </div>
      </div>
</div>
<meta charset="UTF-8" />
<?php require_once('Connections/condb.php'); ?>
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

$colname_showmember = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_showmember = $_SESSION['MM_Username'];
}
mysql_select_db($database_condb, $condb);
$query_showmember = sprintf("SELECT * FROM articles WHERE m_username = %s ORDER BY a_id DESC", GetSQLValueString($colname_showmember, "text"));
$showmember = mysql_query($query_showmember, $condb) or die(mysql_error());
$row_showmember = mysql_fetch_assoc($showmember);
$totalRows_showmember = mysql_num_rows($showmember);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- ckeditor-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


</head>

<body>
<meta charset="UTF-8" />

<div class="container">
      
      <div class="row">
        <div class="col-md-2">
          <?php include('menu.php');?>
        </div>


        <div class="col-md-10">

<table border="1">
  <tr>
    <td>a_id</td>
    <td>title</td>
    <td>txtMessage</td>
    <td>img</td>
    <td>m_username</td>
    <td>datesave</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_showmember['a_id']; ?></td>
      <td><?php echo $row_showmember['title']; ?></td>
      <td><?php echo $row_showmember['txtMessage']; ?></td>
      <td><img src="img/<?php echo $row_showmember['img']; ?>" width="100" height="100" /></td>
      <td><?php echo $row_showmember['m_username']; ?></td>
      <td><?php echo $row_showmember['datesave']; ?></td>
    </tr>
    <?php } while ($row_showmember = mysql_fetch_assoc($showmember)); ?>
</table>
</div>
</div>
</div>




</body>
</html><?php
mysql_free_result($showmember);
?>
