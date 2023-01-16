@extends('admin.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{asset('/xhtml/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"  rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
           <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                    </div>
                    <!-- row -->
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('users.create') }}"> Create User</a>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md" id="myTable">
                                    <thead>
                                        <tr>
                                            <th style="width:80px;"><strong>Sr. No.</strong></th>
                                            <th><strong>Name</strong></th>
                                            <th><strong>Number</strong></th>
                                            <th><strong>Email</strong></th>  
                                            <th><strong>Detail</strong></th>  
                                            <th><strong>Image</strong></th>  
                                            <th><strong>Action</strong></th>  
                                        </tr>
                                    </thead>
                                        <tbody>
                                            @isset($users)
                                            <?php $i=1; ?>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->mobile }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->detail }}</td>
                                                 <td><img src="{{asset('/assets/profile_img/'.$user->image)}}" width="100px"></td>
                                                <td width="500px">
                                                    <form action="{{ route('users.destroy',$user->id) }}" method="Post">
                                                      <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
    											</td>
                                            </tr>
                                            <?php $i++ ?>
                                            @endforeach
                                            @endisset
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>    
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	
<script>
   $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
         @endsection