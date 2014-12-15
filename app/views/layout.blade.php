<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NWEX商品一覧</title>

    <!-- Bootstrap -->
    {{ HTML::style('css/bootstrap.min.css') }}
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src={{ URL::to('js/html5shiv.min.js') }}></script>
      <script src={{ URL::to('js/respond.min.js') }}></script>
    <![endif]-->
    {{ HTML::style('css/app.css') }}
    @yield('css')
  </head>
  <body>
    <p id="page-top"><a href="#">TOPへ</a></p>
    <div class="container">
      @yield('content')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/app.js') }}
  </body>
</html>