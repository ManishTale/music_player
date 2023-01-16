<?php
  
namespace App\Http\Controllers;
  
use App\Models\Demotionsong;
use Illuminate\Http\Request;
  
class DemotionsongController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demotionsongs = Demotionsong::latest()->paginate(5);
   
        return view('admin.demotionsongs.index',compact('demotionsongs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.demotionsongs.create');
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
    
        Demotionsong::create($input);
     
        return redirect()->route('demotionsongs.index')
                        ->with('success','Song created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Demotionsong  $demotionsong
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demotionsongs=Demotionsong::find($id);
        return view('admin.demotionsongs.show',compact('demotionsongs'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demotionsong  $demotionsong
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {   $demotionsongs=Demotionsong::find($id);
        return view('admin.demotionsongs.edit',compact('demotionsongs'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demotionsong  $demotionsong
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
        $demotionsongs = Demotionsong::find($id);
        $demotionsongs->update($input);
    
        return redirect()->route('demotionsongs.index')
                        ->with('success','Song updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demotionsong  $demotionsong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Demotionsong::destroy($id);
     
        return redirect()->route('demotionsongs.index')
                        ->with('success','Song deleted successfully');
    }
}