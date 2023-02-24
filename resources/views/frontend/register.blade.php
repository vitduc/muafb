<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/register.css')}}">
</head>
<body class="text-center">

    <main class="form-signin">
        <img class="mb-4" src="{{ asset('images/logo_1.png')}}" alt="" width="172" style="border-radius: 10px;">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
        <form class="form-signin" action="{{route('post.register')}}" method="POST">
            @include('_alert')
            @csrf
            <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" value="{{ old('name', '') }}">
                <label for="floatingInput">Tên đăng nhập</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" value="{{ old('email', '') }}">
                <label for="floatingInput">Số điện thoại</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingInput">
                <label for="floatingInput">Mật khẩu</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br>
            <div class="form-floating">
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingInput">
                <label for="floatingInput">Nhập lại mật khẩu</label>
                @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br>

            <button class="btn btn-primary w-100" type="submit">Sign up</button>

            <div class="text-center pt-2">
                <a href="{{route('login')}}">Sign in now</a>
            </div>
        </form>
    </main>
</body>
</html>
