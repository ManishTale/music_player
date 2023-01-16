<?php
  
namespace App\Http\Controllers;
  
use App\Models\Product;
use Illuminate\Http\Request;
  
class ProductController extends Controller
{

 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
    // print_r($products);exit;
        return view('admin.products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
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
    
        Product::create($input);
     
        return redirect()->route('products.index')
                        ->with('success','Song created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return view('admin.products.show',compact('product'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $product=Product::find($id);
        return view('admin.products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

            
        if ($audio = $request->file('audio')) {
            $destinationPath = 'images/';
            $profileaudio = date('YmdHis') . "." . $audio->getClientOriginalExtension();
            $audio->move($destinationPath, $profileaudio);
            $input['audio'] = "$profileaudio";
        }else{
            unset($input['audio']);
        }
          
        Product::update($input);
    
        return redirect()->route('products.index')
                        ->with('success','Song updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
     
        return redirect()->route('products.index')
                        ->with('success','Song deleted successfully');
    }
}