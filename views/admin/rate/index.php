<?php

use app\models\Rate;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <div class="rate-index">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Create Rate', ['create'], ['class' => 'btn btn-success']) ?>
                </p>


                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'user_id',
                        'project_id',
                        'estim',
                        'txt:ntext',
                        [
                            'class' => ActionColumn::className(),
                            'urlCreator' => function ($action, Rate $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            }
                        ],
                    ],
                ]); ?>


            </div>
        </div>
    </div>
</div>