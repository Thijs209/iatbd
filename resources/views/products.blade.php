@extends('bodycolumn')

@section('content')
@if(!$products->isEmpty())
    @foreach($products as $product)
        @include('card')
    @endforeach
@else
    <h1>Geen producten gevonden :(</h1>
@endif
