@extends('layouts.app')

@section('content-title', ucwords(__('products.plural')))

@include('models.create', [
  'panel_title' => ucwords(__('products.singular')),
  'resource_route' => 'products',
  'model_variable' => 'product',
  'model_class' => \App\Models\Product::class,
])
