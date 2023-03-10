<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'TicketBeast')</title>

  <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body class="bg-dark">
<div id="app">
  @yield('body')
</div>

@stack('beforeScripts')
<script src="{{ elixir('js/app.js') }}"></script>
@stack('afterScripts')
</body>
</html>
