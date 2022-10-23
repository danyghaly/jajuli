@extends('layouts.app')

@section('content-title', ucwords(__('products.plural')))

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @for ($i = 0 ; $i < 5; $i++)
                        <div class="col-sm-3" style="margin-bottom: 8px">
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
{{--@include('models.index', [--}}
{{--  'col_class' => 'col-md-8 col-md-offset-2 offset-md-2',--}}
{{--  'panel_title' => ucwords(__('products.plural')),--}}
{{--  'resource_route' => 'products',--}}
{{--  'model_variable' => 'product',--}}
{{--  'model_class' => \App\Models\Product::class,--}}
{{--  'models' => $products,--}}
{{--  'action_buttons_view' => 'generator::components.models.index.action_buttons',--}}
{{--])--}}
