<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class signInController extends Controller
{
    public function UserLogin(Request $request, $CO)
    {
        $obj=json_decode($CO);
        $Username=$obj[0];
        $Userpaswd=$obj[1];
        
        

        $UID=DB::table('users')->insertGetId(['name'=>$Username,
        'password'=>$Userpaswd,
        'email'=>0
        ]);
        
        return "Getting from controller".$obj[0];






    }
    public function signIn(){


        //$users = DB::table('userinfo')->get()->where(['UserName'='admin']);
        $results=DB::select('select * from userinfo where UserName=\'admin\'');
        
        
        
        
        
       
        session(['pass' => 'yes']);
         
       return $results;

    }
    
}
