<?php
$this->title = 'Услуги флориста'
?>
<div class="container">
    <!-- Хлебные крошки -->
    <nav aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $this->title ?>
        </ol>
    </nav>
</div>
<div class="container mt-4">
    <h1 class="text-center mb-4">Услуги флориста</h1>

    <!-- Раздел "Что такое дизайн-проект?" -->
    <section class="mb-5">
        <h2>Что такое флористика?</h2>
        <p class="lead">
        Флористика — это искусство создания красивых композиций из живых и искусственных растений.
        </p>
    </section>

    <!-- Раздел "Какие бывают проекты?" -->
    <section class="mb-5">
        <h2>Какие бывают проекты?</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm h-100">
                    <h4>Свадебная флористика</h4>
                    <p>Флористы этой специальности создают букеты для свадьбы, украшения для банкетных залов, бутоньерки и арки.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 border rounded shadow-sm h-100">
                    <h4>Событийная флористика</h4>
                    <p>Эти флористы оформляют большие корпоративные мероприятия, выставки, праздники.</p>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="p-3 border rounded shadow-sm h-100">
                    <h4>Ландшафтный дизайнер.</h4>
                    <p>Создает декоративные композиции в садах и на территории частных домов или крупных объектов.</p>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="p-3 border rounded shadow-sm h-100">
                    <h4>Интерьерная флористика</h4>
                    <p>Здесь занимаются созданием композиций для украшения интерьеров, включая рестораны, гостиницы и офисы.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Раздел "Примеры работ" -->
    <section>
        <h2>Примеры работ</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card" style="height: 290px;">
                    <img src="/img/c1.jpg" class="card-img-top" alt="Пример 1">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Свадебная флористика</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="height: 290px;">
                    <img src="/img/c2.jpeg" class="card-img-top" alt="Пример 2">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Ландшафтный дизайн</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card" style="height: 290px;">
                    <img src="/img/с3.webp" class="card-img-top" alt="Пример 3">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Интерьерная флористика</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>