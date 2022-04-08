<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-5">
            <div class="card">
                <div class="card-header  mb-0"><h5 class="text-center">Login</h5></div>
                <div class="card-body">
                    <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </hr>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
</body>
</html>