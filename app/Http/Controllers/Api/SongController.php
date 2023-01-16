<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Hash;
use App\Models\Recentsong;
use App\Models\DedicateSong;
use App\Models\LikeSongs;
use App\Models\Currentsong;
use App\Models\Oldsong;
use App\Models\Musicdirector;
use App\Models\Musiccategories;
use App\Models\Demotionsong;
use Session;

use DB;
use Validator, Input, Redirect; 


class SongController extends Controller
{
    public function recentsong(){
        
        $resentsongs  =  Recentsong::get();
       
        if($resentsongs->isNotEmpty()){
                $data = array();
                foreach($resentsongs as $recentsong){
                    $row['id'] = $recentsong->id;
                    $row['category'] = $recentsong->category;
                    $row['songname'] = $recentsong->songname;
                    $row['moviename'] = $recentsong->moviename;
                    $row['image'] = asset('assets/image_file/'.$recentsong->image);
                    $row['audio'] = asset('assets/audio_file/'.$recentsong->audio);
                    $row['created_at'] = $recentsong->created_at;
                    $row['updated_at'] = $recentsong->updated_at;  
                    
                    $data[] = $row;
                }
                   
                 return[
                    'status'=>true,
                    'message'=>'Recent Song List',
                    'data'=> $data
                ];
        }else{
            return [
                'status'=>false,
                'message'=> 'Record not found'
                
            ] ;
        }

        
    }
    
    public function musiccategories(){
        
        $musiccategories  = Musiccategories::get();
       
        if($musiccategories->isNotEmpty()){
                $data = array();
                foreach($musiccategories as $musiccategory){
                    $row['id'] = $musiccategory->id;
                    $row['songname'] = $musiccategory->songname;
                    $row['moviename'] = $musiccategory->moviename;
                    $row['image'] = asset('assets/image_file/'.$musiccategory->image);
                    $row['audio'] = asset('assets/audio_file/'.$musiccategory->audio);
                    $row['created_at'] = $musiccategory->created_at;
                    $row['updated_at'] = $musiccategory->updated_at;  
                    
                    $data[] = $row;
                }
                   
                 return[
                    'status'=>true,
                    'message'=>'Musiccategories Song List',
                    'data'=> $data
                ];
        }else{
            return [
                'status'=>false,
                'message'=> 'Record not found'
                
            ] ;
        }

        
    }
    
    public function musicdirector(){
        
        $musicdirectors  =  Musicdirector::get();
       
        if($musicdirectors->isNotEmpty()){
                $data = array();
                foreach($musicdirectors as $musicdirector){
                    $row['id'] = $musicdirector->id;
                    $row['songname'] = $musicdirector->songname;
                    $row['moviename'] = $musicdirector->moviename;
                    $row['image'] = asset('assets/image_file/'.$musicdirector->image);
                    $row['audio'] = asset('assets/audio_file/'.$musicdirector->audio);
                    $row['created_at'] = $musicdirector->created_at;
                    $row['updated_at'] = $musicdirector->updated_at;  
                    
                    $data[] = $row;
                }
                   
                 return[
                    'status'=>true,
                    'message'=>'Musicdirector List',
                    'data'=> $data
                ];
        }else{
            return [
                'status'=>false,
                'message'=> 'Record not found'
                
            ] ;
        }

        
    }
    
    public function oldsong(){
        
        $oldsongs  =  Oldsong::get();
       
        if($oldsongs->isNotEmpty()){
                $data = array();
                foreach($oldsongs as $oldsong){
                    $row['id'] = $oldsong->id;
                    $row['category'] = $oldsong->category;
                    $row['songname'] = $oldsong->songname;
                    $row['moviename'] = $oldsong->moviename;
                    $row['image'] = asset('assets/image_file/'.$oldsong->image);
                    $row['audio'] = asset('assets/audio_file/'.$oldsong->audio);
                    $row['created_at'] = $oldsong->created_at;
                    $row['updated_at'] = $oldsong->updated_at;  
                    
                    $data[] = $row;
                }
                   
                 return[
                    'status'=>true,
                    'message'=>'Oldsong Song List',
                    'data'=> $data
                ];
        }else{
            return [
                'status'=>false,
                'message'=> 'Record not found'
                
            ] ;
        }

        
    }
    
