<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\user;
use Laravel\Socialite\Facades\Socialite;
use DB;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the facebook. authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        

         $user = Socialite::driver('facebook')->user();
         $Facebook_id = $user->getId();
         $str = $user->getName();
         $Email = $user->getEmail();  
         $profile = $user->getAvatar();
         $arrayname = explode(" ",$str);
         $Firstname = $arrayname[0];
         $Lastname = $arrayname[1];

        $loginfb = DB::select('SELECT c.id from customer c join oauthfacebook othfb on othfb.CustomerId = c.ID
        WHERE c.Email = ?
        and othfb.oauthId = ?
        and c.status = ? ',[$Email,$Facebook_id,'VER']);
         
         if(count($loginfb) == 1){
                echo "you login success";
         }
        else{
                return view('customer_form_facebook',['Facebook_id'=>$Facebook_id,'Email'=>$Email,'Firstname'=>$Firstname,
                'Lastname'=>$Lastname,'Profile'=>$profile]);
        }
       
       

          
          
          

        
    
    }
}
