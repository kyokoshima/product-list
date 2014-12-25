@extends('layouts.master')
@section('title')
TOP
@stop
@section('content')
@include('NWEX.partials.breadcrumb')
@include('NWEX.partials.information', array('show' => true))
<div class="row">
	<div class="col-xs-12">
		<div class="btn-group btn-category">		
			<button class="btn btn-success btn-block dropdown-toggle" data-toggle="dropdown" aria-expanded="false">カテゴリを選択<span class="caret"></span>
			</button>
			<ul class="dropdown-menu dropdown-block" role="menu">
				@foreach($categories as $key => $category)
				@if ($key != 0)
				<li>
					{{ link_to_action('NWEX\CategoryController@show', $category, $key) }}
				</li>
				@else
					<li>{{ $category }}</li>
				@endif
				@endforeach
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-success">
		<div class="panel-heading">
			<div class="panel-title">
				<span class="glyphicon glyphicon-th-list"></span>
			カテゴリ</div>
		</div>
			<ul class="list-unstyled list-category">
				@foreach($categories as $key => $category)
					@if ($key > 0)
						<li>
							<div class="icon">
								{{ HTML::image('img/category/' . $key . '.png') }}
							</div>
							<div class="name">
								{{ $category }}
							</div>
							<div class="arrow">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</div>
						</li>
					@endif
				@endforeach
			</ul>
		</div>
	</div>
</div>
<div class="panel panel-success">
<div class="panel-heading">
	<div class="panel-title">おすすめ商品</div>
</div>
@include('NWEX.partials.productList')
</div>
@stop
@section('scripts')
@stop