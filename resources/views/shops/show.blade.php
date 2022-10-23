@extends('layouts.app')

@section('content-title', ucwords(__('shops.plural')))

@include('models.show', [
  'panel_title' => ucwords(__('shops.singular')),
  'resource_route' => 'shops',
  'model_variable' => 'shop',
  'model' => $shop
])
