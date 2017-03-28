<div class="main">
    <div class="header">
        <a href="/"><img class="logo" src="{{ asset(env('THEME')) }}/images/logo.jpg" alt="Интернет магазин сотовых телефонов" /></a>
        <img class="slogan" src="{{ asset(env('THEME')) }}/images/slogan.jpg" alt="Интернет магазин сотовых телефонов" />
        <div class="head-contact">
            <p><strong>Телефон:</strong><br />
                <span>8 (800) 700-00-01</span></p>
            <p><strong>Режим работы:</strong><br />
                Будние дни: с 9:00 до 18:00 <br />
                Суббота, Воскресенье - выходные  </p>
        </div>
        <form method="get" action="">
            <ul class="search-head">
                <li>
                    <input type="text" name="search" id="quickquery" placeholder="Что вы хотите купить?" />
                    <script type="text/javascript">
                        //<![CDATA[
                        placeholderSetup('quickquery');
                        //]]>
                    </script>
                </li>
                <li><input type="image" class="serch-btn" src="{{ asset(env('THEME')) }}/images/searc-btn.jpg" /></li>
            </ul>
        </form>
    </div>
    <ul class="menu">
        <li><a href="#">Главная</a></li>
        <li><a href="#">О магазине</a></li>
        <li><a href="#">Оплата и доставка</a></li>
        <li><a href="#">Покупка в кредит</a></li>
        <li><a href="#">Контакты</a></li>
    </ul>
