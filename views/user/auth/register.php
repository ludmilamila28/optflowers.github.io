<?php
$this->title = 'Регистрация клиента'
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
<main class="pt-2">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-md-9 col-lg-6 mx-auto">
                <?= $this->render(
                    '/html/forms/form_register',
                    [
                        'btn_color' => Yii::$app->params['btn-form-color'],
                        'bg' => Yii::$app->params['bg-form-color']
                    ]
                )
                ?>
            </div>
        </div>
    </div>
</main>