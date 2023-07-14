@extends('master')

@section('title', 'Категория' . $category->name)

@section('content')
    <!-- Заголовок -->
    <h2>{{ $category->name }}</h2>
    <div class="wrapper">
        <!-- Товары -->

        @foreach($category->products as $product)
            @include('card', compact('product'))
        @endforeach

    </div>
@endsection