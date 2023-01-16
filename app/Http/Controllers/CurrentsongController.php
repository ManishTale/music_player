<?php
  
namespace App\Http\Controllers;
  
use App\Models\Currentsong;
use Illuminate\Http\Request;
  
class CurrentsongController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentsongs = Currentsong::latest()->paginate(5);
   
        return view('admin.currentsongs.index',compact('currentsongs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.currentsongs.create');
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
            'moviename' => 'required',
            'songname' => 'required',
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
    
        Currentsong::create($input);
     
        return redirect()->route('currentsongs.index')
                        ->with('success','Song created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Currentsong  $Currentsong
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentsongs=Currentsong::find($id);
        return view('admin.currentsongs.show',compact('currentsongs'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Currentsong  $currentsong
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {   $currentsongs=Currentsong::find($id);
        return view('admin.currentsongs.edit',compact('currentsongs'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Currentsong  $currentsong
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
             'moviename' => 'required',
            'songname' => 'required'
        ]);
  
        $input['moviename'] = $request->moviename;
        $input['songname'] = $request->songname;
  
        if ($image = $request->file('image')) {
            $destinationPath = public_path('assets/image_file/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            // unset($input['image']);
        }

            
        if ($audio = $request->file('audio')) {
            $destinationPath = public_path('assets/audio_file/');
            $profileaudio = date('YmdHis') . "." . $audio->getClientOriginalExtension();
            $audio->move($destinationPath, $profileaudio);
            $input['audio'] = "$profileaudio";
            // unset($input['audio']);
        }
        // print_r($input['audio']);exit;
        $currentsongs = Currentsong::find($id);
        $currentsongs->update($input);
    
        return redirect()->route('currentsongs.index')
                        ->with('success','Song updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Currentsong  $currentsong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Currentsong::destroy($id);
     
        return redirect()->route('currentsongs.index')
                        ->with('success','Song deleted successfully');
    }
}