<?php

use app\widgets\calendar\Calendar;

$this->title = 'Главная';
?>
<!-- Главный баннер -->
<section class="hero d-flex aligh-items-center flex-column justify-content-center">
    <div class="container text-center text-dark bg-warning border border-dark p-4 rounded" style="opacity: 85%;">
        <h1>Большой выбор цветов, минимальные цены</h1>
        <p>индивидуальный подход к каждому клиенту</p>
        <a href="/projects" class="btn btn-danger btn-lg border border-2 border-dark">Каталог</a>
    </div>
</section>

<!-- Наши проекты -->
<section class="projects py-5">
    <div class="container text-center">
        <h2 class="mb-4">Наши цветы</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="project-card mt-2 mt-lg-0">
                    <img src="/img/1.jpeg" alt="">
                    <h4>Гладиолус Брокен Харт</h4>
                    <p>Гладиолус Брокен Харт Фриззл 12/14 в сетке 5шт</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card mt-2 mt-lg-0">
                    <img src="/img/2.jpeg" alt="">
                    <h4>Роза</h4>
                    <p>Роза Bright Torch дл.40 10шт</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card mt-2 mt-lg-0">
                    <img src="/img/3.jpeg" alt="">
                    <h4>Тюльпан</h4>
                    <p>Тюльпан Margarita 10шт</p>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-danger mt-4">Смотреть больше</a>
    </div>
</section>

<!-- Отзывы клиентов -->
<section class="testimonials py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4">Отзывы клиентов</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-card mt-2 mt-lg-0">
                    <img src="/img/tm.png" alt="Анна">
                    <p>Отличное качество и внимательный подход!</p>
                    <span>- Анна</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card mt-2 mt-lg-0">
                    <img src="/img/tm.png" alt="Олег">
                    <p>Давно заказываю у этой компании и всем доволен!</p>
                    <span>- Олег</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card mt-2 mt-lg-0">
                    <img src="/img/tm.png" alt="Марина">
                    <p>Потрясающие цветы всегда свежие и отличного качества.</p>
                    <span>- Марина</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Преимущества -->
<section class="advantages py-5 bg-white">
    <div class="container">
        <div class="row text-center text-dark">
            <div class="col-md-3">
                <div class="advantage-card">
                    <i class="bi bi-airplane"></i>
                    <h4 class="fs-5 text-start">
                    Поставки товара осуществляются авиатранспортом,
                    что позволяет доставлять свежие и качественные цветы.
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="advantage-card">
                    <i class="bi bi-award"></i>
                    <h4 class="fs-5 text-start">
                    Мы предлагаем высокое качество, широкий ассортимент,
                    и индивидуальный подход.
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="advantage-card">
                    <i class="bi bi-shield-lock"></i>
                    <h4 class="fs-5 text-start">
                        Мы гарантируем соблюдение технологий транспортировки, обработки и хранения продукции.
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="advantage-card">
                    <i class="bi bi-hand-thumbs-up"></i>
                    <h4 class="fs-5 text-start">
                        Более 1000 независимых положительных отзывов
                        на различных площадках
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>