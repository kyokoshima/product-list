@extends('layouts.admin')
@section('css')
{{ HTML::style('css/product.css') }}
@stop
@section('content')
@if (Session::has('errorMessages'))
<div class="row">
	<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
		<span class="sr-only">Close</span>
	</button>
		<a href="#" class="alert-link">
			<ul>
				@foreach(Session::get('errorMessages') as $msg)
				<li>{{ $msg }}</li>
				@endforeach
			</ul>
		</a>
	</div>
</div>
@elseif (Session::has('success'))
<div class="row">
	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
		{{ Session::get('success') }}
	</div>
</div>
@endif
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">CSVアップロード</div>
		<div class="panel-body">
			{{ Form::open(array('action' => 'admin\NWEX\ProductController@upload', 'class' => 'form-inline', 'files' => true))	}}
			<div class="form-group">
				{{ Form::file('csv') }}
			</div>
			{{ Form::submit('送信', array('class' => 'btn btn-primary'))}}
			{{ Form::close() }}
		</div>
	</div>
</div>
<div class="row">
<table class="table table-bordered">
<thead>
	<tr>
	<th class="col_id">#</th>
	<th class="col_code">コード</th>
	<th class="col_name">名前</th>
	<th class="col_volume">容量</th>
	<th class="col_notice">注記</th>
	<th class="col_thumbnail">サムネイル</th>
	<th class="col_description">説明</th>
	<th class="col_price">価格</th>
	<th class="col_stock">在庫</th>
	<th class="col_sw">SW</th>
	<th class="col_category">カテゴリ</th>
	</tr>
	
</thead>
<tbody>
@foreach($products as $product)
	<?php $data_href = route('admin.NWEX.product.edit', $product->id) ?>
@if (!empty($updated) and in_array($product->code, $updated))
	<tr class="success clickable" data-href="{{ $data_href }}">
@elseif (!empty($product->deleted_at))
	<tr class="disabled clickable" data-href="{{ $data_href }}">
@else
	<tr class="clickable" data-href="{{ $data_href }}">
@endif
		<td class="col_id">{{ $product->id }}</td>
		<td class="col_code">{{ $product->code }}</td>
		<td class="col_name"><div title="{{ $product->name }}">{{ $product->name }}</div></td>
		<td class="col_volume">{{ $product->volume }}</td>
		<td class="col_notice"><div>{{ $product->notice }}</div></td>
		<td class="col_thumbnail"><div>{{ $product->image_s }}</div></td>
		<td class="col_description">
			<div title="{{ $product->description }}">{{ $product->description }}</div>
		</td>
		<td class="col_price">{{ $product->price }}</td>
		<td class="col_stock">{{ $product->stock }}</td>
		<td class="col_sw">{{ $product->shipping_weight }}</td>
		<td class="col_category"><div>{{ $product->category->name_ja }}</div></td>
	</tr>
@endforeach
</tbody>
</table>
</div>
@stop