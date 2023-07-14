@extends('master')

@section('title', 'Все категории')

@section('content')
    <h2>Все категории</h2>
    <div class="wrapper_category">
        @foreach($categories as $category)
            <div class="category">
                <div class="category_img">
                    <img src="/storage/{{ $category->image }}" alt="Мяч">
                </div>
                
                <div class="category_info">
                    <p class="category_name">{{ $category->name }}</p>
                    <hr>
                    <p class="category_desc">{{ $category->description }}</p>
                    <a class="product_link" href="{{ route('category', $category->code) }}">Перейти к категории</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection