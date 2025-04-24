<?php

use app\models\Item;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Номенклатура';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row">
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

                    <div class="project-index">

                        <h1><?= Html::encode($this->title) ?></h1>

                        <p>
                            <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
                        </p>


                        <?= GridView::widget([
                            'showHeader' => true,
                            'summary' => '',
                            'tableOptions' => ['class' => 'table table-border'],
                            'dataProvider' => $dataProvider,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'title',
                                'price',
                                'is_actual',
                                //'category_id',
                                [
                                    'class' => ActionColumn::className(),
                                    'urlCreator' => function ($action, Item $model, $key, $index, $column) {
                                        return Url::toRoute([$action, 'id' => $model->id]);
                                    }
                                ],
                            ],
                        ]); ?>


                    </div>

                </section>
            </div>
        </div>
    </div>
</div>