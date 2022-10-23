@extends('layouts.app')

@section('content-title', ucwords(__('shops.plural')))

@include('models.index', [
  'col_class' => 'col-md-8 col-md-offset-2 offset-md-2',
  'panel_title' => ucwords(__('shops.plural')),
  'resource_route' => 'shops',
  'model_variable' => 'shop',
  'model_class' => \App\Models\Shop::class,
  'models' => $shops,
  'action_buttons_view' => 'generator::components.models.index.action_buttons',
])
