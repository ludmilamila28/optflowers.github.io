<?php

use app\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Project $model */
/** @var yii\widgets\ActiveForm $form */
$actionName = Yii::$app->controller->action->id;
?>

<div class="project-form">

    <?php $form = ActiveForm::begin([
                'options' => ['class' => 'model_form p-3'],
                'errorCssClass' => 'form_error',
                'fieldConfig' => [
                    'options' => ['class' => 'form-group form_field my-2'],
                    'inputOptions' => ['class' => 'form-control form_input'],
                ]
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->input('number', ['min' => 0]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php if($actionName !== 'update'):?>
        <?= $form->field($img, 'imageFile')->fileInput() ?>
    <?php endif ?>

    <?= $form->field($model, 'category_id')->dropdownList(
       Category::find()->select(['title', 'id'])->indexBy('id')->column(),
        ['prompt' => 'Выбрать категорию']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
