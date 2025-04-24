<?php
$this->title = 'Личная информация';
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-4 mx-end">
                            <form action="" method="post">
                                <label for="" class="form-label">Адрес</label>
                                <textarea name="address" class="form-control"><?=$address?></textarea>
                                <button class="btn-warning mt-2 mb-2" type="submit">Сохранить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>