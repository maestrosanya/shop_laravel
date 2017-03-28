<div id="contentwrapper">
    <div id="content">
        <div class="catalog-index">
            <h1><img src="{{ asset(env('THEME')) }}/images/lider-sale.jpg" alt="Лидеры продаж" /></h1>
            @if( count($products) > 0 )
                {{--{{  dump($products) }}--}}
                @foreach( $products as $product )
                    <div class="product-index">
                        <h2><a href="{{ $product->id }}">{{ $product->title }}</a></h2>
                        <a href="{{ $product->id }}"><img src="{{ asset(env('THEME')) }}/images/phone-index.jpg" alt="" /></a>
                        <p>Цена:  <span>{{ $product->price }}.</span></p>
                        <a href="#"><img class="addtocard-index" src="{{ asset(env('THEME')) }}/images/addcard-index.jpg" alt="Добавить в карзину" /></a>
                    </div>
                @endforeach
            @else
                <div style="text-align: center">
                    <p>Не найдено</p>
                </div>
            @endif

        </div>
    </div>
</div>