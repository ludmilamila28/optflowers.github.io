<?php
$this->title = 'Контактная информация'
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
    <div class="row">
        <!-- Левая колонка - контактные данные -->
        <div class="col-md-6 border-end mb-3">
            <h4>Свяжитесь с нами</h4>
            <p><strong>Адрес:</strong> г. Нижний Новгород, ул. Белинского, д. 10</p>
            <p><strong>Телефон:</strong> <a href="tel:+79235763406" class="text-dark"> 8 (912) 345-67-89</a></p>
            <p><strong>Email:</strong> <a href="mailto:info@kammerton.ru" class="text-dark"> optflo@mail.ru</a></p>
            <p><strong>График работы:</strong> Пн-Пт: 9:00 - 18:00</p>

            <h5 class="mt-4">Форма обратной связи</h5>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Ваше имя</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Сообщение</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-warning">Отправить</button>
            </form>
        </div>

        <!-- Правая колонка - Карта Yandex -->
        <div class="col-md-6">
            <h4>Как нас найти?</h4>
            <div id="map" class="mt-3">
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/47/nizhny-novgorod/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Нижний Новгород</a><a href="https://yandex.ru/maps/47/nizhny-novgorod/?ll=44.072499%2C56.298711&utm_medium=mapframe&utm_source=maps&z=12.11" style="color:#eee;font-size:12px;position:absolute;top:14px;">Нижний Новгород — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=44.072499%2C56.298711&z=12.11" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>
    </div>
</div>

