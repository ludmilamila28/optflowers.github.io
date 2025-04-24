<?php
$this->title = 'Вход для менеджера';
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
<main class="pt-4">
    <div class="container">
        <div class="row mt-1 mb-5">
            <div class="col-12 col-md-9 col-lg-6 mx-auto">
                <?= $this->render(
                    '/html/forms/login_form_email',
                    [
                        'btn_color' => Yii::$app->params['btn-form-color-admin'],
                        'bg' => Yii::$app->params['bg-form-color-admin']
                    ]
                )
                ?>
            </div>
        </div>
    </div>
</main>