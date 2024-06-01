@extends('layout.master')


@section('judul')
    Edit  cast
@endsection

@section('content')
<form action="/cast/{{$cast->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">umur</label>
                <input type="text" class="form-control" name="umur" id="bio" placeholder="Masukkan umur" value="{{ $cast->umur }}">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">bio</label>
                <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan bio" value="{{ $cast->bio  }}">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

            <button type="submit" class="btn btn-primary">Add cast</button>
        </form>
@endsection