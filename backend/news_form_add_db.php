<meta charset="UTF-8" />
<?php 


require_once('Connections.php');

    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	
	//รับชื่อไฟล์จากฟอร์ม 
	$a_name = $_POST['a_name'];
	$n_title = $_POST['n_title'];
	$n_txtMessage = $_POST['n_txtMessage'];
	//$n_img = (isset($_POST['n_img']) ? $_POST['n_img'] : '');
	//echo $_POST['n_img'] ;
	
		
	$upload=$_FILES['n_img'];
	if($upload <> '') { 
 
	//โฟลเดอร์ที่เก็บไฟล์
	$path="n_img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['n_img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;
 
	$path_copy=$path;
	$path_link="n_img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['n_img']['tmp_name'],$path_copy);  
		
	
	}


			 $sql = "INSERT INTO tbl_news 
					(
					n_title, 
					n_txtMessage,
					a_name,
					n_img
					) 
					VALUES
					(
					'$n_title',
					'$n_txtMessage',
					'$a_name',
					'$path_link'
					)";
		
		//$result = mysql_db_query($database_condb, $sql) or die ("Error in query: $sql " . mysql_error());
		$result = mysqli_query($con,$sql);				
	$con->close();



	if($result){
   
			echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มข่าวเรียบร้อย');";
			echo "window.location='news.php';";
			echo "</script>";
	  }
	  else{
		    echo "<script type='text/javascript'>";
				echo  "alert('Error!');";
				echo "window.location='news.php';";
			echo "</script>";
	  }
	
	
 ?>