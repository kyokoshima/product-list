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
				<a href="/" class="navbar-brand">
				</a>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		@yield('content')
	</div>

  <footer>
  	<div class="container">
  		<div class="center-block">
		    <ul class="list-inline">
		    	<li>{{ link_to('NWEX', 'TOP') }}</li>
		      <li>{{ link_to('NWEX/legal', "特定商取引法に基づく表示") }}</li>
		    </ul>
	    </div>
    </div>
  </footer>
	{{-- 
	<ul id="page-top" class="nav nav-tabs">
		<li class="active">
			<a href="#">TOPへ</a>
		</li>
	</ul>
	--}}
	{{ HTML::script('js/jquery-1.11.1.min.js') }}
  {{ HTML::script('js/bootstrap.min.js') }}
  @yield('scripts')
</body>
</html>