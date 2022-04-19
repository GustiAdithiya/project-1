<!DOCTYPE html>
<html>

<head>
  <title>CRUD Data Produk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/resources/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD DATA PRODUK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="produk">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mitra">Mitra</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">{{Auth::user()->id}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">{{Auth::user()->name}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">{{Auth::user()->akses}}</a>
          </li>
        </ul>
        <a class="d-flex" href="{{route('actionlogout')}}">Logout</a>
      </div>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>



</body>

</html>