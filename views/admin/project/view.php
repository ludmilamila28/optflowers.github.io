<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Project $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <div class="project-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= DetailView::widget([
                    'options' => ['class' =>  'table table-white table-bordered'],
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'title',
                        'price',
                        'description:ntext',
                        'is_actual',
                        'category_id',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>