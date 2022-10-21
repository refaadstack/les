@extends('layouts.app')
@section('content')
 <div class="container">
    <h5>About Table</h5>
    <a href="{{ route('about.create') }}" class="btn btn-sm btn-primary mb-2">Tambah</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pengalaman</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($abouts as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->pengalaman }}</td>
                <td>{{ $item->pendidikan }}</td>
                <td>
                    <a href="{{ route('about.edit',$item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <a href="{{ route('about.destroy',$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
 </div>
@endsection