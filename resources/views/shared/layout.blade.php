<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baktify | @yield('title')</title>
  <link href="css/app.css" rel="stylesheet">
</head>

<body>

  @include('partials._header')

  @hasSection('overlay')
    <section class="overlay">
      @yield('overlay')
    </section>
  @endif

  @hasSection('main')
    <main class="main">
      @yield('main')
    </main>
  @endif

  @include('partials._footer')

</body>

</html>
