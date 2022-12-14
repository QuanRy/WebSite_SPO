<?php require_once "db.php" ?>
<?php
require_once 'logic.php';  // логика работы фильтрации
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>7semyan</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <?php
    require_once 'topper.php';
    ?>

    <section>
        <div id="advantages_yellow" class="container-xxl">
            <div class="row align-text-center">

                <div class="col">
                    <h1 width="50" height="50">Главное - забота о клиенте</h1>
                </div>

                <div class="col">
                    <img src="img/wallet_small.svg" alt="wallet" width="50" height="50" class="d-inline-block">
                    <h3> Возврат и обмен без проблем</h3>
                </div>
                <div class="col">
                    <img src="img/piggy_bank.svg" alt="piggy_bank" width="50" height="50" class="d-inline-block">
                    <h3> Возвращаем до 5% бонусами за заказ</h3>
                </div>
                <div class="col">
                    <img src="img/truck.svg" alt="truck" width="50" height="50" class="d-inline-block">
                    <h3>Бесплатная доставка по всей России</h3>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div id="carusel_sales" class="container-xxl align-text-center">
            <h1 width="50" height="50" class="d-inline-block align-text-center">Акции</h1>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-hover="pause">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-between">
                            <div class="col">
                                <img src="img/sales/1.PNG" class="d-block w-100" alt="1sale">
                            </div>
                            <div class="col">
                                <img src="img/sales/2.PNG" class="d-block w-100" alt="2sale">
                            </div>
                            <div class="col">
                                <img src="img/sales/3.PNG" class="d-block w-100" alt="3sale">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-between">
                            <div class="col">
                                <img src="img/sales/4.PNG" class="d-block w-100" alt="5sale">
                            </div>
                            <div class="col">
                                <img src="img/sales/5.PNG" class="d-block w-100" alt="6sale">
                            </div>
                            <div class="col">
                                <img src="img/sales/6.PNG" class="d-block w-100" alt="7sale">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-between">
                            <div class="col">
                                <img src="img/sales/7.PNG" class="d-block w-100" alt="1sale">
                            </div>
                            <div class="col">
                                <img src="img/sales/8.PNG" class="d-block w-100" alt="2sale">
                            </div>
                            <div class="col">
                                <img src="img/sales/9.PNG" class="d-block w-100" alt="3sale">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section>

    <!-- Тут хранится карусель товаров из карточек -->
    <section>
        <div id="carusel_goods" class="container-xxl align-text-center">
            <h1 width="50" height="50" class="d-inline-block align-text-center">Возможно, вас заинтересует:</h1>
            <div id="carouselExampleControlsGoods" class="carousel slide" data-bs-ride="carousel" data-hover="pause">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row justify-content-between">

                            <div class="col">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent border-success">
                                        <button class="btn btn-callback" type="submit">
                                            <img src="img/cards/heart.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title">Гумат калия "Био-комплекс" 0,5л</h5>
                                        <img src="img/cards/goods/1.PNG" alt="1sale">
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <b>36 p</b>
                                        <button class="btn btn-addbag" type="submit">
                                            <img src="img/cards/handbag.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent border-success">
                                        <button class="btn btn-callback" type="submit">
                                            <img src="img/cards/heart.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title">Удобрение "Compo" Хакафос 20-20-20 20г</h5>
                                        <p class="card-text">
                                            <img src="img/cards/goods/2.PNG" alt="1sale">
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <b>36 p</b>
                                        <button class="btn btn-addbag" type="submit">
                                            <img src="img/cards/handbag.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent border-success">
                                        <button class="btn btn-callback" type="submit">
                                            <img src="img/cards/heart.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title">Агрикола "Грин Бэлт" для огурцов, кабачков 50 гр</h5>
                                        <p class="card-text">
                                            <img src="img/cards/goods/3.PNG" alt="1sale">
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <b>56 p</b>
                                        <button class="btn btn-addbag" type="submit">
                                            <img src="img/cards/handbag.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent border-success">
                                        <button class="btn btn-callback" type="submit">
                                            <img src="img/cards/heart.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title">Агрикола "Грин Бэлт" для фикусов 20г</h5>
                                        <p class="card-text">
                                            <img src="img/cards/goods/4.PNG" alt="1sale">
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <b>42 p</b>
                                        <button class="btn btn-addbag" type="submit">
                                            <img src="img/cards/handbag.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-between">

                            <div class="col">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent border-success">
                                        <button class="btn btn-callback" type="submit">
                                            <img src="img/cards/heart.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title">"Добрая сила" для огурцов, кабачков 1л</h5>
                                        <p class="card-text">
                                            <img src="img/cards/goods/5.PNG" alt="1sale">
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <b>343 p</b>
                                        <button class="btn btn-addbag" type="submit">
                                            <img src="img/cards/handbag.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent border-success">
                                        <button class="btn btn-callback" type="submit">
                                            <img src="img/cards/heart.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title">"Буйские удобрения" Акварин для рассады 20г</h5>
                                        <p class="card-text">
                                            <img src="img/cards/goods/6.PNG" alt="1sale">
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <b>23 p</b>
                                        <button class="btn btn-addbag" type="submit">
                                            <img src="img/cards/handbag.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent border-success">
                                        <button class="btn btn-callback" type="submit">
                                            <img src="img/cards/heart.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title">Гумат аммония "Био-комплекс" 1л</h5>
                                        <p class="card-text">
                                            <img src="img/cards/goods/7.PNG" alt="1sale">
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <b>148 p</b>
                                        <button class="btn btn-addbag" type="submit">
                                            <img src="img/cards/handbag.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent border-success">
                                        <button class="btn btn-callback" type="submit">
                                            <img src="img/cards/heart.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                    <div class="card-body text-success">
                                        <h5 class="card-title">"Зеленая аптека садовода" для корней 10г</h5>
                                        <p class="card-text">
                                            <img src="img/cards/goods/8.PNG" alt="1sale">
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <b>37 p</b>
                                        <button class="btn btn-addbag" type="submit">
                                            <img src="img/cards/handbag.svg" alt="8sale" width="25" height="25" class="d-inline-block align-text-center">
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsGoods" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsGoods" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </section>

    <?php
    require_once 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>