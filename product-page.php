<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.min.css">
</head>

<body>

  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="header__top-inner">
          <nav class="menu">
            <ul class="menu__list">
              <li class="menu__item">
                <a class="menu__link" href="">
                  Магазины
                </a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="">
                  Акции
                </a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="">
                  Доставка и оплата
                </a>
              </li>
            </ul>
          </nav>
          <a class="logo" href="#">
            <img class="logo__img" src="images/logo.svg" alt="">
          </a>
          <div class="header__box">
            <p class="header__adress">
              Москва, ул. Науки 25
            </p>
            <ul class="user-list">
              <li class="user-list__item">
                <a class="user-list__link" href="">
                  <img src="images/heart.svg" alt="">
                </a>
              </li>
              <li class="user-list__item">
                <a class="user-list__link" href="">
                  <img src="images/user.svg" alt="">
                </a>
              </li>
              <li class="user-list__item">
                <a class="user-list__link basket" href="">
                  <img src="images/basket.svg" alt="">
                  <p class="basket__num">1</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header__bottom">
      <div class="container">
        <ul class="menu-categories">
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Квадроциклы</a>
          </li>
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Катера </a>
          </li>
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Гидроциклы</a>
          </li>
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Лодки</a>
          </li>
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Вездеходы</a>
          </li>
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Снегоходы</a>
          </li>
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Двигатели</a>
          </li>
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Запчасти</a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <div class="breadcrumbs">
    <div class="container">
      <div class="breadcrumbs__inner">
        <ul class="breadcrumbs__list mobile-overflow">
          <li class="breadcrumbs__list-item">
            <a href="#">Главная</a>
          </li>
          <li class="breadcrumbs__list-item">
            <span>Гидроциклы</span>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <section class="product-card">
    <div class="container">

      <div class="product-card__inner">
        <div class="product-card__img-box product-item--sale">
          <img src="images/content/gidrotsikl-large.png" alt="" class="product-card__img">
          <p class="product-card__price-old">
            1 200 475 ₽
          </p>
          <p class="product-card__price-new">
            1 100 475 ₽
          </p>
          <a class="product-card__link" href="#">Нашли дешевле? Снизим цену!</a>
          <div class="product-card__btn product-card__btn-mobile">
            <button>купить</button>
          </div>
        </div>
        <div class="product-card__content">
          <h1 class="product-card__title">Гидроцикл BRP SeaDoo GTI 155hp SE Long Blue Metallic</h1>
          <p class="product-card__code">Код товара: 366666-2</p>
          <div class="product-card__buttons">
            <a class="product-card__icon-favorits" href="#">
              <img src="images/heart.svg" alt="">
            </a>
            <a class="product-card__icon-comparsion" href="#">
              <img src="images/comparsion.svg" alt="">
            </a>
            <a class="rate" href="#">
              <div class="rate-yo" data-rateyo-rating="4"></div>
            </a>
          </div>

          <div class="tabs-wrapper product-card__tabs">
            <div class="tabs">
              <a class="tab product-card__tab tab--active" href="#product-1">Характеристики</a>
              <a class="tab product-card__tab" href="#product-2">Наличие в магазине</a>
            </div>
            <div class="tabs-container">
              <div id="product-1" class="tabs-content product-card__tab-content tabs-content--active">
                <ul class="product-card__list">
                  <li class="product-card__item">
                    <div class="product-card__item-left">Производитель</div>
                    <div class="product-card__item-right">Канада</div>
                  </li>
                  <li class="product-card__item">
                    <div class="product-card__item-left">Количество мест, шт: </div>
                    <div class="product-card__item-right">3</div>
                  </li>
                  <li class="product-card__item">
                    <div class="product-card__item-left">Мощность, л.с.</div>
                    <div class="product-card__item-right">155</div>
                  </li>
                  <li class="product-card__item">
                    <div class="product-card__item-left">Тип двигателя</div>
                    <div class="product-card__item-right">Бензиновый</div>
                  </li>
                  <li class="product-card__item">
                    <div class="product-card__item-left">Год выпуска</div>
                    <div class="product-card__item-right">2018</div>
                  </li>
                </ul>
                <a class="product-card__more" href="#">Показать еще</a>
                <div class="product-card__btn">
                  <button>купить</button>
                </div>
              </div>
              <div id="product-2" class="tabs-content product-card__tab-content">
                content-2
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="card__tabs">
    <div class="container">
      <div class="tabs-wrapper">
        
        <div class="tabs card__tab-box mobile-overflow">
          <a class="tab card__tab" href="#product-card__tabs-1">О товаре</a>
          <a class="tab card__tab" href="#product-card__tabs-2">Характеристики</a>
          <a class="tab card__tab" href="#product-card__tabs-3">Отзывы</a>
          <a class="tab card__tab tab--active" href="#product-card__tabs-4">Самовывоз</a>
          <a class="tab card__tab" href="#product-card__tabs-5">Доставка</a>
          <a class="tab card__tab" href="#product-card__tabs-6">Cервис</a>
          <a class="tab card__tab" href="#product-card__tabs-7">Гарантия</a>
        </div>
      </div>

      <div class="tabs-container">
        <div id="product-card__tabs-1" class="card__tab-content tabs-content">product-card__tabs-1</div>
        <div id="product-card__tabs-2" class="card__tab-content tabs-content">product-card__tabs-2</div>
        <div id="product-card__tabs-3" class="card__tab-content tabs-content">product-card__tabs-3</div>
        <div id="product-card__tabs-4" class="card__tab-content tabs-content tabs-content--active">
          <form action="">
            <div class="card__top-line">
              <label class="card__lable-search" for="">Магазин
                <input class="card__input-search" type="text">
              </label>
              <label class="card__label-pickup">
                <input class="filter-style" type="radio" name="pickup">
                Забрать сегодня
              </label>
              <label class="card__label-pickup">
                <input class="filter-style" type="radio" name="pickup" checked>
                Забрать в течение недели
              </label>
            </div>
            <ul class="card__list">
              <li class="card__list-item card__list-itemtitle">
                <div class="card__list-address">Адрес</div>
                <div class="card__list-workhours">Режим работы</div>
                <div class="card__list-avialable">Доступно</div>
                <div class="card__list-num">Количество</div>
                <div class="card__list-btn"></div>
              </li>
              <li class="card__list-item">
                <div class="card__list-address">Москва, ул. Науки 25</div>
                <div class="card__list-workhours">
                  <div class="workhours">
                    <span>пн-сб:</span><span>08:00-19:00</span>
                  </div>
                  <div class="workhours">
                    <span>вс:</span><span>09:00-17:00</span>
                  </div>
                </div>
                <div class="card__list-avialable">В наличии</div>
                <div class="card__list-num">1</div>
                <div class="card__list-btn">
                  <button type="submit">КУПИТЬ</button>
                </div>
              </li>
              <li class="card__list-item">
                <div class="card__list-address">Москва, ул. Южная 134</div>
                <div class="card__list-workhours">
                  <div class="workhours">
                    <span>пн-сб:</span><span>08:00-19:00</span>
                  </div>
                  <div class="workhours">
                    <span>вс:</span><span>09:00-17:00</span>
                  </div>
                </div>
                <div class="card__list-avialable">В наличии</div>
                <div class="card__list-num">2</div>
                <div class="card__list-btn">
                  <button type="submit">КУПИТЬ</button>
                </div>
              </li>
              <li class="card__list-item">
                <div class="card__list-address">Санкт-Петербург,<br>
                  ул. Красная 19</div>
                <div class="card__list-workhours">
                  <div class="workhours">
                    <span>пн-сб:</span><span>08:00-19:00</span>
                  </div>
                  <div class="workhours">
                    <span>вс:</span><span>09:00-17:00</span>
                  </div>
                </div>
                <div class="card__list-avialable">Нет в наличии</div>
                <div class="card__list-num">0</div>
                <div class="card__list-btn">
                  <button type="submit">КУПИТЬ</button>
                </div>
              </li>
              <li class="card__list-item">
                <div class="card__list-address">Киев, ул Шевченко 167</div>
                <div class="card__list-workhours">
                  <div class="workhours">
                    <span>пн-сб:</span><span>08:00-19:00</span>
                  </div>
                  <div class="workhours">
                    <span>вс:</span><span>09:00-17:00</span>
                  </div>
                </div>
                <div class="card__list-avialable">Нет в наличии</div>
                <div class="card__list-num">0</div>
                <div class="card__list-btn">
                  <button type="submit">КУПИТЬ</button>
                </div>
              </li>
            </ul>
          </form>
        </div>
        <div id="product-card__tabs-5" class="card__tab-content tabs-content">product-card__tabs-5</div>
        <div id="product-card__tabs-6" class="card__tab-content tabs-content">product-card__tabs-6</div>
        <div id="product-card__tabs-7" class="card__tab-content tabs-content">product-card__tabs-7</div>
      </div>

    </div>
  </section>

  <section class="products">
    <div class="container">
      <div class="products__inner">
        <h3 class="product__title">С этим товаром покупают</h3>
        <div class="tabs-wrapper">
          <div class="tabs products__tabs mobile-overflow">
            <a class="tab products__tab tab--active" href="#product-tab-1">запчасти</a>
            <a class="tab products__tab" href="#product-tab-2">моторы</a>
            <a class="tab products__tab" href="#product-tab-3">шины</a>
            <a class="tab products__tab" href="#product-tab-4">электроника</a>
            <a class="tab products__tab" href="#product-tab-5">инструменты</a>
            <a class="tab products__tab" href="#product-tab-6">инструменты</a>
          </div>
        </div>
        <div class="tabs-container products__container">
          <div id="product-tab-1" class="tabs-content products__content tabs-content--active">

            <div class="product-slider">

              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-2.png" alt="">
                    <h4 class="product-item__title">Спасательный жилет BRP Men's Airflow PFD</h4>
                    <p class="price product-item__price">6 900 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-3.png" alt="">
                    <h4 class="product-item__title">BRP Audio-Premium System</h4>
                    <p class="price product-item__price">68 000 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper product-item__not-available">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-4.png" alt="">
                    <h4 class="product-item__title">Спасательное снаряжение</h4>
                    <p class="price product-item__price">8 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-2.png" alt="">
                    <h4 class="product-item__title">Спасательный жилет BRP Men's Airflow PFD</h4>
                    <p class="price product-item__price">6 900 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-3.png" alt="">
                    <h4 class="product-item__title">BRP Audio-Premium System</h4>
                    <p class="price product-item__price">68 000 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper product-item__not-available">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-4.png" alt="">
                    <h4 class="product-item__title">Спасательное снаряжение</h4>
                    <p class="price product-item__price">8 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div id="product-tab-2" class="tabs-content products__content">
            <div class="product-slider">

              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper product-item__not-available">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
              <div class="product-slider__item">
                <div class="product-item__wrapper">
                  <button class="product-item__favorite"></button>
                  <button class="product-item__basket">
                    <img src="images/basket-white.svg" alt="">
                  </button>
                  <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                  <a class="product-item product-item--sale" href="#">
                    <p class="product-item__hover-text">посмотреть товар</p>
                    <img class="product-item__img" src="images/content/product-1.png" alt="">
                    <h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
                    <p class="price product-item__price">9 800 ₽</p>
                    <p class="product-item__notify-text">нет в наличии</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="product-tab-3" class="tabs-content products__content">slider-3</div>
          <div id="product-tab-4" class="tabs-content products__content">slider-4</div>
          <div id="product-tab-5" class="tabs-content products__content">slider-5</div>
          <div id="product-tab-6" class="tabs-content products__content">slider-6</div>
        </div>
        <div class="product__more">
          <a class="product__more-link" href="#">Показать еще</a>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer__top-inner">
          <div class="footer__top-item footer__top-newslatter">
            <h6 class="footer__top-title">Подпишитесь на нашу рассылку и узнавайте о акция быстрее</h6>
            <form class="footer-form">
              <input class="footer-form__input" type="text" placeholder="Введите ваш e-mail:">
              <button class="footer-form__btn" type="submit">Отправить</button>
            </form>
          </div>
          <div class="footer__top-item footer__top-itemdrop">
            <h6 class="footer__top-title footer__topdrop">Информация</h6>
            <ul class="footer-list">
              <li class="footer-list__item"><a href="#">О компании</a></li>
              <li class="footer-list__item"><a href="#">Контакты</a></li>
              <li class="footer-list__item"><a href="#">Акции</a></li>
              <li class="footer-list__item"><a href="#">Магазины</a></li>
            </ul>
          </div>
          <div class="footer__top-item footer__top-itemdrop">
            <h6 class="footer__top-title footer__topdrop">Интернет-магазин</h6>
            <ul class="footer-list">
              <li class="footer-list__item"><a href="#">Доставка и самовывоз</a></li>
              <li class="footer-list__item"><a href="#">Оплата</a></li>
              <li class="footer-list__item"><a href="#">Возврат-обмен</a></li>
              <li class="footer-list__item"><a href="#">Новости</a></li>
            </ul>
          </div>
          <div class="footer__top-item footer__top-social">
            <ul class="social-list">
              <li class="social-list__item">
                <a href="#">
                  <img src="images/instagram.svg" alt="#">
                </a>
              </li>
              <li class="social-list__item">
                <a href="#">
                  <img src="images/vkontakte.svg" alt="#">
                </a>
              </li>
              <li class="social-list__item">
                <a href="#">
                  <img src="images/facebook.svg" alt="#">
                </a>
              </li>
              <li class="social-list__item">
                <a href="#">
                  <img src="images/youtube.svg" alt="#">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer__bottom">
        <a class="footer__bottom-link" href="#">Договор оферты</a>
        <a class="footer__bottom-link" href="#">Политика обработки персональных данных</a>
      </div>
    </div>
  </footer>

  <script src="js/main.min.js"></script>
</body>

</html>


<!-- 
  <div class="tabs-wrapper">
    <a class="tab tab--active" href=""></a>
    <div class="tabs">
      <div class="tabs-container tabs-content--active"></div>
    </div>
  </div> 
-->