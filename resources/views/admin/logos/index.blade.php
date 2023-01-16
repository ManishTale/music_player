@extends('admin.layouts.app')
@section('content')
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
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('advertisement_logo.create') }}"> Add & Logo</a>
                            </div>
                        </div>
                    </div>
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                     
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  class="display" id="myTable" style="min-width: 845px">
                     <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Logo Name</th>
                            <th>Logo Name</th>
                            <th>Add Name</th>
                            <th>Add Image</th>
                            <th>Description</th>
                            <th width="500px">Action</th>
                        </tr>
                        </thead>
                        <?php $i=1; ?>
                        @foreach ($advertisements as $advertisement)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{$advertisement->logo_name }}</td>
                            <td><img src="https://www.samajutkarsh.com/media_player/public/images/{{ $advertisement->logo_image }}" width="100px"></td>          
                            <td>{{ $advertisement->name }}</td>
                            <td><img src="https://www.samajutkarsh.com/media_player/public/images/{{ $advertisement->advertisement_image }}" width="100px"></td>
                            <td>{{ $advertisement->detail }}</td>
                            <td>
                                <form action="{{ route('advertisement_logo.destroy',$advertisement->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('advertisement_logo.show',$advertisement->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('advertisement_logo.edit',$advertisement->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm("Confirm delete?")">Delete</button
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
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