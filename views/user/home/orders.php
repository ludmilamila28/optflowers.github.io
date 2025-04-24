<?php
$this->title = 'Все заказы';
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
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="/user/home/info" class="text-decoration-none">
                        Моя информация
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/cart" class="text-decoration-none">
                        Корзина заказов
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/user/home/orders" class="text-decoration-none">
                        Мои заказы
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-lg-9">
            <table class="table">
                <tr>
                    <td>ID заказа</td>
                    <td>Дата</td>
                    <td>Статус заказа</td>
                </tr>
                <?php if (!empty($orders)): ?>
                    <?php foreach ($orders as $o): ?>
                        <tr>
                            <td><?=$o -> id?></td>
                            <td><?=$o -> dt_create?></td>
                            <td><?=$o -> status?></td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <tr>
                        <td colspan="3">
                            Заказов пока нет
                        </td>
                    </tr>
                <?php endif ?>
            </table>
        </div>
    </div>
</div>