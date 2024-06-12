<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ThreadLoop | {{ $title }}</title>
<!-- Tambahkan CDN Tailwind CSS -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

  {{-- navbar --}}
  @include('guest.layouts.navbar-gues')

<!-- Konten Website -->
@yield('guest')
</body>
</html>
