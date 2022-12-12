{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div @class(["row"])>
            <div @class(["col-lg-12", "margin-tb"])>
                <div>
                    <h2>Detail produk</h2>
                </div>
                <div>
                    <a @class(['btn', 'btn-secondary']) href="{{route('index')}}">Back</a>
                </div>
                </div>
            </div>
        </div>
       
    <div @class(["row"])>
        <div @class(['col-xs-12', 'col-sm-12','col-md-12'])>
            <div @class(["form-group"])>
                <strong>Nama</strong>
                {{$produk->name}}
            </div>
        </div>
        <div @class(['col-xs-12', 'col-sm-12','col-md-12'])>
            <div @class(["form-group"])>
                <strong>Deskripsi</strong>
                {{$produk->description}}
            </div>
        </div>
    </div>
</body>
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mb-4 text-primary">Daftar Produk</h1>
      <div class="table">
        <a href="/Create" class="btn btn-success mb-4">Edit Data</a>
       
        <table class="table">
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
            @foreach ($produk as $pr)
            <tr>
              <th scope="row">1</th>
              <td>{{$pr->name }}</td>
              <td>{{$pr->description}}</td>
              <td><img src="{{ Storage::url($pr->image) }}" class="w-50"></td>
              <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <form action="/data" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="button" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>