<?php
$this->title = 'Сертификаты'
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
    <h1 class="text-center mb-4">Наши сертификаты</h1>
    <p class="text-center">Здесь представлены наши лицензии и сертификаты качества.</p>

    <div class="row">
        <!-- Сертификат 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="text-center p-1 mx-auto" style="width:100%;">
                    <img class="img-fluid" src="/img/q.png" alt="Сертификат 1" data-bs-toggle="modal" data-bs-target="#certModal1">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Сертификат качества</h5>
                    <p class="card-text">Подтверждает соответствие стандартам.</p>
                </div>
            </div>
        </div>

        <!-- Сертификат 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="text-center p-1 mx-auto" style="width:100%;">
                    <img class="img-fluid" src="/img/l.png" alt="Сертификат 2" data-bs-toggle="modal" data-bs-target="#certModal2">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Лицензия</h5>
                    <p class="card-text">Официальное разрешение.</p>
                </div>
            </div>
        </div>

        <!-- Сертификат 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="text-center p-1 mx-auto" style="width:100%;">
                    <img class="img-fluid" src="/img/l.png" alt="Сертификат 2" data-bs-toggle="modal" data-bs-target="#certModal3">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Экологический стандарт</h5>
                    <p class="card-text">Подтверждает безопасность материалов.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Модальные окна для увеличения сертификатов -->
<div class="modal fade" id="certModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Сертификат качества</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img src="/img/q.png" class="img-fluid" alt="Сертификат качества">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="certModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Лицензия</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img src="/img/l.png" class="img-fluid" alt="Лицензия">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="certModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Экологический стандарт</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img src="/img/l.png" class="img-fluid" alt="Экологический стандарт">
            </div>
        </div>
    </div>
</div>