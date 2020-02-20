<!DOCTYPE html>
<html lang="en">
<head>
<?php include('h.php');
//error_reporting( error_reporting() & ~E_NOTICE );

?>
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
                  <div class="p-3 mb-2 bg-info text-white">ข้อมูลผู้ขอใช้บริการ</div>
                  
<form  name="animal" action="animal_form_add_db.php" method="POST" id="animal" class="form-horizontal">
          
                  <div class="input-group mb-6 ">
                  <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">คำนำหน้า</label>
                    </div>
                    <select input name="#" id="#" class="custom-select col-sm-3" id="inputGroupSelect01">
                      <option selected>โปรดระบุ</option>
                      <option value="นาย">นาย</option>
                      <option value="นาง">นาง</option>
                      <option value="นางสาว">นางสาว</option>
                    </select>
                  </div>

                    
                    <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">ชื่อ :</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="ชื่อ">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">นามสกุล :</label>
                          <input type="password" class="form-control" id="inputPassword4" placeholder="นามสกุล">
                        </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">เลขบัตรประจำตัวประชาชน :</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="เลขบัตรประจำตัวประชาชน ">
                        <small id="passwordHelpInline" class="text-muted">
                        *กรอกเฉพาะตัวเลข  ไม่ต้องกรอก (-)
                      </small>
                      </div>
                      </div>


                    <div class="p-3 mb-2 bg-info text-white">ที่อยู่</div>
                    

                      <form>
                        <div class="form-row">
                          <div class="col-3">
                          <label for="inputEmail4">บ้านเลขที่ :</label>
                          <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="บ้านเลขที่" />
                          </div>
                          <div class="col-3">
                          <label for="inputPassword4">หมู่ที่ :</label>
                          <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="หมู่ที่" />
                          </div>
                          <div class="col-5">
                          <label for="inputPassword4">หมู่บ้าน :</label>
                          <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="หมู่บ้าน" />
                          </div>
                        </div>
                      </form>

                      <form>
                        <div class="form-row">
                          <div class="col-5">
                          <label for="inputEmail4">ตำบล :</label>
                          <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="ตำบล " />
                          </div>
                          <div class="col-5">
                          <label for="inputPassword4">อำเภอ :</label>
                          <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="อำเภอ " />
                          </div>
                          
                        </div>
                      </form>


                    <fieldset disabled>
                      <div class="form-group">
                      <label for="disabledTextInput">จังหวัด : </label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="ร้อยเอ็ด">
                      </div>
                      </fieldset>

                   
                    <div class="p-3 mb-2 bg-info text-white">สัตว์ที่ได้รับจากโครงการ</div>
                    
                    <div class="input-group mb-9 ">
                  <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">ประเภทสัตว์ :</label>
                    </div>
                    <select input name="#" id="#" class="custom-select col-sm-3" id="inputGroupSelect01">
                      <option selected>โปรดระบุ</option>
                      <option value="โค">โค</option>
                      <option value="กระบือ">กระบือ</option>
                    </select>
                  </div>

                  <div class="form-row">
                          <div class="col-6">
                            <label for="inputEmail4">มูลค่า : </label>
                            <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="มูลค่า  " />
                          </div>
                          <div class="col-6">
                            <label for="inputPassword4">วันที่มอบสัตว์ : </label>
                            <input  name="s_day"  type="date" name="bday" required class="form-control" id="s_day" placeholder="เวลานัด" />
                          </div>
                          
                   </div>
                        
                   <div class="form-row">
                          <div class="col-6">
                            <label for="inputPassword4">สัญญาเลขที่ :</label>
                            <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="สัญญาเลขที่ " />
                          </div>
                    </div>  

                    <div class="form-row">
                        <div class="col-6">
                          <label for="inputEmail4">หมายเลขสัตว์ :</label>
                          <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="หมายเลขสัตว์ " />
                        </div>
                    </div>   

                    <div class="form-group">
                        <div class="col-sm-10"> </div>
                        <div class="col-sm-12" align="center">
                          <button type="submit" class="btn btn-success btn-lg" id="btn"> <span class="glyphicon glyphicon-saved"></span> +บันทึก  </button>      
                        </div> 
                      </div>
                 
</form>

                  

          
          
                  
</body>
</html>



