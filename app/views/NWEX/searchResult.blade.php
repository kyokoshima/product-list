@extends('layouts.master')
@section('title')
{{ $title }}
@stop
@section('content')
@include('NWEX.partials.breadcrumb', array('breadcrumbs' => array($title)))
@include('NWEX.partials.information', array('show' => false))
@if ($products->isEmpty()) 
<div class="row">
	<div class="alert alert-info">
		キーワード「{{$keyword}}」該当する検索結果が見つかりませんでした
	</div>
</div>
@else
@include('NWEX.partials.productList')
@endif
@include('NWEX.partials.categories')
@stop
@section('scripts')
@stop