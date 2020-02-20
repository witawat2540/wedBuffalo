<meta charset="UTF-8" />
<?php 


require_once('Connections/condb.php');

    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	
	//รับชื่อไฟล์จากฟอร์ม 
	$title = $_POST['title'];
	$txtMessage = $_POST['txtMessage'];
	$m_username = $_POST['m_username'];
	$img = (isset($_POST['img']) ? $_POST['img'] : '');
		
	$upload=$_FILES['img'];
	if($upload <> '') { 

	//โฟลเดอร์ที่เก็บไฟล์
	$path="img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;

	$path_copy=$path.$newname;
	$path_link="img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  
		
	
	}


			 $sql = "INSERT INTO articles 
					(
					title, 
					txtMessage,
					m_username,
					img
					) 
					VALUES
					(
					'$title',
					'$txtMessage',
					'$m_username',
					'$newname'
					)";
		
		$result = mysql_db_query($database_condb, $sql) or die ("Error in query: $sql " . mysql_error());

	mysql_close();



	if($result){
   
			echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มข่าวเรียบร้อย');";
			echo "window.location='list.php';";
			echo "</script>";
	  }
	  else{
		    echo "<script type='text/javascript'>";
				echo  "alert('Error!');";
				echo "window.location='list.php';";
			echo "</script>";
	  }
	
	
 ?>