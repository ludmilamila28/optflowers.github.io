<?php
$this->title = 'Менеджер'
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
        <aside class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">
                    <a class="text-decoration-none" href="">Номенклатура</a>
                </li>
                <li class="list-group-item">
                    <a class="text-decoration-none" href="">Клиенты</a>
                </li>
                <li class="list-group-item">
                    <a class="text-decoration-none" href="">Поставщики</a>
                </li>
                <li class="list-group-item">
                    <a class="text-decoration-none" href="">Закупки</a>
                </li>
                <li class="list-group-item">
                    <a class="text-decoration-none" href="">Продажи</a>
                </li>
            </ul>
        </aside>
        <section class="col-md-9">



        </section>
    </div>
</div>
<!--
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            <div class="row justify-content-center row-cols-1 row-cols-lg-3 g-3">
                <div class="col">
                    <a class="text-decoration-none" href="/admin/project/index">
                        <div class="card bg-theme">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Проекты</h5>
                                <div class="fs-1 text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-boxes text-warning" viewBox="0 0 16 16">
                                        <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none" href="/admin/order/index">
                        <div class="card bg-theme">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Заказы</h5>
                                <div class="fs-1 text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-cart4 text-warning" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none" href="/admin/rate/index">
                        <div class="card bg-theme">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Отзывы</h5>
                                <div class="fs-1 text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-chat-square-text text-warning" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
-->