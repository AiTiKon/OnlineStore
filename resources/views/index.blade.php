@extends('master')

@section('title', 'Главная страница')

<!-- Содержимое страницы -->
@section('content')
    <!-- Заголовок -->
    <h2>Все товары</h2>
    <div class="wrapper">
        <!-- Товары -->
        
        @foreach($products as $product)
            @include('card', compact('product'))
        @endforeach

    </div>
@endsection