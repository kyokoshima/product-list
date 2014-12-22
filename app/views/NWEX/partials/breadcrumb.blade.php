<div class="row">
	<div class="col-xs-12">
		<ol class="breadcrumb">
			<li>{{ link_to('NWEX/', 'TOP') }}</li>
			@if (isset($breadcrumbs))
				@foreach($breadcrumbs as $breadcrumb)
				<li class="active">{{ $breadcrumb }}</li>
				@endforeach
			@endif
		</ol>
	</div>
</div>