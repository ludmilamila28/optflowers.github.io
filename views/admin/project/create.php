<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Project $model */

$this->title = 'Добавить новый товар';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
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

        <div class="project-create">

<h1><?= Html::encode($this->title) ?></h1>

<?= $this->render('_form', [
    'model' => $model,
    'img' => $img
]) ?>

</div>

        </section>
    </div>
</div>