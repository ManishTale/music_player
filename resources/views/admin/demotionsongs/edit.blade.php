@extends('admin.layouts.app')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0"> 
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Edit Song</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('demotionsongs.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                     
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('demotionsongs.update',$demotionsongs->id) }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        @method('PUT')
                     
                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>movie name:</strong>
                                    <input type="text" name="moviename" value="{{ $demotionsongs->moviename }}" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>song name:</strong>
                                    <textarea class="form-control" style="height:150px" name="songname" placeholder="Detail">{{ $demotionsongs->songname }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                    <img src="{{ asset('assets/image_file/'.$demotionsongs->image) }}" width="300px">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Audio:</strong>
                                    <input type="file" name="audio" class="form-control" placeholder="audio">
                                    <audio controls style="height:54px;"><source src="{{ asset('assets/audio_file/'.$demotionsongs->audio) }}"></audio>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection