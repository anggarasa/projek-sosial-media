<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MEZZI</title>

  <!-- ======= Styles ====== -->
  <link rel="stylesheet" href="assets/css/style.css">
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
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
