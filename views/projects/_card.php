<div class="col-md-6 col-lg-4 mb-4">
    <div class="card" style="height:460px;">
        <img src="/img/<?=$model -> image?>" class="card-img-top" alt="Проект 1">
        <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title"><?=$model -> title?></h5>
            <p class="card-text"><strong>Категория:</strong><?=$model -> category -> title?></p>
            <p class="card-text"><strong>Цена:</strong> <?=$model -> price?> руб.</p>
            <!--<p><i class="bi bi-star-fill text-warning"></i> (5 отзывов)</p>-->
            <a href="/cart/add/?item_id=<?=$model -> id?>" class="btn btn-danger w-100">Оформить</a>
        </div>
    </div>
</div>