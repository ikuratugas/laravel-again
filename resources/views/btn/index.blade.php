<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Utama</title>

  <style>
    .konten {
      display: flex;
      flex-direction:row; 
    }
  </style>
</head>
<body>

  <div class="konten">
    <div class="box1">
      @include('btn.components.sidebar')
    </div>
    <div class="box2">
      @yield('content')
    </div>
  </div>

</body>
</html>