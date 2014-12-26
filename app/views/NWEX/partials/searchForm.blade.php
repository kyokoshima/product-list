<div class="row">
	<div class="container-fluid">
		<div class="search-form">
			{{ Form::open(['url' => 'NWEX/search','method' => 'get'], ['class' => 'form-inline'])}}
				<div class="input-group">
					<input type="search" name="q" class="form-control" placeholder="商品名 コード">
					<span class="input-group-btn">
						<button class="btn btn-default">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>