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
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('birthdays.create') }}"> Create New wishes</a>
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
                                        <th>Image</th>
                                        <th>Audio</th>
                                        <th>Name</th>
                                        <th>Details</th>
                                        <th width="500px">Action</th>
                                    </tr>
                                </thead>
                                    <?php $i=1; ?>
                                    @foreach ($birthdays as $birthday)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td> <img src="{{asset('/assets/image_file/'.$birthday->image)}}" width="100px"></td>
                                        <td><audio controls>
                                                <source src="{{asset('/assets/audio_file/'. $birthday->audio)}}" type="audio/mpeg">
                                            </audio></td>            
                                        <td>{{ $birthday->name }}</td>
                                        <td>{{ $birthday->detail }}</td>
                                        <td>
                                            <form action="{{ route('birthdays.destroy',$birthday->id) }}" method="POST">
                                                <a class="btn btn-info btn-sm" href="{{ route('birthdays.show',$birthday->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="btn btn-primary btn-sm" href="{{ route('birthdays.edit',$birthday->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                 {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                    <?php $i++; ?>
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