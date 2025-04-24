<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'user_info_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Корзина' => 'Корзина', 'Оформлен' => 'Оформлен', 'Завершен' => 'Завершен', 'Отменён' => 'Отменён', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'dt_create')->textInput() ?>

    <?= $form->field($model, 'dt_update')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pay_method')->dropDownList([ 'Картой' => 'Картой', 'Наличными' => 'Наличными', ], ['prompt' => '']) ?>

    <div class="form-group mt-2 mb-2">
        <?= Html::submitButton('Сохранить данные ', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
