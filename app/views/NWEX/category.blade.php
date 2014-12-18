@extends('layouts.master')
@section('title')
{{ $categories[$selectedCategory]}}
@stop
@section('content')
<div class="row">
	<div class="col-xs-12">
		<ol class="breadcrumb">
			<li>{{ link_to('NWEX/', 'TOP') }}</li>
			<li class="active">{{ $categories[$selectedCategory]}}</li>
		</ol>
	</div>
</div>
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
@include('NWEX.partials.productList')
@stop
@section('scripts')
{{ HTML::script('js/nwex.js') }}
@stop