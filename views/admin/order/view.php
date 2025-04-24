<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Order $model */

$this->title = "Заказ № " . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <div class="order-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Измнеить заказ', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'user_id',
                        'user_info_id',
                        'status',
                        'dt_create',
                        'dt_update',
                        'cost',
                        'comment:ntext',
                        'pay_method',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>