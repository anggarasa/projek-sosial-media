<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MEZZI - {{ $title }}</title>

  {{-- Kopidev profile --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- ======= Styles ====== -->
  <link rel="stylesheet" href="assets/css/style.css">
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
  </style>

</head>
<body>
  <div class="container">
    @include('home.layouts.sidebar')

    <!-- ========================= Main ==================== -->
    <div class="main">
      @yield('home')
    </div>
  </div>

  <!-- =========== Scripts =========  -->
  <script src="assets/js/main.js"></script>

  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
