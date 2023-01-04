<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Styles -->
  <style>
    html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links > a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }
    .table td, .table th {
      color: black;
    }
    .content {
      max-width: 90%;
      width: 100%;
    }
  </style>
</head>
<body>
<div class="container flex-center full-height">
  <div class="content">
    <table class="table table-bordered">
      <tr>
        <th>Game Name</th>
        <th>User Name</th>
        <th>Score</th>
      </tr>
      @foreach($collection as $item)
        <tr>
          <td>{{ $item['game_name'] }}</td>
          <td>{{ $item['user_name'] }}</td>
          <td>{{ $item['score'] }}</td>
        </tr>
      @endforeach

{{--      <tr>--}}
{{--        <td>Centro comercial Moctezuma</td>--}}
{{--        <td>Francisco Chang</td>--}}
{{--        <td>Mexico</td>--}}
{{--      </tr>--}}
    </table>
  </div>
</div>
</body>
</html>
