<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>@yield('title') - NWEX</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/sp.css') }}
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57239906-7', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				{{ link_to('NWEX', '', array('class' => 'navbar-brand')) }}
			</div>
			<ul class="nav navbar-nav nav-right-btn">
				<li><a href="#" class="nav-info btn-top" title="お知らせ">
					{{ HTML::image('img/info.png') }}
				</a></li>
				<li><a href="{{ URL::to('NWEX/legal') }}" class="nav-delivery btn-top" title="配送規定">
					{{ HTML::image('img/truck.png') }}
				</a></li>
				<li><a href="http://www.projectk.co.jp/nw/sale.html" class="nav-pc btn-top" title="PC版">
					{{ HTML::image('img/PC.png') }}
				</a></li>
				<li><a href="http://www.projectk.co.jp/nw/cart/?return=back" class="nav-cart btn-top" title="買い物かご">
					{{ HTML::image('img/cart.png') }}
				</a></li>
			</ul>
		</div>
	</nav>
		<div class="container-fluid">
		@yield('content')
	</div>

  <footer>
  	<div class="container">
	    <ul class="nav nav-tabs nav-justified">
	    	<li>{{ link_to('NWEX', 'TOP') }}</li>
	      <li>{{ link_to('NWEX/legal', "特定商取引法に基づく表示") }}</li>
	    </ul>
    </div>
  </footer>
  <p id="page-top">
		<a href="#">TOPへ</a>
	</p>
	{{ HTML::script('js/jquery-1.11.1.min.js') }}
  {{ HTML::script('js/bootstrap.min.js') }}
  {{ HTML::script('js/nwex.js') }}
  @yield('scripts')
</body>
</html>