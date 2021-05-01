@extends('layouts.master')

@section('title','ตลาดอิเล็กทรอนิกส์ปลาแห่งสยาม')
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        
        <img src="{{ asset('theme/images/banner_boxes/banner-4.jpg') }}" alt="">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10 card">
                <u><h3>เงื่อนไขการสร้างร้านค้า</h3></u><br>
                <label for="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ad natus vero vitae pariatur vel aut dolorum, architecto nemo beatae suscipit eaque eligendi voluptatem. Officiis beatae non, repellendus, quia quidem at, perspiciatis dolorum doloremque aspernatur optio ipsum nihil consequatur ad a commodi animi quos atque alias cum consectetur voluptatibus doloribus culpa aperiam itaque! Impedit cum odit nemo reprehenderit eligendi, molestiae quae minus libero repudiandae maxime commodi aperiam alias amet eaque consequatur provident atque blanditiis totam voluptatem. Incidunt ab, quas ut suscipit tenetur veniam voluptas. Fugit a tempore perferendis omnis provident molestiae aperiam error magni mollitia recusandae veniam tenetur hic accusamus autem atque minus, iusto dolore maiores. Pariatur ullam consequatur cupiditate dolores rerum tempore, adipisci quisquam iure officia commodi? Et voluptatum nesciunt ex cumque architecto optio nulla repudiandae, illo, voluptas adipisci quae, similique aut dicta laborum odit sint facere libero provident asperiores inventore minima distinctio neque possimus ducimus. Dolorum ipsa perferendis accusantium voluptas! Totam ea neque excepturi quis, laborum error id asperiores obcaecati dolores explicabo dolor sit facere voluptate, sint tempora alias! Quisquam unde fugiat natus expedita temporibus accusamus sint reiciendis animi, corporis sequi pariatur suscipit illum consectetur mollitia quae doloribus quos assumenda aut debitis magnam nihil corrupti. Officiis, dolore laborum?
                </label>
            </div>


            <div class="col-md-1">
            </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="doSubmit2();">ยอมรับ</button>
        </div>
    
    </div>
</div>
</div>


  
   <script>
  var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'รหัสผ่านตรงกัน';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'รหัสผ่านไม่ตรงกัน';
  }
}
   </script> 
 <div class="container">
   <h1>เริ่มต้นใช่งานใหม่</h1>
   <a href="{{url('/login/facebook')}}"><button class="btn-primary">facebook</button></a><br></br>

   
   <form action = "/insertcustomer" name="test1" method = "post">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            
         <label for="fname">ชื่อผู้ใช้งาน:</label><br>
            <input type="text" name="Displayname"  required><br>
            <label for="fname">รหัสผ่าน:</label><br>
            <input type="password" id="password"name="Password" onkeyup='check()'; required><br>
            <label for="fname">ยืนยันรหัสผ่าน:</label><br>
            <input type="password" id="confirm_password"  onkeyup='check()' ;name="Confirmpassword" required>
            <span id='message'></span><br>
            <label for="fname">ชื่อ:</label><br>
            <input type="text" name="Firstname" required><br>
            <label for="lname">นามสกุล:</label><br>
            <input type="text"  name="Lastname" required><br>
            <label for="lname">อีเมล:</label><br>
            <input type="email"  name="Email" required><br>
            <label for="lname">เบอร์โทร:</label><br>
            <input onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" type="text" name="Phone" maxlength="10" /><br>
            <label for="lname">วันเดือนปีเกิด:</label><br>
         <input type="date"  name="Birthday" required><br><br>
         
         <label for="male">ชาย</label>
         <input type="radio"  name="Gender" value="ช"><br>
         <label for="female">หญิง</label>
         <input type="radio"  name="Gender" value="ญ"><br><br>
         
         <input type="checkbox" data-toggle="modal" data-target="#exampleModal2" style="opacity: 1">
          <label for="">เงื่อนไขการสร้างร้านค้า</label>
          <button name="send" class="btn btn-warning btn-lg" type="submit" disabled>ลงทะเบียน</button>
         <!--input type="submit"    value="ลงทะเบียน"-->
      </form>
      
   </div>
   <script language=Javascript>
    function doSubmit2() {
      //disabled ปุ่ม Send เมื่อกดส่ง
      document.test1.send.disabled="";
    }
    </script>


@endsection