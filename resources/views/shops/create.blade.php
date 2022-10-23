@extends('layouts.app')

@section('content-title', ucwords(__('shops.plural')))

@include('models.create', [
  'panel_title' => ucwords(__('shops.singular')),
  'resource_route' => 'shops',
  'model_variable' => 'shop',
  'model_class' => \App\Models\Shop::class,
])
