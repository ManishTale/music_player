<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminController extends Controller
{
    
     public function __invoke(Request $request){
      
   $admin = DB::table('admins')->first();
            $password = $request->password;
            if($admin->email == $request->email && Hash::check($password,$admin->password))
            {
                $set_array=array('id'=>$admin->id,'email'=>$admin->email,'name'=> $admin->name);
            $request->session()->put('admin_session',$set_array);
                return view('admin.dashboard');
            }
            else
            {
                return back()->with('fail','not matched');
            }
     }
     
     
     public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
}