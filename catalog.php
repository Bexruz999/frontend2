<?php ?>

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
            <button class="menu__btn">
              <div class="menu__btn-line"></div>
              <div class="menu__btn-line"></div>
              <div class="menu__btn-line"></div>
            </button>
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
    <ul class="menu-mobile__list">
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <img class="menu-mobile__img" src="images/user.svg" alt="">
          <p>войти</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <img class="menu-mobile__img" src="images/user.svg" alt="">
          <p>Регистрация</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <img class="menu-mobile__img" src="images/heart.svg" alt="">
          <p>Избранное</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <img class="menu-mobile__img" src="images/basket.svg" alt="">
          <p>Корзина</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <img class="menu-mobile__img" src="images/house.svg" alt="">
          <p>Магазины</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <img class="menu-mobile__img" src="images/procent.svg" alt="">
          <p>Акции</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <img class="menu-mobile__img" src="images/box.svg" alt="">
          <p>Доставка и оплата</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <p>войти</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <p>Квадроциклы</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <p>Катера</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <p>Гидроциклы</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <p>Лодки</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <p>Вездеходы</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <p>Снегоходы</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <p>Двигатели</p>
        </a>
      </li>
      <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
          <p>Запчасти</p>
        </a>
      </li>
    </ul>
    <div class="menu__mobile-linewrapper">
      <ul class="menu__mobile-line">
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
    </div>
    <div class="header__bottom">
      <div class="container">
        <ul class="menu-categories">
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Квадроциклы</a>
          </li>
          <li class="menu-categories__item">
            <a class="menu-categories__link" href="#">Катера</a>
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
 
  <section class="catalog">
    <div class="container">

      <h2 class="catalog__title">Гидроциклы</h2>

      <div class="catalog__filter">
        <div class="catalog__filter-itemsinner">
          <div class="catalog__filter-items mobile-overflow">
            <button>Полноприводные</button>
            <button>от 5000</button>
            <button>BRP</button>
            <button>еще</button>
          </div>
        </div>

        <div class="catalog__filter-btn">

          <select class="filter-style select-item" name="" id="">
            <option value="">По полулярности</option>
            <option value="">2</option>
            <option value="">3</option>
          </select>

          <button class="catalog__filter-btngrid catalog__filter-button catalog__filter-button--active">
            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="1" width="21" height="19" stroke="#2F3035" stroke-width="2" />
              <rect x="7" y="6" width="2" height="2" fill="#2F3035" stroke="#2F3035" stroke-width="2" />
              <rect x="7" y="13" width="2" height="2" fill="#2F3035" stroke="#2F3035" stroke-width="2" />
              <rect x="14" y="6" width="2" height="2" fill="#2F3035" stroke="#2F3035" stroke-width="2" />
              <rect x="14" y="13" width="2" height="2" fill="#2F3035" stroke="#2F3035" stroke-width="2" />
            </svg>
          </button>

          <button class="catalog__filter-btnline catalog__filter-button">
            <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="1">
                <rect x="6" width="19" height="3" rx="1.5" fill="#2F3035" />
                <rect x="6" y="8" width="19" height="3" rx="1.5" fill="#2F3035" />
                <rect x="6" y="16" width="19" height="3" rx="1.5" fill="#2F3035" />
                <rect width="3" height="3" rx="1.5" fill="#2F3035" />
                <rect y="8" width="3" height="3" rx="1.5" fill="#2F3035" />
                <rect y="16" width="3" height="3" rx="1.5" fill="#2F3035" />
              </g>
            </svg>
          </button>

        </div>
      </div>
      <div class="catalog__inner">
        <div class="aside__btn">
          фильтр
        </div>
        <aside class="catalog__inner-aside aside-filter">
          <div class="tabs-wrapper tabs-wrapper--no-scroll">
            <div class="tabs aside-filter__tabs">
              <a class="tab aside-filter__tab tab--active" href="#filter-1"><span>Параметры</span></a>
              <a class="tab aside-filter__tab" href="#filter-2"><span>по марке</span></a>
            </div>
            </div>
            <div class="tabs-container">
              <div id="filter-1" class="tabs-content aside-filter__tabscontent tabs-content--active">

                <form class="aside-filter__form">
                  <ul class="aside-filter__list">
                    <li class="aside-filter__item-drop">
                      <p class="aside-filter__item-title flter__item-drop flter__item-drop--active">Наличие</p>
                      <div class="aside-filter__content">
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            В наличие
                          </label>
                        </div>

                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            Под заказ
                          </label>
                        </div>
                      </div>
                    </li>

                    <li class="aside-filter__item-drop">
                      <p class="aside-filter__item-title flter__item-drop flter__item-drop--active">Новинки</p>
                      <div class="aside-filter__content aside-filter__content-radio">
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" name="radio" type="radio">
                            Все
                          </label>
                        </div>

                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" name="radio" type="radio">
                            Новинки
                          </label>
                        </div>
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" name="radio" type="radio">
                            Акции
                          </label>
                        </div>
                      </div>
                    </li>
                    <li class="aside-filter__item-drop">
                      <p class="aside-filter__item-title flter__item-drop flter__item-drop--active">Цена</p>
                      <div class="aside-filter__content">
                        <input type="text" class="js-range-slider" name="my_range" value=""/>
                      </div>
                    </li>


                    <li class="aside-filter__item-list">
                      <div class="filter__item-list">
                        <p class="filter__item-listtitle">Мощность, л.с.</p>
                        <select class="filter-style filter__item-listselect">
                          <option value="">90</option>
                          <option value="">130</option>
                          <option value="">154</option>
                          <option value="">230</option>
                        </select>
                      </div>
                      <div class="filter__item-list">
                        <p class="filter__item-listtitle">Мощность двигателя, л.с.</p>
                        <select class="filter-style filter__item-listselect">
                          <option value="">90</option>
                          <option value="">130</option>
                          <option value="">154</option>
                          <option value="">230</option>
                        </select>
                      </div>
                      <div class="filter__item-list">
                        <p class="filter__item-listtitle">Макс. скорость</p>
                        <select class="filter-style filter__item-listselect">
                          <option value="">90</option>
                          <option value="">130</option>
                          <option value="">154</option>
                          <option value="">230</option>
                        </select>
                      </div>
                    </li>
                    
                    <li class="aside-filter__item-drop">
                      <p class="aside-filter__item-title flter__item-drop flter__item-drop--active">Бренд</p>
                      <div class="aside-filter__content">
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox" checked>
                            BRP
                          </label>
                        </div>

                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox" checked>
                            Spark 2
                          </label>
                        </div>
                        
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            Spark 3
                          </label>
                        </div>
                        <div class="filter-more">
                          <button class="filter-more__btn">Показать еще</button>
                        </div>
                      </div>
                    </li>
                    
                    <li class="aside-filter__item-drop">
                      <p class="aside-filter__item-title flter__item-drop flter__item-drop--active">Модель</p>
                      <div class="aside-filter__content">
                        <input class="filter-search" type="text" placeholder="Введите модель">
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            Sea-doo Spark 2
                          </label>
                        </div>

                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            SeaDoo Spark 90 
                          </label>
                        </div>
                        
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            SeaDoo GTI 155
                          </label>
                        </div>
                        
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            SeaDoo GTR 230
                          </label>
                        </div>
                        <div class="filter-more">
                          <button class="filter-more__btn">Показать еще</button>
                        </div>
                      </div>
                    </li>
                    
                    <li class="aside-filter__item-drop btn-checked">
                      <p class="aside-filter__item-title flter__item-drop flter__item-drop--active">Акции</p>
                      <div class="aside-filter__content">
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            <span class="btn-checked__text">SALE</span>
                          </label>
                        </div>

                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            <span class="btn-checked__text">NEW</span>
                          </label>
                        </div>
                        
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            <span class="btn-checked__text">HIT</span>
                          </label>
                        </div>
                        
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            <span class="btn-checked__text">ДИЛЕР</span>
                          </label>
                        </div>
                      </div>
                    </li>
                    
                    <li class="aside-filter__item-drop">
                      <p class="aside-filter__item-title flter__item-drop flter__item-drop--active">Страны</p>
                      <div class="aside-filter__content">
                        
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox" checked>
                            Россия
                          </label>
                        </div>

                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox" checked>
                            Германия
                          </label>
                        </div>
                        
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            Китай
                          </label>
                        </div>
                        
                        <div class="aside-filter__content-box">
                          <label class="aside-filter__content-label">
                            <input class="filter-style" type="checkbox">
                            CША
                          </label>
                        </div>
                        <div class="filter-more">
                          <button class="filter-more__btn">Показать еще</button>
                        </div>
                      </div>
                    </li>
                    <li class="aside-filter__item-drop aside-filter__item-btn">
                      <button class="filter-btn__send filter-btn__send--active" type="submit">ВЫБРАТЬ</button>
                      <p class="filter__extra">Дополнительные параметры</p>
                      <div class="filter__extra-content">more</div>
                      <button class="filter-btn__reset" type="submit">Сбросить фильтр</button>
                    </li>
                  </ul>
                </form>

              </div>
              <div id="filter-2" class="tabs-content aside-filter__tabscontent">content-2</div>
            </div>
        </aside>
        <div class="catalog__inner-list">
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-1.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item product-item--sale" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-2.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-3.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item product-item--sale" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-4.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-5.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item product-item--sale" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-6.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-7.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item product-item--sale" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-8.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-9.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item product-item--sale" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-10.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-11.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>
          <div class="product-item__wrapper">
            <button class="product-item__favorite"></button>
            <button class="product-item__basket">
              <img src="images/basket-white.svg" alt="">
            </button>
            <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
            <a class="product-item product-item--sale" href="/product-page.html">
              <p class="product-item__hover-text">посмотреть товар</p>
              <img class="product-item__img" src="images/content/gidrotsikl-12.png" alt="">
              <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
              <p class="price product-item__price">1 049 500 ₽</p>
              <p class="product-item__notify-text">нет в наличии</p>
            </a>
          </div>

          <div class="pagination">
            <ul class="pagination-list">
              <li class="pagination-list__item active"><a href="#">1</a></li>
              <li class="pagination-list__item"><a href="#">2</a></li>
              <li class="pagination-list__item"><a href="#">3</a></li>
              <li class="pagination-list__item"><a href="#">4</a></li>
              <li class="pagination-list__item"><a href="#">5</a></li>
              <li class="pagination-list__item pagination-list__item--dots"><span>...</span></li>
              <li class="pagination-list__item"><a href="#">11</a></li>
            </ul>
          </div>

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
