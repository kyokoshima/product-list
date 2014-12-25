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
				{{ Form::open(array('route' => 'admin.NWEX.information.store', 'class' => 'edit-form')) }}
				<div class="modal-header">
					<button type="button" data-dismiss="modal" class="close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>	
					<h4 class="modal-title" id="addInfoLabel">Title</h4>
				</div>
				<div class="modal-body">
					{{ Form::textarea('content', null, array('style' => 'width: 100%;', 'class' => 'content')) }}
					{{ Form::hidden('id', null, array('class' => 'id')) }}
					<div class="checkbox">
						<label for="enabled">
							{{ Form::checkbox('enabled', true, true , array('class' => 'enabled')) }} 有効
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
		<td class="id">{{ $info->id }}</td>
		<td class="content">{{ $info->content }}</td>
		<td class="enabled">{{ $info->enabled }}</td>
		<td>
			<button class="btn btn-success edit" type="button" style="float: left;">
				<span class="glyphicon glyphicon-edit rotate"></span>
			</button>
			{{ Form::open(['route' => ['admin.NWEX.information.destroy', $info->id], 'method' => 'delete']) }}
			<button type="submit" class="btn btn-danger">
				<span class="glyphicon glyphicon-remove rotate"></span>				
			</button>
			{{ Form::close() }}
		</td>
	</tr>
	@endforeach
</table>
@endif
</div>
@stop
@section('scripts')
<script type="text/javascript">
$('.edit').on('click', function(){
	var id = $(this).parent().siblings('.id').html();
	var content = $(this).parent().siblings('.content').html();
	var enabled = $(this).parent().siblings('.enabled').html();
	
});
</script>
@stop