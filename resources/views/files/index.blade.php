@extends('layouts.templates')

@section('content')


  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Books list</div>

                <div class="card-body">

                    <a href="{{ route('files.create') }}" class="btn btn-primary">Add new book</a>
                    <br /><br />

                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Download file</th>
                        </tr>
                        @foreach($files as $file)
                            <tr>
                                <td>{{ $file->title }}</td>
                                <td><a href="{{ route('files.download', $file->uuid) }}">{{ $file->cover }}</a></td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
    
  </div>
@endsection 