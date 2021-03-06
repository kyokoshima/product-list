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
    {{ HTML::style('css/admin.css') }}
    @yield('css')
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-59151569-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <ul class="nav navbar-nav navbar-right">
          <li>
            {{ link_to('admin/NWEX/recommend', 'おすすめ編集', array('class' => 'navbar-link')) }}
          </li>
          <li>
            {{ link_to('admin/NWEX/information', 'お知らせ編集', array('class' => 'navbar-link')) }}
          </li>
          <li>
            {{ link_to('admin/NWEX/', '商品編集', array('class' => 'navbar-link')) }}
          </li>
        </ul>
      </div>
    </nav>
    <p id="page-top"><a href="#">TOPへ</a></p>
    <div class="container">
      @yield('content')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/admin.js') }}
    @yield('scripts')
  </body>
</html>