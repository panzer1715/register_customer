@extends('layouts.master')

@section('title','ตลาดอิเล็กทรอนิกส์ปลาแห่งสยาม')
@section('content')
<section class="flat-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumbs">
                            <li class="trail-item">
                                <a href="#" title="">หน้าหลัก</a>
                                <span><img src="images/icons/arrow-right.png" alt=""></span>
                            </li>
                           
                            <li class="trail-end">
                                <a href="#" title="">สมัครสมาชิกใหม่</a>
                            </li>
                        </ul><!-- /.breacrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-breadcrumb -->

            
         <section class="flat-account background">
            <div class="container">
                        <div class="row">
                            <div class="col-12">

                                <form  method="post" class="card">
                                    <div class="card-header bg-primary br-tr-7 br-tl-7">
                                        <h3 class="card-title text-white">ลงทะเบียนสมาชิกใหม่</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">

                                             <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">ชื่อผู้ใช้งาน</label>
                                                    <input type="text" class="form-control" name="" placeholder="ชื่อผู้ใช้งาน">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ชื่อ</label>
                                                    <input type="text" class="form-control" name="example-text-input" placeholder="ชื่อ">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                    <label class="form-label">นามสกุล</label>
                                                    <input type="text" class="form-control" name="" placeholder="นามสกุล">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-6">
                                                 <div class="form-group">
                                                    <label class="form-label">อีเมล</label>
                                                    <input type="text" class="form-control" name="" placeholder="อีเมล">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">เบอร์โทรศัพท์</label>
                                                    <input type="text" class="form-control" name="" placeholder="เบอร์โทรศัพท์">
                                                </div>
                                            </div>


                                             <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">วัน/เดือน/ปี</label>
                                                    <input class="datepicker" placeholder="MM/DD/YYYY" type="text"  >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-6">
                                                <div class="form-group ">
                                                    <div class="form-label">เพศ</div>
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
                                                            <span class="custom-control-label">ชาย</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                                            <span class="custom-control-label">หญิง</span>
                                                        </label>
                                                       
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">รหัสผ่าน</label>
                                                    <input type="password" class="form-control" name="" placeholder="รหัสผ่าน">
                                                </div>
                                            </div>

                                             <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ยืนยันรหัสผ่าน</label>
                                                    <input type="password" class="form-control" name="" placeholder="รหัสผ่าน">
                                                </div>
                                            </div>
                                           <br> <br>

                                            <div class="col-md-4">

                                                   </div>

                                              <div class="col-md-4">
                                                <br>
                                                <center>
                                                    <button type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
                                                    <br>
                                                    <center>
                                                    หรือแค่

                                                </center>  
                                                <br>
                                                    <button type="button" class="btn btn-facebook btn-block"><i class="fa fa-facebook mr-2"></i>เข้าสู่ระบบด้วย Facebook</button>
                                                    <br><br>
                                                    <p align="center">ในการสมัครใช้งาน เราถือว่าคุณยอมรับข้อตกลงในการใช้งาน และนโยบายความเป็นส่วนตัวกับทาง Thefishsiam ขอสงวนสิทธิ์ห้ามมิให้ผู้ใช้ใช้เครื่องมืออุปกรณ์อื่นๆลงทะเบียนเพื่อใช้ Voucher Code อีก  หากท่านใดฝ่าฝืน Thefishsiam มีสิทธิ์ระงับสถานะบัญชีผู้ใช้และงดให้บริการทันที  ทั้งนี้ ให้ความเห็นของThefishsiam เป็นที่สุด <a href="privacy-policy.html">ข้อตกลงในการให้บริการ</a>  </p>
                                                </center>
                                                <br>

                                               
                                                
                                            </div>


                                   </div>
                            </div>         

                        </div>
                            </div>
           </div>                 
            </section>

@endsection