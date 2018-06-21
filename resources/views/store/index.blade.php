@extends('store.template')
@section('content')
@include('store.partials.slider')
<br><br>
<div class="card-deck mb-3 text-center">
        @foreach($products as $product)
    <div class="card mb-4 box-shadow">
        <div class="card-header">
        <h4 class="my-0 font-weight-normal">{{ $product->name }}</h4>
        </div>
        <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="{{ $product->image }}" width="100px"> </h1>
        <ul class="list-unstyled mt-3 mb-4">
            <li>{{ $product->extract }}</li>
            <li>Precio: ${{ number_format($product->price,2) }}</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Add to cart</button>
        <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('product-detail', $product->id) }}">Detalle</a>
        </div>
    </div>
    @endforeach
</div>


@stop