<div class="product">
    <div class="product_img">
        <img src="/storage/{{ $product->image }}" alt="Мяч">
    </div>
    <div class="product_info">
        <p class="product_price">{{ $product->price }} Руб</p>
        <p class="product_name">{{ $product->name }}</p>
    </div>
    <!-- <a class="product_link" href="{{ route('product', [$product->category->code, $product->code]) }}">Перейти к товару</a> -->
    <form action="{{ route('basket-add', $product) }}" method="POST">
        <button type="submit" class="product_link" role="button">Добавить в корзину</button>
        @csrf
    </form>
</div>