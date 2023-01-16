<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\models\Admin;


class ChangepasswordController extends Controller
{
    public function change_password()
    {
       return view('admin.change_password');
    }

    public function update_password(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
    //  dd($request->all());
        #Match The Old Password
        if($request && !Hash::check($request->old_password, auth()->admin()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        Admin::whereId(auth()->admin()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with("status", "Password changed successfully!");
}
}
