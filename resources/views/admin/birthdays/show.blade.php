@extends('admin.layouts.app')
    @section('content')
   
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0"> 
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Wishes</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('birthdays.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $birthdays->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Details:</strong>
                                {{ $birthdays->detail }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <img src="{{asset('/assets/image_file/'.$birthday->image)}}" width="100px">
                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Audio:</strong>
                                <audio controls>
                                    <source src="{{asset('/assets/audio_file/'. $birthday->audio)}}" type="audio/mpeg">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection