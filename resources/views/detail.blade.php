<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Genre
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Fantasi</a></li>
                  <li><a class="dropdown-item" href="#">Misteri</a></li>
                  <li><a class="dropdown-item" href="#">Thriller</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <div class="container buku mt-4">
        <div class="img-buku">
            <img src="img/1.jpg" alt="" width="300px">
        </div>


        @foreach($writers as $writer)
        <div class="detail">
            <div class="list-buku2">
                
    
                <div class="list-penulis">
                    <ul>
                        <li>Nama Penulis : {{ $writer['nama_penulis'] }}</li>
                        <li>Tempat lahir : Cambridge, Inggris, United Kingdom</li>
                        <li>Tanggal lahir : 9 november 1955</li>
                        <li>Email : Jonathan12@gmail.com</li>
                    </ul>
                </div>
            </div>

            
        </div>
        @endforeach
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>