<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'CRUD Laravel 12')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Link ke file CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="container">
    <h1>@yield('title')</h1>

    @if(session('success'))
      <div class="alert">{{ session('success') }}</div>
    @endif

    @yield('content')
  </div>
</body>
</html>
