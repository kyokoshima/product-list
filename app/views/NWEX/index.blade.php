@extends('layouts.master')
@section('title')
TOP
@stop
@section('content')

@include('NWEX.partials.breadcrumb')
@include('NWEX.partials.information', array('show' => true))
@include('NWEX.partials.categories')
<div class="panel panel-success">
<div class="panel-heading">
	<div class="panel-title">おすすめ商品から選ぶ</div>
</div>
@include('NWEX.partials.productList')
</div>
@stop
@section('scripts')
@stop