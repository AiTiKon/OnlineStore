@extends('master')

@section('title', 'Все категории')

@section('content')
    <h2>Корзина товаров</h2>
    <div class="wrapper_basket">
        <div class="items_go">
            <div class="items">
            @foreach($order->products as $product)
                <div class="item">
                    <div class="item_info">
                        <img src="/storage/{{ $product->image }}" alt="">
                        <div>
                            <p class="item_name">{{ $product->name }}</p>
                            <p class="item_price">За один товар: {{ $product->price }} Руб</p>
                            <div class="lot">
                                <form action="{{ route('basket-remove', $product) }}" method="POST">
                                    <button type="submit" class="lot_btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M200-450v-60h560v60H200Z"/></svg>
                                    </button>
                                    @csrf
                                </form>
                                <p class="lot_number">{{ $product->pivot->count }}</p>
                                <form action="{{ route('basket-add', $product) }}" method="POST">
                                    <button type="submit" class="lot_btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M450-200v-250H200v-60h250v-250h60v250h250v60H510v250h-60Z"/></svg>
                                    </button>
                                    @csrf
                                </form>
                            </div>
                            <p class="item_price">Общая цена товара: {{ $product->getPriceForCount() }} РУБ</p>
                        </div> 
                    </div>
                </div>
                @endforeach
            </div>
            <div class="go">
                <p>{{ $order->getFullPrice() }} РУБ</p>
                <form action="{{ route('basket-pay') }}" method="GET" class="go_product">
                    <button type="submit" class="go_btn" href>Перейти к оплате</button>
                </form>
            </div>
        </div>
        <div class="go_mobile">
            <p>{{ $order->getFullPrice() }} РУБ</p>
            <form action="{{ route('basket-pay') }}" class="go_product">
                <button type="submit" class="go_btn" href>Перейти к оплате</button>
            </form>
        </div>
    </div>
@endsection