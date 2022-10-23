@extends('layouts.app')

@section('content-title', ucwords(__('products.plural')))

@include('models.edit', [
  'panel_title' => ucwords(__('products.singular')),
  'resource_route' => 'products',
  'model_variable' => 'product',
  'model' => $product
])
