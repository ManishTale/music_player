<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Admin;
use Hash;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
 
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $admin = DB::table('admins')->first();
            $password = $request->password;
            if($admin->email == $request->email && Hash::check($password,$admin->password))
            {
                return view('admin.dashboard');
            }
            else
            {
                return back()->with('fail','not matched');
            }
    }
      
   
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.dashboard');
        }
  
        return redirect("/")->withSuccess('Opps! You do not have access');
    }
    
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}