<!DOCTYPE html>
<html lang="en">

<head>
  @section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @show

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trainer | IPB Training</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light @if (Request::is('selesai')) bg-transparent @else bg-light @endif shadow">
      <a class="navbar-brand" href="#">
        <img src="/images/logo.png" alt="Logo IPB Training">
      </a>
    </nav>
  </header>

  <main>
    @yield('main')
  </main>
</body>

</html>