<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
</head>
<body class="text-center">

    <main class="form-signin">
        <img class="mb-4" src="{{ asset('images/logo_1.png')}}" alt="" width="172" style="border-radius: 10px;">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <form class="form-signin" action="{{route('post.login')}}" method="POST">
            @csrf
            @include('_alert')
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" value="{{ old('email', '') }}">
                <label for="floatingInput">user name</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword">
                <label for="floatingPassword">password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary w-100" type="submit">Sign in</button>
            <a href="{{route('register')}}">Register now</a>
        </form>
    </main>
</body>
</html>
