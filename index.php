<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/data.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Edge</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/burger.css">
    <script async src="./script/main.js"></script>
</head>
<body>
    <header class="menuBoard">
        <div class="menuContainer wrapper">
            <div class="wrapperBurger">
                <input type="checkbox" id="checkbox" class="wrapper__checkbox">
                <label for="checkbox" class="wrapper__button">
                  <span class="wrapper__button-line"></span>
                  <span class="wrapper__button-line"></span>
                  <span class="wrapper__button-line"></span>
                </label>
                <div class="wrapper__menu">
                    <div class="containerLinkBurger">
                        <a href="#" class="wrapper__menu-link ubuntuR">Услуги</a>
                        <a href="#" class="wrapper__menu-link ubuntuR">Портфолио</a>
                        <a href="#" class="wrapper__menu-link ubuntuR">Отзывы</a>
                        <a href="#" class="wrapper__menu-link ubuntuR">Вакансии</a>
                        <a href="#" class="wrapper__menu-link ubuntuR">Контакты</a>
                    </div>
                    <address class="burgerAddress">
                        <a class="ubuntuB" href="">
                            8(863)243-15-10
                        </a>
                        <p class="ubuntuR">
                            Ростов-на-Дону
                        </p>
                    </address>
                </div>
            </div>
            <img class="burgerLogoCompany" src="./media/img/logo.png" alt="Logo company">
            <nav class="menuHeadContainer">
                <img src="./media/img/logo.png" alt="Logo company">
                <ul class="navBarHeader">
                    <li class="navItem">
                        <a class="navLink ubuntuR" href="#">Услуги</a>
                    </li>
                    <li class="navItem">
                        <a class="navLink ubuntuR" href="#">Портфолио</a>
                    </li>
                    <li class="navItem">
                        <a class="navLink ubuntuR" href="#">Отзывы</a>
                    </li>
                    <li class="navItem">
                        <a class="navLink ubuntuR" href="#">Вакансии</a>
                    </li>
                    <li class="navItem">
                        <a class="navLink ubuntuR" href="#">Контакты</a>
                    </li>
                </ul>
            </nav>
            <address class="telephoneNumberHead">
                <a class="ubuntuB" href="">
                    8(863)243-15-10
                </a>
                <p class="ubuntuR">
                    Ростов-на-Дону
                </p>
            </address>
            
        </div>
    </header>
    <section class="promoBoard">
        <article>
            <div class="wrapper promoBox">
                <div class="promoContainer">
                    <h1 class="promoTitle ubuntuB">Рекламно-информационное агентство</h1>
                    <p class="promoDescrip ubuntuR">
                        Будем рады, если Вы обратитесь в наше Агентство. 
                        Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.
                    </p>
                    <div class="promoButtonContainer">
                        <input class=" ubuntuR" placeholder="Номер телефона" type="text">
                        <button class="promoButton ubuntuRh">Обратный звонок</button>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="newsBoard">
        <div class="wrapper">
            <h2 class="newsMainTitle ubuntuB">Новости</h2>
            <div class="wrapperCarusel">
                <div id="carusel" class="newsContainer">
                    <?php foreach ($data->news as $value) { ?>
                        <div class="newsSelf">
                            <p class="dateNews robotoR"> <?= $value->date ?> </p>
                            <h3 class="newsTitle robotoB"> <?= $value->title ?> </h3>
                            <button class="newsButton ubuntuR">Подробнее</button>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <ul class="containerOfPagNavi">
                <li class="pagNavSelf selected"></li>
                <li class="pagNavSelf"></li>
                <li class="pagNavSelf"></li>
            </ul>
        </div>
    </section>
    <footer class="menuFootBoard">
        <div class="wrapper footerContainer">
            <div class="containerImgFoot">
                <img src="./media/img/logo.png" alt="Logo company Footer">
            </div>
            <nav class="menuFootContainer">
                <ul class="navBarHeader">
                    <li class="navItem">
                        <a class="navLink footLink ubuntuR" href="#">Услуги</a>
                    </li>
                    <li class="navItem">
                        <a class="navLink footLink ubuntuR" href="#">Портфолио</a>
                    </li>
                    <li class="navItem">
                        <a class="navLink footLink ubuntuR" href="#">Отзывы</a>
                    </li>
                    <li class="navItem">
                        <a class="navLink footLink ubuntuR" href="#">Вакансии</a>
                    </li>
                    <li class="navItem">
                        <a class="navLink footLink ubuntuR" href="#">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>