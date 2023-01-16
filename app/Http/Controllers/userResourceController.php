<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userResourceController extends Controller
{

    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users = User::orderBy('id','desc')->paginate(5);
       
        return view('admin.users.index', compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'user_id' => 'required',
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'detail' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             ]);
  
        $input = $request->all();
        
        if ($image = $request->file('image')) {
            $destinationPath = 'assets/profile_img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['image'] = $profileImage;
        }
        
         $input['user_id'] = "STB".substr(number_format(time() * rand(),0,'',''),0,6);

        User::create($input);
     
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('admin.users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
               $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $updateData = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      
        ]);
        
            if ($image = $request->file('image')) {
            $destinationPath = 'assets/profile_img';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        User::whereId($id)->update($input);
        return redirect()->route('users.index')->with('completed', 'User has been updated');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('completed', 'user has been deleted');
    }
}
