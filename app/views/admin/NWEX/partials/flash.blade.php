<?php
if (Session::has('error') or Session::has('success') or isset($errors)) {
	if (Session::has('error')) {
		$alertClass = 'alert-danger';
		$alertMessage = Session::get('error');
	} else if (Session::has('success')) {
		$alertClass = 'alert-success';
		$alertMessage = Session::get('success');
	} else if (isset($errors)) {
		$alertClass = 'alert-danger';
		$alertMessage = $errors->all();
	}
	if (!empty($alertMessage) and !is_array($alertMessage)) {
		$alertMessages = [$alertMessage];
	} else {
		$alertMessages = $alertMessage;
	}
}
?>
@if (!empty($alertMessages))
<div class="row">
	<div class="alert {{ $alertClass }}" role="alert">
		<button class="close" type="button" data-dismiss="alert">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
		<ul class="list-unstyled">
			@foreach($alertMessages as $msg)
			<li>
			{{ $msg }}
			</li>
			@endforeach
		</ul>
	</div>
</div>
@endif