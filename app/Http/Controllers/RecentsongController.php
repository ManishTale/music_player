<?php
  
namespace App\Http\Controllers;
  
use App\Models\Recentsong;
use Illuminate\Http\Request;
  
class RecentsongController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recentsongs = Recentsong::latest()->paginate(5);
   
        return view('admin.recentsongs.index',compact('recentsongs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recentsongs.create');
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
    
        Recentsong::create($input);
     
        return redirect()->route('recentsongs.index')
                        ->with('success','Song created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Recentsong  $recentsong
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recentsongs=Recentsong::find($id);
        return view('admin.recentsongs.show',compact('recentsongs'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recentsong  $recentsong
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {   $recentsongs=Recentsong::find($id);
        return view('admin.recentsongs.edit',compact('recentsongs'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recentsong  $recentsong
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
        $recentsongs = Recentsong::find($id);
        $recentsongs->update($input);
    
        return redirect()->route('recentsongs.index')
                        ->with('success','Song updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recentsong  $recentsong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recentsong::destroy($id);
     
        return redirect()->route('recentsongs.index')
                        ->with('success','Song deleted successfully');
    }
}