<?php
  
namespace App\Http\Controllers;
  
use App\Models\Musicdirector;
use Illuminate\Http\Request;
  
class MusicdirectorController extends Controller
{

 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musicdirectors = Musicdirector::latest()->paginate(5);
    // print_r($MusicCategoriess);exit;
        return view('admin.musicdirectors.index',compact('musicdirectors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.musicdirectors.create');
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
            'musicdirectorname' => 'required',
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
    
        Musicdirector::create($input);
     
        return redirect()->route('musicdirectors.index')
                        ->with('success','Song created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\MusicCategories  $MusicCategories
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $musicdirectors=Musicdirector::find($id);
        return view('admin.musicdirectors.show',compact('musicdirectors'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MusicCategories  $MusicCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $musicdirectors=Musicdirector::find($id);
        return view('admin.musicdirectors.edit',compact('musicdirectors'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MusicCategories  $MusicCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
            $musicdirectors = Musicdirector::find($id);
        $musicdirectors->update($input);
    
        return redirect()->route('musicdirectors.index')
                        ->with('success','Song updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MusicCategories  $MusicCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Musicdirector::destroy($id);
     
        return redirect()->route('musicdirectors.index')
                        ->with('success','Song deleted successfully');
    }
}