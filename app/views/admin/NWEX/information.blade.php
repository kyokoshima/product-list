@extends('layouts.admin')
@section('content')
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
					{{ Form::textarea('content') }}
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" type="button" data-dismiss="modal">
						キャンセル
					</button>
					<button class="btn btn-primary" type="submit">追加</button>
				</div>
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
		<th>ID</th>
		<th>内容</th>
	</tr>
	@foreach($information as $info)
	<tr>
		<th>{{ $info->id }}</th>
		<th>{{ $info->content }}</th>
	</tr>
	@endforeach
</table>
@endif
</div>
@stop