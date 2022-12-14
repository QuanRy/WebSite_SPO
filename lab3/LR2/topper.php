<?php require_once "db.php" ?>
<header>
   <nav id="topper" class="navbar navbar-expand-lg bg-light">
     <div class="container-fluid">
       <!-- вместо xxl можно ввести fluid и будет не по центру, а к левому краю-->
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <img src="img/7semyan.png" alt="Logo" width="40" height="30" class="d-inline-block align-text-center">
       <h5>Семь <br>семян</h5>

       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

         <ul class="navbar-nav me-auto mb-2 mb-lg-0">

           <li class="nav-item">
              <a class="nav-link" href="first_lab.php#carusel_sales">Удобрения</a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href="registration.php">Сборщики</a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href="first_lab.php#carusel_sales">Специальные предложения</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#footer">О нас</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#footer">FAQ</a>
           </li>
         </ul>

       </div>
       <form class="d-flex" role="search">
         <input class="form-control me-2" type="search" placeholder="Что-то ищете?" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Найти</button>
       </form>
       <div id="right_topper_icons">
         <p class="orders">
           <button type="button" class="btn btn-light">
             <img src="img/navbar/orders_cart.svg" alt="orders_cart" width="25" height="25" class="d-inline-block"><a class="nav-link" href="">Заказы</a> 
           </button>
         </p>
         <p class="favorites">
           <button type="button" class="btn btn-light">
             <img src="img/navbar/bag_heart.svg" alt="bag_heart" width="25" height="25" class="d-inline-block"><a class="nav-link" href="">Избранное</a> 
           </button>
         </p>
         <p class="login">
           <button type="button" class="btn btn-light">
             <img src="img/navbar/person.svg" alt="person" width="25" height="25" class="d-inline-block"><a class="nav-link" href="registration.php">Пользователь</a>
           </button>
         </p>
         <p class="basket">
           <button type="button" class="btn btn-light">
             <img src="img/navbar/bag_check.svg" alt="bag_check" width="25" height="25" class="d-inline-block"><a class="nav-link" href="">Корзина</a>
           </button>
         </p>
       </div>
     </div>
   </nav>
 </header>

 <!-- нижний topper, показывающий город, телефон и т.д. -->
 <header>
   <nav id="topper_lower" class="navbar navbar-expand-lg bg-light">
     <div class="container-fluid">
       <!-- вместо xxl можно ввести fluid и будет не по центру, а к левому краю-->
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

         <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
           <li class="nav-item">
             <a class="nav-link" href="https://yandex.ru/maps/213/moscow/?ll=37.629348%2C55.748813&z=13">Город: Москва</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Телефон: +7(495) 104-21-81</a>
           </li>
           <button class="btn_callback">Обратный звонок</button>
           <li class="nav-item">
             <a class="nav-link" href="#footer">О Компании</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#footer">Доставка и оплата</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#footer">Помощь</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#footer">Как сделать заказ</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#footer">Бонусная система</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#footer">Отзывы</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#footer">Контакты</a>
           </li>
         </ul>

       </div>
     </div>
   </nav>
 </header>