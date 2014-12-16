@extends('layouts.master')
@section('content')
{{ count($products) }}
		<div class="product-list">
			<div class="row">
				<div class="col-xs-3">
					<img src="http://www.projectk.co.jp/nw/item/1835n.jpg" alt="">
				</div>
				<div class="col-xs-7">
					<h3 class="product-name">マキシモルソリューションズ500ml</h3>
					<p class="price">&yen;3,080</p>
				</div>
				<div class="col-xs-2">
					<button class="btn btn-primary">
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<img src="http://www.projectk.co.jp/nw/item/1842.jpg" alt="">
				</div>
				<div class="col-xs-8">
					<p>ハワイアンノニジュース1000ml</p>
				</div>
				<div class="col-xs-1">
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<img src="http://www.projectk.co.jp/nw/item/1870.jpg" alt="">
				</div>
				<div class="col-xs-8">
					<p>ドリアントロピカルブレンド1000ml</p>
				</div>
				<div class="col-xs-1">
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<img src="http://www.projectk.co.jp/nw/item/1869.jpg" alt="">
				</div>
				<div class="col-xs-8">
					<p>ニューベラ1000ml</p>
				</div>
				<div class="col-xs-1">
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<img src="http://www.projectk.co.jp/nw/item/1956.jpg" alt="">
				</div>
				<div class="col-xs-8">
					<p>ビューティーネクター90mlx12</p>
				</div>
				<div class="col-xs-1">
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<img src="http://www.projectk.co.jp/nw/item/4525.jpg" alt="">
				</div>
				<div class="col-xs-8">
					<p>アサイアクション90mlx12	</p>
				</div>
				<div class="col-xs-1">
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<img src="http://www.projectk.co.jp/nw/item/1885.jpg" alt="">
				</div>
				<div class="col-xs-8">
					<p>NWプロポリスプレミアムセレクト30ml</p>
				</div>
				<div class="col-xs-1">
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3">
					<img src="http://www.projectk.co.jp/nw/item/1700.jpg" alt="">
				</div>
				<div class="col-xs-8">
					<p>リベノール60粒	</p>
				</div>
				<div class="col-xs-1">
					
				</div>
			</div>
		</div>
@stop