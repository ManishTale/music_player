@extends('admin.layouts.app')
    @section('content')
     <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet"> 
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0"> 
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Song</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('demotionsongs.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>movie name:</strong>
                                {{ $demotionsongs->moviename }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>song name:</strong>
                                {{ $demotionsongs->songname }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                               <img src="{{asset('/assets/image_file/'. $demotionsongs->image)}}" width="300px">
                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Audio:</strong>
                                <audio controls>
                                    <source src="{{asset('/assets/audio_file/'. $demotionsongs->audio)}}" type="audio/mpeg">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
    $(document).ready(function () {
    $('#advertisementlogo').DataTable();
});
</script>
        <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
@endsection