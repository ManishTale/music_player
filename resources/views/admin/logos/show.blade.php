

@extends('admin.layouts.app')
    @section('content')
 
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0"> 
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show advertisement</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('advertisement_logo.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $advertisements->advertisement_name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Details:</strong>
                                {{ $advertisements->logo_image }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>advertisement Image:</strong>
                                <img src="/images/{{ $advertisements->advertisement_image }}" width="500px">
                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>logo image:</strong>
                                <img src="/images/{{ $advertisements->logo_image }}" style="height:54px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection