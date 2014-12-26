@extends('layouts.master')
@section('title')
{{ $categories[$selectedCategory]}}
@stop
@section('content')
@include('NWEX.partials.breadcrumb', array('breadcrumbs' => array($categories[$selectedCategory])))
@include('NWEX.partials.information', array('show' => false))
@include('NWEX.partials.productList')
@include('NWEX.partials.categories')
@stop
@section('scripts')
@stop