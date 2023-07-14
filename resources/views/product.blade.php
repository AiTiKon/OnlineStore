@extends('master')

@section('title', 'Товар')

@section('content')
    <h2>ТОВАР</h2>
    <div class="wrapper_card">
        <div class="card_go">
            <div class="cards">
                <div class="card">
                    <div class="card_info">
                        <img src="img/football_ball.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="go_one">
                <p class="product_price">1000 РУБ</p>
                <p class="product_name">МЯЧ</p>
                <p>{{ $product }}</p>
                <p class="product_desc">Отличный мяч подойдет для активных игр на свежем воздухе. <br> Мяч изготовлен из качественной резины.</p>
                <form class="go_product">
                    <button type="submit" class="go_btn" href>Добавить в корзину</button>
                </form>
            </div>
        </div>
        <div class="go_card_mobile">
            <p class="product_price">1000 РУБ</p>
            <p class="product_name">Мяч</p>
            <p class="product_desc">Отличный мяч подойдет для активных игр на свежем воздухе. Мяч изготовлен из качественной резины.</p>
            <form class="go_product">
                <button type="submit" class="go_btn" href>Добавить в корзину</button>
            </form>
        </div>
    </div>
@endsection