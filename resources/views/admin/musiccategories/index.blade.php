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
                                <a class="btn btn-success" href="{{ route('musiccategories.create') }}"> Add Song</a>
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
                            <th>Sr.No.</th>
                            <th>Image</th>
                            <th>Audio</th>
                            <th>movie name</th>
                            <th>song name</th>
                            <th>music categories name</th>
                            <th width="500px">Action</th>
                        </tr>
                        </thead>
                        <?php $i=1; ?>
                        @foreach ($musiccategories as $musiccategory)
                        <tr>
                            <td>{{ $i }}</td>
                            <td><img src="{{asset('/assets/image_file/'. $musiccategory->image)}}" width="100px"></td>
                            <td>
                                <audio controls>
                                    <source src="{{asset('/assets/audio_file/'. $musiccategory->audio)}}" type="audio/mpeg">
                                </audio>
                            </td>            
                            <td>{{ $musiccategory->moviename }}</td>
                            <td>{{ $musiccategory->songname }}</td>
                            <td>{{ $musiccategory->musiccategories }}</td>
                            <td>
                                <form action="{{ route('musiccategories.destroy',$musiccategory->id) }}" method="POST">
                                    <a class="btn btn-info btn-sm" href="{{ route('musiccategories.show',$musiccategory->id) }}">Show</a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('musiccategories.edit',$musiccategory->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm("Confirm delete?")">Delete</button
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