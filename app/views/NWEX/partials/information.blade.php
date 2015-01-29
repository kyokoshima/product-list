<div class="row information-wrapper" style="display: {{ (isset($show) and $show) ? 'block' : 'none' }}">
	<div class="col-xs-12">
		<div class="panel panel-success">
			<div class="panel-heading">
		<p class="information">
			<span class="glyphicon glyphicon-info-sign" style="color: blue;"></span>
		お知らせ</p>
		</div>
			<div class="panel-body">
				<p>現在掲載されているニューウェイズ製品は<span class="text-danger">2015年3月31日</span>を以って終了します。お気に入り商品は今のうちに!!</p>
				{{-- 
				@foreach ($information as $info)
				{{ $info->content }}
				@endforeach
				--}}
			</div>
		</div>
	</div>
</div>