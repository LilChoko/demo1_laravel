@extends('layouts.e-commerce')

@section('content')

@foreach ($categories as $cat)
<ul> <h3>{{$cat->name}}</h3>
    @foreach ($cat->products as $prod)
        <li> {{$prod->name}} ({{$prod->sale_price}}) </li>
    @endforeach
</ul>
@endforeach

@endsection
