<?php
  
namespace App\Http\Controllers;
  
use App\Models\Oldsong;
use Illuminate\Http\Request;
  
class OldsongController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oldsongs = Oldsong::latest()->paginate(5);
   
        return view('admin.oldsongs.index',compact('oldsongs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.oldsongs.create');
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
            'songname' => 'required'
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
    
        Oldsong::create($input);
     
        return redirect()->route('oldsongs.index')
                        ->with('success','Song created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Oldsong  $oldsong
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oldsongs=Oldsong::find($id);
        return view('admin.oldsongs.show',compact('oldsongs'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oldsong  $oldsong
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {   $oldsongs=Oldsong::find($id);
        return view('admin.oldsongs.edit',compact('oldsongs'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oldsong  $oldsong
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
        $oldsongs = Oldsong::find($id);
        $oldsongs->update($input);
    
        return redirect()->route('oldsongs.index')
                        ->with('success','Song updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oldsong  $oldsong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Oldsong::destroy($id);
     
        return redirect()->route('oldsongs.index')
                        ->with('success','Song deleted successfully');
    }
}