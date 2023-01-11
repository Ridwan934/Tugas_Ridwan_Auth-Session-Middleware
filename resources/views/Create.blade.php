@extends('template.main')
@section('title', 'create produk')

@section('content')    


    <div class="container">
      <h1 class="text-center mb-4 text-primary">Tambah Produk</h1>
     <form action="/store" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Produk</label>
        <input type="text" name = "name" class="form-control" id="exampleFormControlInput1" placeholder="masukan produk">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea name ="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Default file input example</label>
        <input name ="image" class="form-control" type="file" id="formFile">
      </div>
      <button type="submit">tambah</button>
     </form>
    </div>
    @endsection
    
  
  