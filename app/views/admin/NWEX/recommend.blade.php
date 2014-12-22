@extends('layouts.admin')
@section('content')
<div class="row">
	<button class="btn btn-primary" data-toggle="modal" data-target="#addRecommend">おすすめ追加</button>
	<div class="modal fade" id="addRecommend" role="dialog" aria-labelledby="addRecommendLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				{{ Form::open(array('route' => 'admin.NWEX.recommend.store')) }}
				<div class="modal-header">
					<button type="button" data-dismiss="modal" class="close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="addRecommendLabel">Title</h4>
				</div>
				<div class="modal-body">
					<select name="productId" id="productId" class="form-control" size="5">
						@foreach($products as $product)
							<option value="{{ $product->id }}">{{ $product->code }} {{ $product->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" type="button" data-dismiss="modal">
						キャンセル
					</button>
					<button class="btn btn-primary" type="submit">追加</button>
				</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@if (empty($recommends))
@else
<div class="row">
	<table class="table table-bordered">
		<tr><th>名称</th><th>順番</th></tr>
		@foreach($recommends as $recommend)
		<tr>
		<td>{{ $recommend->product }}</td>
		<td>
		{{--
		
			<input type="text" name="[{{ $recommend->id }}]" value="{{ $recommend->sort_order }}">
		--}}
		
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endif

@stop