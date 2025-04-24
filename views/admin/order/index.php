<?php

use app\models\Order;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Все заказы';
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
            <div class="order-index">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'summary' => '',
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'user_id',
                        'user_info_id',
                        'status',
                        'dt_create',
                        //'dt_update',
                        //'cost',
                        //'comment:ntext',
                        //'pay_method',
                        [
                            'class' => ActionColumn::className(),
                            'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            },
                            'template' => '{view} {update}',
                        ],
                    ],
                ]); ?>


            </div>


        </section>
    </div>
</div>