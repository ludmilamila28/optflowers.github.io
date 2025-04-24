<?php

use app\models\Order;
use app\models\UserInfo;

$order = Order::find()->where(['user_id' => $user->id, 'status' => 'Корзина'])->one();
$user_info = UserInfo::find()->where(['user_id' => $user -> id])->one();
$address = $user_info ->address;
$user_info_id = $user_info -> id;

$this->title = 'Ваш заказ';

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
            <ul class="list-group list-group-flush">
                <?php if ($cart): ?>
                    <?php foreach ($cart as $c): ?>
                        <li class="list-group-item d-flex align-items-center">
                            <img width="74" src="/img/<?= $c->item->image ?>" alt="">
                            <span class="ms-1 text-center" style="width:190px; font-size:15px; display:inline-block;"><?= $c->item->title ?></span>
                            <a class="text-decoration-none p-2" href="/cart/add/?item_id=<?= $c->item->id ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-plus-square text-danger" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg>
                            </a>
                            <span class="ms-1 me-1 badge text-bg-secondary">
                                <?= $c->amount ?> шт.
                            </span>
                            <a class="text-decoration-none p-2" href="/cart/del/?item_id=<?= $c->item->id ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-dash-square text-danger" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                </svg>
                            </a>
                        </li>
                    <?php endforeach ?>
                    <div class="rounded  p-2 mt-2 shadow d-flex flex-column justify-content-between">
                        <form action="/cart" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <textarea class="form-control" name="comment" id="" placeholder="Ваш комментарий к заказу"></textarea>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="radio" class="btn-check" value="Картой" name="pay_method" id="option1" autocomplete="off" checked>
                                    <label class="btn btn-sm rounded-pill btn-outline-warning" for="option1">Карта</label>

                                    <input type="radio" class="btn-check" value="Наличными" name="pay_method" id="option2" autocomplete="off">
                                    <label class="btn btn-sm rounded-pill btn-outline-warning" for="option2">Наличные</label>
                                </div>
                                <div class="col-12 col-lg-6 mt-2">
                                    <span class="fw-bold">Адрес доставки:</span>
                                    <?=$address?>
                                        &rarr;
                                    <a class="btn btn-sm" href="/user/home/info">Изменить</a>
                                </div>
                                <div class="col-12 text-end">
                                    <button class="btn btn-sm btn-danger" type="submit">
                                        К оплате : <span><?= $order->cost ?></span> р.
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" name="user_info_id" value="<?=$user_info_id?>">
                            <input type="hidden" name="order_id" value="<?=$order -> id?>">
                        </form>
                    </div>
                <?php else: ?>
                    <li class="list-group-item">Корзина пуста</li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>