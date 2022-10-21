@extends('layouts.app')
@section('content')
 <div class="container">
    <h5>Portofolio Table</h5>
    <a href="{{ route('portofolio.create') }}" class="btn btn-sm btn-primary mb-2">Tambah</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Caption</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($portofolios as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->title }}</td>
                <td><img style="width: 100px" src="{{ Storage::url($item->image) }}" alt=""></td>
                <td>{{ $item->caption }}</td>
                <td>
                    <a href="{{ route('portofolio.edit',$item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <a href="{{ route('portofolio.destroy',$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
 </div>
@endsection