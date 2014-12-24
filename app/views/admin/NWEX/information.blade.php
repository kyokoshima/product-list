@extends('layouts.admin')
@section('content')
@include('admin.NWEX.partials.flash')
<div class="row">
	<button class="btn btn-primary" data-toggle="modal" data-target="#addInfo">
		お知らせ追加
	</button>
	<div class="modal fade" id="addInfo" role="dialog" aria-labelledby="addInfoLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				{{ Form::open(array('route' => 'admin.NWEX.information.store')) }}
				<div class="modal-header">
					<button type="button" data-dismiss="modal" class="close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>	
					<h4 class="modal-title" id="addInfoLabel">Title</h4>
				</div>
				<div class="modal-body">
					{{ Form::textarea('content', null, array('style' => 'width: 100%;')) }}
					<div class="checkbox">
						<label for="enabled">
							{{ Form::checkbox('enabled', true, true ) }} 有効
						</label>
					</div>
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
<div class="row">
@if (empty($information))
お知らせは登録されていません
@else
<table class="table bordered">
	<tr>
		<th class="col-md-1">ID</th>
		<th class="col-md-5">内容</th>
		<th class="col-md-1">有効</th>
		<th class="col-md-1"></th>
	</tr>
	@foreach($information as $info)
	<tr>
		<th>{{ $info->id }}</th>
		<th>{{ $info->content }}</th>
		<th>{{ $info->enabled }}</th>
		<th>
			{{ Form::open(['route' => ['admin.NWEX.information.destroy', $info->id], 'method' => 'delete']) }}
			<button type="submit" class="btn btn-danger">
				<span class="glyphicon glyphicon-remove rotate"></span>				
			</button>
			{{ Form::close() }}
		</th>
	</tr>
	@endforeach
</table>
@endif
</div>
@stop