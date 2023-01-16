<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $greetings = Greeting::all();
        return view ('admin.greetings.index')->with('greetings', $greetings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.greetings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Greeting::create($input);
        return redirect('greetings')->with('flash_message', 'greeting Addedd!');  
    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $greeting = Greeting::find($id);
        return view('admin.greetings.show')->with('greetings', $greeting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $greeting = Greeting::find($id);
        return view('admin.greetings.edit')->with('greetings', $greeting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   {
       $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'audio' => 'required|file|mimes:pdf,doc,mp4,mp3',
        ]);
  
        $input = $request->all();
        
        if ($image = $request->file('image')) {
            $destinationPath = 'assets/image_file';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['image'] = "$profileImage";
        }

        if ($request->hasFile('audio')) {
            $music_file = $request->file('audio');
            $filename = date('YmdHis') . "." . $music_file->getClientOriginalExtension();
            $location = public_path('assets/audio_file');
            $music_file->move($location,$filename);
            $input['audio'] = $filename;
        }
          
        $greeting->update($input);
    
        return redirect()->route('greetings.index')
                        ->with('success','wishes updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Greeting::destroy($id);
        return redirect('greetings')->with('flash_message', 'greeting deleted!');  
    }
}
