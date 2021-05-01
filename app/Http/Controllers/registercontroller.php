<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;


class registercontroller extends Controller
{
    public function createcustomerform() {
        return view('customer_form');
     }
      
     public function insertcustomer(Request $request) {
        $Displayname = $request->input('Displayname');
        $Firstname = $request->input('Firstname');
        $Lastname = $request->input('Lastname');
        $Email = $request->input('Email');
        $Phone = $request->input('Phone');
        $Birthday = $request->input('Birthday');
        $Gender = $request->input('Gender');
        $Password = $request->input('Password');
        $Confirmpassword = $request->input('Confirmpassword');
        
        $check = DB::select('select id,email from customer where email = ? ',[$Email]);
       
        if(count($check) > 0 ){
         echo "<script>";
         echo "alert('username นี้มีคนใช้เเล้ว');";
         echo "window.history.back();";
         echo "</script>";
          
        }
        
      
        else{
            

         $checkinsert = DB::insert('insert into customer (DisplayName,Firstname,Lastname,Email,Phone,DOB,Status,Gender) 
            values(?,?,?,?,?,?,?,?)',[$Displayname,$Firstname,$Lastname,$Email,$Phone,$Birthday,'NEW',$Gender]);
         
         if(isset($checkinsert) ){
            DB::insert('insert into oauthuser (CustomerId,password)
            select id,? from customer where email = ?',[md5($Password),$Email]);   
            \Mail::to($Email)->send(new SendMail($Email));
            return view('emails.thankyou',['Email'=>$Email]);
         }
              
             
        }
      
     }

     public function insertfacebookuser(Request $request) {
            $Displayname = $request->input('Displayname');
            $Firstname = $request->input('Firstname');
            $Lastname = $request->input('Lastname');
            $Email = $request->input('Email');
            $Phone = $request->input('Phone');
            $Birthday = $request->input('Birthday');
            $Gender = $request->input('Gender');
            $Profile = $request->input('Profile');
            $Facebook_id = $request->input('Facebook_id');
            $CreatedDate = date('Y-m-d H:i:s');

            $check = DB::select('select id,email from customer where email = ? ',[$Email]);
            if(count($check) > 0 ){
               echo "<script>";
               echo "alert('username นี้มีคนใช้เเล้ว');";
               echo "window.history.back();";
               echo "</script>";
                
              }else{
            $insert_facebook = DB::insert('insert into customer (DisplayName,Firstname,Lastname,ProfilePic,Email,Phone,DOB,Status,Gender) 
            values(?,?,?,?,?,?,?,?,?)',[$Displayname,$Firstname,$Lastname,$Profile,$Email,$Phone,$Birthday,'NEW',$Gender]);
            
            if(isset($insert_facebook) ){
               DB::insert('insert into oauthfacebook (OauthId,CustomerId,CreatedDate)
               select ?,id,? from customer where email = ?',[$Facebook_id,$CreatedDate,$Email]);   
               \Mail::to($Email)->send(new SendMail($Email));
               return view('emails.thankyou',['Email'=>$Email]);
            }
            }
           // CURRENT_TIMESTAMP()
      }

     
}

