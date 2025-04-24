<?php

use app\models\Auth;
use yii\bootstrap5\Dropdown;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
?>
<header class="navbar navbar-expand-lg navbar-dark bg-white py-3">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/logo.png" alt="" height="58">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-dark" href="/projects">Каталог</a></li>
                <li class="nav-item"><a class="nav-link text-dark  ms-1" href="/service">Услуги флористов</a></li>
                <li class="nav-item"><a class="nav-link text-dark  ms-1 " href="/sertificate">Сертификаты</a></li>
                <li class="nav-item"><a class="nav-link text-dark  ms-1" href="/contacts">Контакты</a></li>
                <?php if (Auth::isAdmin()) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-danger fw-bold" href="/admin/home">Менеджер</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger fw-bold" href="/admin/auth/logout">Выйти</a>
                        </li>
                    <?php endif ?>

                    <?php if (Auth::isUser()) : ?>
                        <?php $user = Yii::$app->session->get('user'); ?>
                        <li class="nav-item">
                            <a class="nav-link text-warning fw-bold" href="/user/home">
                                <?= $user->email ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning fw-bold" href="/cart">
                                Ваш заказ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning fw-bold" href="/user/auth/logout">Выйти</a>
                        </li>
                    <?php endif ?>
            </ul>
        </div>
    </div>
</header>

