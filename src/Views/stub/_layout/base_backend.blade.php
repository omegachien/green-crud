<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title> @yield('title') CSH</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ mix('css/style.css') }}" rel="stylesheet">

@section('css')

@show


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

@include('_layout.top_nav')

<div class="container-fluid">
  <div class="row">

    @include('_layout.left_nav')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      {{--@include('flash::message')--}}

      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      @yield('content')
    </div>

  </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/bundle.js') }}"></script>

@section('js')
  <script>
      $('.sidebar').perfectScrollbar();
  </script>
@show

</body>
</html>
