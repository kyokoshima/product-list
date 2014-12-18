@extends('layouts.master')
@section('title')

@stop
@section('content')
<div class="row">
	<div class="col-xs-12">
		お知らせ
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<ol class="breadcrumb">
			<li>TOP</li>
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

<!-- <div class="row">
	<div class="col-xs-12">
		<div class="center-block">
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
</div> -->
<div class="product-list">
	<div class="list-group">
	@foreach($products as $product)
		<div class="list-group-item clearfix">
			<div class="thumb-wrapper">
				<div class="thumb">
					<img src="http://www.projectk.co.jp/nw/item/thumbs/{{ $product->image_s }}" alt="" />
				</div>
			</div>
			<div class="explain">
				<p class="code">{{ $product->code }}</p>
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
						
						<form action="http://www.projectk.co.jp/nw/cart/" method="post" accept-charset="Shift_JIS">
							<input type="hidden" name="product_code" value="{{$product->code}}">
							<input type="hidden" name="product_name" value="{{ $product->name }}">
							<input type="hidden" name="price" value="{{$product->price}}">
							<input type="hidden" name="shipping_weight" value="1">
							<input type="hidden" name="cash_on_delivery" value="0">
							<input type="hidden" name="step" value="addCart">
							@if ($product->stock > 0)
								<!-- <input type="number" value="{{ $product->stock }}" class="stock" /> -->
								{{ Helpers::selectQty('qty', $product->stock) }}
								<button class="btn btn-danger add-cart">
									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
								</button>
							@endif
						</form>
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