<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{route('login')}}" method="POST">
        @if($errors->any()) 
        <h1 style="color: red; ">{{$errors->first()}}</h1>
        @endif
        @csrf
        <label for="email">Email : </label>
        <input type="email" placeholder="Masukan email" id="email" name="email">
        <label for="email">Password : </label>
        <input type="password" placeholder="Masukan password" id="password" name="password">
        <button class="submit">Login</button>
    </form>
</body>
</html>