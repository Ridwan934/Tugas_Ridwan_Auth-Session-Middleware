
    @extends('template.main')
@section('title', 'create produk')

@section('content') 
    <div class="container">
      <h1 class="text-center mb-4 text-primary">Daftar Produk</h1>
      <div class="table">
        <a href="/Create" class="btn btn-success mb-4">Tambah Data</a>
        <table class="table ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar</th>
              <th scope="col">Nama</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($product as $pr)
            <tr>
              <th scope="row">1</th>
              <td class="w-25"><img src="{{ Storage::url($pr->image) }}" class="w-25"></td>
              <td>{{$pr->name }}</td>
              <td>{{$pr->description}}</td>
              <td>
                <a href="/edit/{{$pr->id}}" type="button" class="btn btn-primary">Edit</a>
                <a href="{{ route ('delete',[ "id" => $pr->id]) }}" type="button" class="btn btn-danger" >Delete</a>
              
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endsection