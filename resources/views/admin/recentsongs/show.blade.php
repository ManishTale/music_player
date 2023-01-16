@extends('admin.layouts.app')
    @section('content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0"> 
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Song</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('recentsongs.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>song Name:</strong>
                                {{ $recentsongs->songname }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>movie Details:</strong>
                                {{ $recentsongs->moviename }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>movie Details:</strong>
                                {{ $recentsongs->birthdaywish }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>movie Details:</strong>
                                {{ $recentsongs->aniverserywish }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>movie Details:</strong>
                                {{ $recentsongs->other }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                               <img src="{{asset('/assets/image_file/'. $recentsongs->image)}}" width="300px">
                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Audio:</strong>
                                <audio controls>
                                    <source src="{{asset('/assets/audio_file/'. $recentsongs->audio)}}" type="audio/mpeg">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection