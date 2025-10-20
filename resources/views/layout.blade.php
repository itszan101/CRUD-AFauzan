<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>CRUD Laravel 12</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
  <div class="max-w-2xl mx-auto bg-white p-6 shadow-md rounded">
    <h1 class="text-2xl font-bold mb-4 text-center">@yield('title')</h1>
    @if(session('success'))
      <div class="bg-green-100 text-green-800 p-2 rounded mb-3">
        {{ session('success') }}
      </div>
    @endif
    @yield('content')
  </div>
</body>
</html>
