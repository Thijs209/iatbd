@extends('bodyrow')

@section('content')
<h1>Hallo {{$user->name}}!</h1>
<a href="{{'/user/' . $user->name . '/products'}}"><button class="button button--purple">Mijn producten</button></a>
@if($product)
    @include('card')
@endif