<?php
$this->title = 'Информация о нас'
?>
<div class="container">
    <?= $this->render('/html/h1', ['h1' => $this->title]) ?>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <figure class="text-start">
                <blockquote class="blockquote">
                    <p>
                        <span class="fs-3 text-danger">Интернет-магазин</span> компьютерной техники Digital Market предлагает широкий ассортимент товаров, включая компьютеры, ноутбуки, мониторы, комплектующие и аксессуары. В магазине представлены известные бренды, такие как Apple, Samsung, Xiaomi, ASUS и другие.
                    </p>
                    <p>
                        <span class="fs-3 text-danger">Digital Market</span>
                        обеспечивает удобство и комфорт своим клиентам, предоставляя возможность онлайн-заказа, доставки и оплаты товаров. Также магазин предлагает различные акции, скидки и специальные предложения для постоянных покупателей.

                    </p>
                    <p>
                        <span class="fs-3 text-danger">В Digital Market</span>
                        работают опытные специалисты, которые всегда готовы помочь с выбором товара, ответить на вопросы и предоставить консультации. Магазин активно развивается и стремится стать одним из лидеров на рынке компьютерной техники.
                    </p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Команда
                    <a href="/" class="nav-link d-flex flex-column">
                        <span class="fs-4 fw-bold text-danger fst-italic" style="text-shadow: white 5px 3px 5px;">
                            Digital Market
                        </span>
                        <small class="text-white font-monospace">
                            интернет-магазин компьютерной техники
                        </small>
                    </a>
                </figcaption>
            </figure>
        </div>
    </div>
</div>