    public function currentsong(){
        
        $currentsongs  =  Currentsong::get();
       
        if($currentsongs->isNotEmpty()){
                $data = array();
                foreach($currentsongs as $currentsong){
                    $row['id'] = $currentsong->id;
                    $row['category'] = $currentsong->category;
                    $row['songname'] = $currentsong->songname;
                    $row['moviename'] = $currentsong->moviename;
                    $row['image'] = asset('assets/image_file/'.$currentsong->image);
                    $row['audio'] = asset('assets/audio_file/'.$currentsong->audio);
                    $row['created_at'] = $currentsong->created_at;
                    $row['updated_at'] = $currentsong->updated_at;  
                    
                    $data[] = $row;
                }
                   
                 return[
                    'status'=>true,
                    'message'=>'Currentsong Song List',
                    'data'=> $data
                ];
        }else{
            return [
                'status'=>false,
                'message'=> 'Record not found'
                
            ] ;
        }

        
    }
    public function demotionsong(){
        
        $demotionsongs  = Demotionsong::get();
       
        if($demotionsongs->isNotEmpty()){
                $data = array();
                foreach($demotionsongs as $demotionsong){
                    $row['id'] = $demotionsong->id;
                    $row['category'] = $demotionsong->category;
                    $row['songname'] = $demotionsong->songname;
                    $row['moviename'] = $demotionsong->moviename;
                    $row['image'] = asset('assets/image_file/'.$demotionsong->image);
                    $row['audio'] = asset('assets/audio_file/'.$demotionsong->audio);
                    $row['created_at'] = $demotionsong->created_at;
                    $row['updated_at'] = $demotionsong->updated_at;  
                    
                    $data[] = $row;
                }
                   
                 return[
                    'status'=>true,
                    'message'=>'Demotionsong Song List',
                    'data'=> $data
                ];
        }else{
            return [
                'status'=>false,
                'message'=> 'Record not found'
                
            ] ;
        }

        
    }
    
    public function searchsong($songname){
        
        // $demotionsongs  = Demotionsong::get();
        // $Demotionsong = Demotionsong::where('songname','LIKE','%'.$songname.'%');
        $Recentsong = Recentsong::select('id', 'songname', 'moviename', 'image', 'audio')->where('songname','LIKE','%'.$songname.'%')
                      ->orWhere('moviename','LIKE','%'.$songname.'%');
        // $Recentsong = Recentsong::where('songname','LIKE','%'.$songname.'%');
        $Currentsong = Currentsong::select('id', 'songname', 'moviename', 'image', 'audio')->where('songname','LIKE','%'.$songname.'%')
                       ->orWhere('moviename','LIKE','%'.$songname.'%');
        $Oldsong = Oldsong::select('id', 'songname', 'moviename', 'image', 'audio')->where('songname','LIKE','%'.$songname.'%')
                   ->orWhere('moviename','LIKE','%'.$songname.'%');
        // $Demotionsong = Demotionsong::where('songname','LIKE','%'.$songname.'%');
            
            $searchResult = Demotionsong::select('id', 'songname', 'moviename', 'image', 'audio')->where('songname','LIKE','%'.$songname.'%')
                            ->orWhere('moviename','LIKE','%'.$songname.'%')
                            ->union($Recentsong)
                            ->union($Currentsong)
                            ->union($Oldsong)
                            ->get();
                   
        if($searchResult->isNotEmpty()){
                $data = array();
                foreach($searchResult as $searchResults){
                    $row['id'] = $searchResults->id;
                    $row['songname'] = $searchResults->songname;
                    if($searchResults->moviename == null){
                        $row['moviename'] = null;
                    }else{
                        $row['moviename'] = $searchResults->moviename;
                    }
                    $row['image'] = asset('assets/image_file/'.$searchResults->image);
                    $row['audio'] = asset('assets/audio_file/'.$searchResults->audio);
                    $row['created_at'] = $searchResults->created_at;
                    $row['updated_at'] = $searchResults->updated_at;  
                    // array_map("unserialize", array_unique(array_map("serialize", $row)))
                    
                    $data[] = $row;
                     $ids = array_column($data, 'songname');
                    $ids = array_unique($ids);
                    $data = array_filter($data, function ($key, $value) use ($ids) {
                        return in_array($value, array_keys($ids));
                    }, ARRAY_FILTER_USE_BOTH);
                }
                   
                 return[
                    'status'=>true,
                    'message'=>'Song List',
                    'data'=> $data
                ];
        }else{
            return [
                'status'=>false,
                'message'=> 'Record not found'
                
            ] ;
        }

        
    }
    
