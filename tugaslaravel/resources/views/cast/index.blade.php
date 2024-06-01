@extends('layout.master')

@section('judul')
    add cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary mb-3">Add cast</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">umur</th>
                <th scope="col">bio</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($cast as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->umur}}</td>
                        <td>{{$value->bio}}</td>
                        <td>
                           
                            <form action="/cast/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                                <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data cast</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection