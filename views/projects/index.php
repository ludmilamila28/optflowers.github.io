<?php
use yii\widgets\ListView;
use app\models\Category;
use app\models\Item;
use yii\data\ActiveDataProvider;

$cats = new ActiveDataProvider([
    'query' => Category::find(),
]);

if($cat = Yii::$app -> request -> get('cat')){
    $category = Category::findOne($cat)->title;
    $projects = new ActiveDataProvider([
        'query' => Item::find()->where(['category_id' => $cat]),
    ]);
}else{
    $projects = new ActiveDataProvider([
        'query' => Item::find(),
    ]);
}

$this->title = 'Цветы'

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
<div class="container mt-4">
    <div class="row">
        <!-- Сайдбар (левая колонка) -->
        <aside class="col-md-3">
            <h4 class="mb-2">Категории</h4>
                <?=ListView::widget([
                    'summary' => '',
                    'dataProvider' => $cats,
                    'itemView' => '_cats',
                    'viewParams' => [
                        'cat' => $cat
                    ],
                    'options' => ['tag' => 'ul', 'class' => 'list-group'],
                    'itemOptions' => ['tag' => false]
                ])?>
            <!-- Поле поиска -->
            <div class="mt-2 mb-2 d-flex flex-column">
                <input type="text" class="form-control border border-warning" placeholder="Поиск цветов..." id="search-input">
                <button type="submit" class="btn btn-sm btn-light mt-1">Найти</button>
            </div>
        </aside>
        <!-- Основной контент (правая колонка) -->
        <section class="col-md-9" <?php if(!$cat):?>style="margin-top: 38px;"<?php endif ?>>
            <?php if($cat):?>
                <div class="row">
                    <p>
                        Категория - <?=$category?>
                    </p>
                </div>
            <?php endif ?>
            <!-- Список карточек проектов -->
            <?=ListView::widget([
                    'summary' => '',
                    'dataProvider' => $projects,
                    'itemView' => '_card',
                    'viewParams' => [
                        'cat' => $cat
                    ],
                    'options' => ['tag' => 'div', 'class' => 'row'],
                    'itemOptions' => ['tag' => false]
                ])?>

        </section>
    </div>
</div>