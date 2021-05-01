<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class logincontroller extends Controller
{
    
    public function loginform(){
        return view('loginform');
    }

    public function checklogin(Request $request){
        $request->session()->put('Email',$request->input('Email'));
        $Email = $request->session()->get('Email');
        $Password = $request->input('Password');
        $check = DB::select('SELECT c.id from customer c  
        join oauthuser oth on oth.CustomerId = c.ID
        WHERE c.Email = ?
        and oth.password = ?
        and c.status = ? ',[$Email,MD5($Password),'VER']);
        
        
        if(count($check) == 1){
            echo "you login success";
            echo "<br>";
           
        }
        else{
            echo "invalid login";
            
             
        }
    }
}