    public function Likesong(Request $request){
        
        $userId = $request->session()->get('userId');
        
            $LikeSongs = LikeSongs::where('songId', $request->songId)
                                            ->where('category', $request->category)
                                            ->where('userId', $userId)
                                            ->first();
            if($LikeSongs != null){
                if($LikeSongs->like == 'true'){
                     $likeold = LikeSongs::where('id', $LikeSongs->id)->update(['like' => 'false']);
                    // $likeold = Oldsong::where('id', $request->songId)->update(['like' => '1', 'userId' => $userId]);
                    if($likeold){
                        return[
                            'status'=>true,
                            'message'=>'Disliked the song'
                        ];
                    }
                }else{
                     $likeold = LikeSongs::where('id', $LikeSongs->id)->update(['like' => 'true']);
                    // $likeold = Oldsong::where('id', $request->songId)->update(['like' => '1', 'userId' => $userId]);
                    if($likeold){
                        return[
                            'status'=>true,
                            'message'=>'Liked the song'
                        ];
                    }
                            
                }
           
            }else{
                
                $likeold = LikeSongs::insert(['like' => 'true', 'userId' => $userId, 'songId' => $request->songId, 'category' => $request->category]);
            // $likeold = Oldsong::where('id', $request->songId)->update(['like' => '1', 'userId' => $userId]);
            if($likeold){
                return[
                    'status'=>true,
                    'message'=>'Liked the song'
                ];
            }
                
            }
        
            
    }
    
    public function dedicatesong(Request $request){
     
        
    
        $userId = $request->session()->get('userId');
        // $OccessionName = [];
            // $user = DedicateSong::where(['id'=>$request->songId])->first();
            // if($request->birthday_name == ''){
            if (array_key_exists("birthday_name",$request->all())){
                // $OccessionName = $request->birthday_name;
                 $validator = Validator::Make($request->all(),[
                    'songId' => 'required',
                    'msg_sender' => 'required',
                    'category' => 'required',
                    'birthday_name' => 'required',
                    'Time_Slot' => 'required',
                    'Time' => 'required'
                    ]);
                    
                    if($validator->fails()){
                        return [
                            'status'=>false,
                            'message'=>$validator->messages()->toArray()
                        ] ;
                    
                }
                  $likeold = DedicateSong::insert([
                            'userId' => $userId,
                            'songId' => $request->songId,
                            'msg_sender' => $request->msg_sender,
                            'category' => $request->category, 
                            'birthday_name' => $request->birthday_name, 
                            'anniversary_name' => null, 
                            'Time_Slot' => $request->Time_Slot, 
                            'Time' => $request->Time
                          ]);

                if($likeold){
                    return[
                        'status'=>true,
                        'message'=>'Dedicated song'
                    ];
                }
            }
            // if($request->anniversary_name == ''){
            if (array_key_exists("anniversary_name",$request->all())){
                // $OccessionName = $request->anniversary_name;
                 $validator = Validator::Make($request->all(),[
                    'songId' => 'required',
                    'msg_sender' => 'required',
                    'category' => 'required',
                    'anniversary_name' => 'required',
                    'Time_Slot' => 'required',
                    'Time' => 'required'
                    ]);
                    
                    if($validator->fails()){
                        return [
                            'status'=>false,
                            'message'=>$validator->messages()->toArray()
                        ] ;
                    
                }
                $likeold = DedicateSong::insert([
                            'userId' => $userId,
                            'songId' => $request->songId,
                            'msg_sender' => $request->msg_sender,
                            'category' => $request->category, 
                            'birthday_name' => null, 
                            'anniversary_name' => $request->anniversary_name, 
                            'Time_Slot' => $request->Time_Slot, 
                            'Time' => $request->Time
                          ]);

                if($likeold){
                    return[
                        'status'=>true,
                        'message'=>'Dedicated song'
                    ];
                }
                
                
                
            }
            
            // echo "<pre>";
            // print_r($OccessionName);
                // $likeold = DedicateSong::insert([
                //             'userId' => $userId,
                //             'songId' => $request->songId,
                //             'msg_sender' => $request->msg_sender,
                //             'category' => $request->category, 
                //             'birthday_name' => $request->birthday_name, 
                //             'anniversary_name' => $request->anniversary_name, 
                //             'Time_Slot' => $request->Time_Slot, 
                //             'Time' => $request->Time
                //           ]);

                // if($likeold){
                //     return[
                //         'status'=>true,
                //         'message'=>'Dedicated song'
                //     ];
                // }
           
        // }
        
    }
    
}