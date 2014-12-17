<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/sp.css') }}
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
	    <ul class="list-inline">
	      <li>特定商取引法に基づく表示</li>
	    </ul>
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