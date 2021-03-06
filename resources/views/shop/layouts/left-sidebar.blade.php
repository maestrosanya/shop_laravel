

<div id="left-bar">
    <div class="left-bar-cont">
        <h2><span>Каталог</span></h2>
        <h3 class="nav-new"><a href="#">Новинки</a></h3>
        <h3 class="nav-lider"><a href="#">Лидеры продаж</a></h3>
        <h3 class="nav-sale"><a href="#">Распродажа</a></h3>
        <h4><span>- Мобильные телефоны</span></h4>


        @if( $brands )
        <ul class="nav-catalog">
            @foreach( $brands as $brand )
                <li><a href="#">{{ $brand->name }}</a>
                    <ul>
                        @foreach( $brand->categories as $category )
                            <li>- <a href="{{ route('catalog', [
                                            'brand' => str_slug($brand->name,'_'),
                                            'id' => str_slug($category->name, '_')
                                            ]) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
            
        </ul>
        @endif

        <div class="bar-contact">
            <h3>Контакты:</h3>
            <p><strong>Телефон:</strong><br />
                <span>8 (800) 700-00-01</span></p>

            <p><strong>Режим работы:</strong><br />
                Будние дни: <br />
                с 9:00 до 18:00<br />
                Суббота, Воскресенье:<br />
                выходные</p>
        </div>
        <div class="news">
            <h3>Новости</h3>
            <p>
                <span>24.03.2012</span>
                <a href="#">Поступили в продажу новые
                    телефоны sumsung</a>
            </p>
            <p>
                <span>24.03.2012</span>
                <a href="#">Подарки всем купившим apple iphone 4s</a>
            </p>
            <a href="#" class="news-arh">Архив новостей</a>
        </div>
        <div class="info">
            <h3>Способы оплаты:</h3>
            <p>- <a href="#">Наличный расчёт</a></p>
            <p>- <a href="#">Пластиковой картой</a></p>
            <p>- <a href="#">Кредит</a></p>
            <p>- <a href="#">Рассчитать кредит</a></p>
            <p>- <a href="#">Безналичный расчёт</a></p>
        </div>
        <div class="info">
            <h3>Доставка:</h3>
            <p>- <a href="#">Почта России</a></p>
            <p>- <a href="#">Курьерская служба</a></p>
        </div>
        <div class="info">
            <h3>Информация для вас:</h3>
            <p>- <a href="#">Гарантия</a></p>
            <p>- <a href="#">Как выбрать телефон</a></p>
            <p>- <a href="#">Ремонт и обслуживание</a></p>
            <p>- <a href="#">Акции и новинки</a></p>
            <p>- <a href="#">Условия доставки</a></p>
        </div>
    </div>
</div>
