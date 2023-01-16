<?php
  
namespace App\Http\Controllers;
  
use App\Models\Advertisement;
use Illuminate\Http\Request;
// use App\Http\Controllers\advertisements;
  
class advertisementsController extends Controller
{

 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements=Advertisement::all();
        return view('admin.advertisement.index')->with('advertisements',$advertisements);
          
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertisement.create');
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
            'logo_name' => 'required',
            'advertisement_name' => 'required',
            'description' => 'required',
            'logo_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'advertisement_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        
        $input = $request->all();
        $advertisements = "";
  
        if ($image = $request->file('logo_image')) {
            $destinationPath = 'assets/image_file';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['logo_image'] = "$profileImage";
            
        if ($image = $request->file('advertisement_image')) {
            $destinationPath = 'assets/image_file';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['advertisement_image'] = "$profileImage";
        }
            advertisement::create($input);
            return redirect()->route('advertisement.index')
                        ->with('success','Song created successfully.');
    }
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\advertisement $advertisements
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $advertisements=Advertisement::find($id);
        return view('admin.advertisement.show')->with('advertisements',$advertisements);
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.advertisement.edit',compact('advertisements'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'logo_name' => 'required',
            'advertisement_name' => 'required',
            'description' => 'required',
            'logo_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'advertisement_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
  
        $input = $request->all();
        if ($image = $request->file('logo_image')) {
            $destinationPath = 'assets/image_file';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['logo_image'] = "$profileImage";
            
        if ($image = $request->file('advertisement_image')) {
            $destinationPath = 'assets/image_file';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['advertisement_image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

          
        $advertisements->update($input);
    
        return redirect()->route('advertisement.index')
                        ->with('success','image updated successfully');
    }
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Advertisement::destroy($id);
     
        return redirect()->route('advertisement.index')
                        ->with('success','image deleted successfully');
    }
}