<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-success">
		<div class="panel-heading">
			<div class="panel-title">カテゴリから選ぶ</div>
		</div>
			<ul class="list-unstyled list-category">
				@foreach($categories as $category)
					<li>
						<a href="{{ action('NWEX\CategoryController@show', $category->id )}}">
							<div class="icon">
								{{ HTML::image('img/category/' . $category->id . '.png') }}
							</div>
							<div class="name">
								{{ $category->name_ja }}
							</div>
							<div class="arrow">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</div>
						</a>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>