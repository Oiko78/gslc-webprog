@extends('shared.layout')

@section('title', 'Products')
@section('main')
  <div class="products">
    <div class="products__header">
      <h1>Our Products</h1>
    </div>

    <div class="card__container">
      @foreach ($products as $product)
        @if ($product['qty'] != 0)
          <div class="product card">
            <div class="product__image">
              <button class="product__tag button button-contained">Electro</button>
              <a href={{ '/products/' . $product['id'] }}>
                <img src={{ 'images/' . $product['image'] }} alt="">
              </a>
            </div>
            <h2 class="product__name">{{ $product['name'] }}</h1>
              <p class="product__price">IDR {{ $product['price'] }}</p>
          </div>
        @endif
      @endforeach
    </div>
  </div>
@endsection
