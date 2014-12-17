@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-xs-3 col-xs-offset-3">
		{{ Form::open(array(
				'action' => array('NWEX\CategoryController@show', 0), 
				'class' => 'form-inline', 'method' => 'get')) 
		}}
			<div class="form-group">
			{{ Form::select('category', $categories, $selectedCategory, array('id' => 'select-category')) }}
			</div>
		{{ Form::close() }}
	</div>
</div>
<div class="product-list">
	<div class="list-group">
	@foreach($products as $product)
		<div class="list-group-item clearfix">
			<div class="thumb-wrapper">
				<div class="thumb">
					<img src="http://www.projectk.co.jp/nw/item/{{ $product->image_s }}" alt="" />
				</div>
			</div>
			<div class="explain">
				<h3 class="product-name">{{ $product->name }}{{ $product->volume }}</h3>
				<p class="text-danger">{{ $product->notice }}</p>
				<p class="product-description clearfix">{{ $product->description }}</p>
				<div class="price-panel">
					<p class="price">
						@if ($product->stock > 0)
							{{ number_format($product->price) }}円
						@else
							<span class="label label-danger">在庫なし</span>
						@endif
					</p>
					<div class="cart-panel">
						@if ($product->stock > 0)
						<input type="number" value="{{ $product->stock }}" class="stock" />
						<button class="btn btn-danger">
							<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
						</button>
						@endif
					</div>
				</div>
			</div>
		</div>
	@endforeach
	</div>
</div>
@stop
@section('scripts')
{{ HTML::script('js/nwex.js') }}
@stop