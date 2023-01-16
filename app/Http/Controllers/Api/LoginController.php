<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Hash;
use DB;
use Validator, Input, Redirect; 
use Session;


class LoginController extends Controller
{
    
    public function login(Request $req){
        $validator = Validator::Make($req->all(),[
            // 'email' => 'required|email',
            
            // 'password' => 'required'
            ]);
            
            if($validator->fails()){
                return [
                    'status'=>false,
                    'message'=>$validator->messages()->toArray()
                ] ;
            
            }
         $user  =  DB::table('users')->where(['user_id'=>$req->user_id])->first();
        
        if($user){
            $req->session()->put('userId', $user->user_id);
            // $req->session()->put('userName', $user->name);
            // if(Hash::check($req->password, $user->password)){
                // if($user->image==null)
                //     $image = "";
                // else
                //   $image = asset('assets/profile_img/'.$user->image);
                   
                 return[
                    'status'=>true,
                    'message'=>'Login Successfull',
                    'data'=> [
                            'id'=>$user->id,
                            'user_id'=>$user->user_id,
                            'name'=>$user->name,
                            // 'password'=>$user->password
                            // 'mobile'=>$user->mobile,
                            // 'email'=>$user->email
                            // 'image'=> $image
                            
                        ]
                ];
            // }else{
            //     return [
            //         'status'=>false,
            //         'message'=> 'login did Not Match'
                    
            //     ] ;
            // }
             
        }else{
             return [
                    'status'=>false,
                    'message'=> 'Credential did Not Match'
                    
                ] ;
        }
        
    }
    
    // public function register(Request $req){
    //     $validator = Validator::make($req->all()
        
    //     ,[
    //             'name' => 'required|string|max:255',
    //             'mobile'=>'required|numeric|min:10',
    //             'email'=>'required|email',
    //             'password'=>'required'
    //         ]);
            
            
            
    //     if($validator->fails()){
    //         return [
    //                 'status'=>false,
    //                 'message'=>$validator->messages()->toArray()
    //             ] ;
            
    //     }
        
    //     $user = DB::table('users')->where('email',$req->email)->first();
        
    //     if($user){
    //         return[
    //             'status'=>false,
    //             'message'=>'Email Allready Exist'];

    //     }
        
    //     $user = DB::table('users')->where('mobile',$req->mobile)->first();
        
    //     if($user){
    //         return[
    //             'status'=>false,
    //             'message'=>'mobile Allready Exist'];

    //     }
        
    //     DB::table('users')->insert([
    //             'name' => $req->name,
    //             'mobile' => $req->mobile,
    //             'email' => $req->email,
    //             'password' =>Hash::make($req->password)
    //         ]);
        
    //     return[
    //                 'status'=>true,
    //                 'message'=>'Registration Successfull',
    //                 'data'=> $req->input()
    //             ];
    // }
}