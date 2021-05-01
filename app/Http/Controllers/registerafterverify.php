<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Mail\SendMail;

class registerafterverify extends Controller
{
  
     public function update($Email) {
      base64_decode($Email);
      
        DB::update('update customer set Status = ? where Email = ?',['VER',base64_decode($Email)]);
         return view('loginform');
       
     }

     
}

