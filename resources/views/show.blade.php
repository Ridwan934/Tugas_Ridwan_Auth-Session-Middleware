<html lang="en">
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
</html>