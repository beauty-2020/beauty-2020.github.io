<?php  
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                      $ipp = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ipp = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ipp = $_SERVER['REMOTE_ADDR'];
                    }
                   $q = @unserialize(file_get_contents('http://ip-api.com/php/'.$ipp . '?lang=ru'));
                
                   $code = 'RU';
                   if ($q && $q['status'] == 'success') {
                    $code = $q['countryCode'];
                   }
                ?><!DOCTYPE html>
<html lang="ru">
  <head> <style>body{display:none}</style>
                        <style>.FOOTER_INFO{display:block;-webkit-user-select:none!important;user-select:none!important;}.FOOTER_INFO:empty{display:none!important}</style>
                        <script>document.addEventListener('DOMContentLoaded', function(){var item = document.getElementsByTagName('body')[0]; item.style.display = 'block';});</script>
                        <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
                        <link rel='stylesheet' href='widgets/hReset.css'>
    <meta charset="utf-8">
    <title>Серум</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name='viewport' content='width=device-width'/>
    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/flipclock.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/plyr.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <script>
                $(function(){
window.curent_country='<?php echo $code ?>';
addCountry({"KZ":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d","MD":"\u041c\u043e\u043b\u0434\u0430\u0432\u0438\u044f","UZ":"\u0423\u0437\u0431\u0435\u043a\u0438\u0441\u0442\u0430\u043d"}, '<?php echo $code ?>' );
})

                </script></head>
  <body class="pluginLeave">
      <div class="wrapper">
      <div class="popup__wrapper ma1leaveBlock">
      <div class="popup__block">
          <div class="popup__close" onclick="document.querySelector('.popup__wrapper').style.display='none'"></div>
          <div class="popup__sert"></div>
          <div class="popup__right">
          <div class="mb-form-block">
              <div class="mb-form-block__form">
                <div class="mb-form-block__popup-left">
                  <div class="popup__left-block">
                  </div>
                </div>
                <div class="mb-form-block__form-exp">
                          <span>Мультикомплекс </span>
                          <span>экстраординарных масел</span>
                        </div>
                <div class="mb-form-block__form-top">
                  <b>Закажите</b> прямо сейчас и получите SERUM за <span class="black"><span class="displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span> <span class="displayCurrentCurrenct">₸</span></span>
                </div>
              <div class="mb-form-block__form-bottom">
                <div class="mb-form-block__form-timerTitle">Торопитесь, до конца акции осталось:</div>
                <div class="timer"></div>
                <div class="mb-form-block__form-priceBlock">
                  <div class="mb-form-block__form-priceBlock-left">
                    <span class="displayCurrentPriceNoCyr formPrice displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span>
                    <span class="displayCurrentCurrency formPriceCur displayCurrentCurrency">₸</span>
                  </div>
                  <div class="mb-form-block__form-priceBlock-right">
                    <div class="xyesto">вместо</div>
                    <span class="displayPrevPriceNoCyr formOldPrice displayPrevPriceNoCyr">9900</span>
                    <span class="displayCurrentCurrency formOldPriceCur displayCurrentCurrency">₸</span>
                  </div>
                </div>
                <form action="order_ru.php" method="post" method="POST"  action="order_ru.php" class="mainForm orderFormWrapper">
                  <div class="form-input">
                    <select name="country" class="orderFormWrapperCountry"></select>
                  </div>
                  <div class="form-input">
                    <input type="text" name="name" placeholder="Светлана Иванова">
                  </div>
                  <div class="form-input">
                    <input type="text" name="phone" placeholder="+7 495 784 62 73">
                  </div>
                  <p class="priCur">* За одну порцию</p>
                  <button class="form-button" type="submit">Остановить старение</button>
                  <script>$(document).ready(function(){$(".orderFormWrapperCountry").change(function(){$(".zprce").val(window.allPrices[$(this).val()].cost);});});</script><input type="hidden" class="zprce" name="price" value="0"></form>
              </div>
            </div>
          </div>
          </div>
      </div>
    </div>
      <div class="mob-popup__wrapper">
        <div class="mob-popup__block">
            <div class="mob-popup__close" onclick="document.querySelector('.mob-popup__wrapper').style.display='none'"></div>
            <div class="mb-form-block">
                <div class="mb-form-block__form">
                  <div class="mob-popup_img"><img src="img/mob-popup-form-img.png" alt=""></div>
                  <div class="mb-form-block__form-top">
                  <b>Закажите</b> прямо сейчас и получите SERUM за <span class="black"><span class="displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span> <span class="displayCurrentCurrenct">₸</span></span>
                </div>
                <div class="mb-form-block__form-bottom">
                  <div class="mb-form-block__form-timerTitle">Торопитесь, до конца акции осталось:</div>
                  <div class="timer"></div>
                  <div class="mb-form-block__form-priceBlock">
                    <div class="mb-form-block__form-priceBlock-left">
                      <span class="displayCurrentPriceNoCyr formPrice displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span>
                      <span class="displayCurrentCurrency formPriceCur displayCurrentCurrency">₸</span>
                    </div>
                    <div class="mb-form-block__form-priceBlock-right">
                      <div class="xyesto">вместо</div>
                      <span class="displayPrevPriceNoCyr formOldPrice displayPrevPriceNoCyr">9900</span>
                      <span class="displayCurrentCurrency formOldPriceCur displayCurrentCurrency">₸</span>
                    </div>
                  </div>
                  <form action="order_ru.php" method="post" method="POST"  action="order_ru.php" class="mainForm orderFormWrapper">
                    <div class="form-input">
                      <select name="country" class="orderFormWrapperCountry"></select>
                    </div>
                    <div class="form-input">
                      <input type="text" name="name" placeholder="Светлана Иванова">
                    </div>
                    <div class="form-input">
                      <input type="text" name="phone" placeholder="+7 495 784 62 73">
                    </div>
                    <p class="priCur">* За одну порцию</p>
                    <button class="form-button" type="submit">Остановить старение</button>
                    <script>$(document).ready(function(){$(".orderFormWrapperCountry").change(function(){$(".zprce").val(window.allPrices[$(this).val()].cost);});});</script><input type="hidden" class="zprce" name="price" value="0"></form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="mobMenu">
        <div class="mobMenu__inn">
        <div class="mobButton insideButton insHide">
            <div class="mobButton__line1"></div>
            <div class="mobButton__line2"></div>
            <div class="mobButton__line3"></div>
          </div>
          <span class="mobMenuLabel">МЕНЮ</span>
        <a href="#">Почему<br>Серум?</a>
          <a href="#">Состав<br>препарата</a>
          <a href="#">Отзывы<br>покупателей</a>
          <a href="#">Приобрести<br>Серум</a>
        </div>
      </div>
      <div class="top-line">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav>
                <div class="mobButton insHide">
                  <div class="mobButton__line1"></div>
                  <div class="mobButton__line2"></div>
                  <div class="mobButton__line3"></div>
                </div>
                <a href="#" class="mobHide">Почему Серум?</a>
                <a href="#" class="mobHide">Состав препарата</a>
                <a href="#" class="mobHide">Отзывы покупателей</a>
                <a href="#" class="mobHide">Приобрести Серум</a>
                <a href="#" data-click="true" data-target=".popup__wrapper" class="callMeDar">Купить сейчас!</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
        <section class="main-block first-main">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-4 col-xs-12">
                  <div class="clear"></div>
                  <div class="mb-form-block">
                      <div class="mb-form-block__img mobHide"><img src="img/mb-img.png" alt="Серум"></div>
                      <div class="mb-form-block__form">
                        <div class="mb-form-block__form-exp mobHide">
                          <span>Мультикомплекс </span>
                          <span>экстраординарных масел</span>
                        </div>
                        <div class="mb-form-block__form-top">
                  <b>Закажите</b> прямо сейчас и получите SERUM за <span class="black"><span class="displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span> <span class="displayCurrentCurrenct">₸</span></span>
                </div>
                      <div class="mb-form-block__form-bottom">
                        <div class="mb-form-block__form-timerTitle">Торопитесь, до конца акции осталось:</div>
                        <div class="timer"></div>
                        <div class="mb-form-block__form-priceBlock">
                          <div class="mb-form-block__form-priceBlock-left">
                            <span class="displayCurrentPriceNoCyr formPrice displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span>
                            <span class="displayCurrentCurrency formPriceCur displayCurrentCurrency">₸</span>
                          </div>
                          <div class="mb-form-block__form-priceBlock-right">
                            <div class="xyesto">вместо</div>
                            <span class="displayPrevPriceNoCyr formOldPrice displayPrevPriceNoCyr">9900</span>
                            <span class="displayCurrentCurrency formOldPriceCur displayCurrentCurrency">₸</span>
                          </div>
                        </div>
                        <form action="order_ru.php" method="post" method="POST"  action="order_ru.php" class="mainForm orderFormWrapper">
                          <div class="form-input">
                            <select name="country" class="orderFormWrapperCountry"></select>
                          </div>
                          <div class="form-input">
                            <input type="text" name="name" placeholder="Светлана Иванова">
                          </div>
                          <div class="form-input">
                            <input type="text" name="phone" placeholder="+7 495 784 62 73">
                          </div>
                          <button class="form-button" type="submit">Остановить старение</button>
                          <script>$(document).ready(function(){$(".orderFormWrapperCountry").change(function(){$(".zprce").val(window.allPrices[$(this).val()].cost);});});</script><input type="hidden" class="zprce" name="price" value="0"></form>
                      </div>
                    </div>
                    <div class="mb-form-block__form-product"></div>
                    <div class="mobBuyersData">
                      <p class="priCur">* За одну порцию</p>
                      <p>За 1.06.2020 заказано</p>
                      <p>1 491 упаковок <span class="insHide">Серум</span></p>
                    </div>
                    <div class="mb-img insHide"><img src="img/mob-mb-img.png" alt=""></div>
                  </div>
              </div>

            </div>
          </div>
        </section>


        <section class="attention">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-xs-12">
                <div class="attention__title">Внимание! через:</div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="attention__item">
                  <div class="attention__item-title">3</div>
                  <div class="attention__item-desc">дня</div>
                  <div class="attention__item-text">выравнивается цвет лица, кожа становится более подтянутой</div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="attention__item">
                  <div class="attention__item-title">21</div>
                  <div class="attention__item-desc">день</div>
                  <div class="attention__item-text">осветляются пигментные пятна, проходит отёчность и синяки под глазами</div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="attention__item">
                  <div class="attention__item-title">90</div>
                  <div class="attention__item-desc">дней</div>
                  <div class="attention__item-text">сокращаются даже глубокие морщины: мимические и возрастные</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-xs-12">
                <div class="attention__postTitle">Преждевременное старение?</div>
                <div class="attention__postDesc">Оставьте его во вчерашнем дне!</div>
              </div>
            </div>
          </div>
        </section>

        <section class="what">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-lg-offset-5 col-md-7 col-md-offset-5 col-sm-7 col-sm-offset-5 col-xs-12">
                <div class="what__title">
                  <span>Что мешает вам быть </span>
                  <span>уверенными в собственной </span>
                  <span>неотразимости?</span>
                </div>
                <div class="what__item">
                  Мимические и возрастные морщинки стали не такими уж незаметными, а кожа  потеряла упругость?
                </div>
                <div class="what__item">
                  Вы боитесь, что победить эти возрастные изменения невозможно без операций и иньекций?
                </div>
                <div class="what__item">
                  Устали выбрасывать деньги на ветер, поскольку уходовая косметика не даёт желаемого результата?
                </div>
                <div class="what__item">
                  Не оставляете надежды отыскать эффективное средство, которое вернёт вашей коже красоту и здоровье?
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="serum">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="serum__title">СЕРУМ:</div>
                <div class="serum__desc">
                  <span>время не властно </span>
                  <span>над красотой!</span>
                </div>
                <div class="serum__text">
                  <p>Мультикомплекс экстраординарных масел СЕРУМ — это инновационная антивозрастная программа, разработанная американскими косметологами для решения проблем кожи в зависимости от её индивидуальных потребностей. </p>
                  <p>Созданный на основе концентратов экстраординарных масел и обогащённый мицеллами сока и вытяжек растений, Серум обладает мощными липофильными и гидрофильными свойствами, помогающими замедлить процесс старения и вернуть вашей коже сияние и блеск без операций и иньекций!</p>
                </div>
                <div class="serum__sert insHide"></div>
              </div>
            </div>
          </div>
        </section>


        <section class="woman">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-lg-offset-5 col-md-7 col-md-offset-5 col-sm-7 col-sm-offset-5 col-xs-12">
                <div class="woman__title">Более 100 000 женщин</div>
                <div class="woman__desc">
                  <span>США и Европы уже попробовали </span>
                  <span>его действие на себе! Вот, как они </span>
                  <span>оценили полученные результаты:</span>
                </div>
                <div class="woman__q insHide"></div>
                <div class="woman__text">
                  <p><span>«</span>Я даже не думала, что экстраординарное масло может работать настолько эффективно! Это просто изумительно!»</p>
                  <p><span>«</span>Выгляжу моложе лет на 5, не меньше! Мой супруг не верит, что такое возможно без пластической хирургии!»</p>
                  <p><span>«</span>Возрастные морщины сократились почти наполовину! Ни одно уходовое средство не давало такого поразительного эффекта!»</p>
                  <p><span>«</span>Смотрю на своё отражение в зеркале и не могу поверить глазам! Теперь только Серум! Ни на что его не променяю!»</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        

        

        <section class="split-area" id="again5">
          <div class="split-area__inn">
            <div class="split-area__inn-item">
              <div class="split-area__timer-title">Торопитесь, до конца акции осталось:</div>
              <div class="timer"></div>
            </div>
            <div class="split-area__inn-item mobHide">
              <img src="img/splitArea-img.png" alt="Серум">
            </div>
            <div class="split-area__inn-item">
              <div class="split-area__priceBlock">
                <span class="displayCurrentPriceNoCyr split-area__price displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span>
                <span class="displayCurrentCurrency  split-area__cyr displayCurrentCurrency">₸</span>
              </div>
              <div class="split-area__prevPriceBlock">
                <div class="vmesto">вместо</div>
                <span class="displayPrevPriceNoCyr split-area__oldPrice displayPrevPriceNoCyr">9900</span>
                <span class="displayCurrentCurrency  split-area__cyr displayCurrentCurrency">₸</span>
              </div>
            </div>
            <div class="split-area__inn-item col-xs-12">
              <a href="#" class="btn">Заказать Серум</a>
            </div>
          </div>
        </section>


        <section class="uniq">
          <div class="container">
            <div class="row">
              <div id="mob-again5" class="col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-10 col-sm-offset-2 col-xs-12">
                <div class="uniq__letsTitle">Чем же он так уникален?</div>
                <div class="uniq__letsText">Главное преимущество мультикомплекса Серум заключается в том, что он начинает работать сразу после нанесения на кожу. Моментально распознавая проблемные зоны и определяя имеющиеся несовершенства, он запускает процесс регенерации сразу в трёх проекциях:</div>
                <div class="uniq__ul">
                  <p><span>корректирует дефекты</span></p>
                  <p><span>регулирует метаболизм</span></p>
                  <p><span>омолаживает кожу</span></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-10 col-sm-offset-2 col-xs-12">
                <div class="uniq__letsTitle">А ещё Серум работает 24 часа в сутки!</div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-lg-offset-3 col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-2 col-xs-12">
                <div class="uniq__letsText uniq__item ui1">запускает мощное индивидуальное защитное, корректирующее, увлажняющее и питающее действие, активизирует SPF факторы</div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="uniq__letsText uniq__item ui2">ускоряет процессы регенерации клеток, уплотняет коллагеновые структуры, устраняет морщины, питает и улучшает тон кожи</div>
              </div>
            </div>
          </div>
        </section>

        <section class="using">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-xs-12">
                <div class="using__title">Ежедневное использование <b>Серума:</b></div>
                <div class="using__items">
                  <div class="using__item">
                    <div class="using__item-title">
                      на <span>30</span>%
                    </div>
                    <div class="using__item-text">
                      устраняет глубокие мимические и возрастные морщины
                    </div>
                  </div>
                  <div class="using__item">
                    <div class="using__item-title">
                      на <span>50</span>%
                    </div>
                    <div class="using__item-text">
                      повышает активность коллагеновых и эластиновых структур
                    </div>
                  </div>
                  <div class="using__item">
                    <div class="using__item-title">
                      на <span>70</span>%
                    </div>
                    <div class="using__item-text">
                      восстанавливает факторы увлажнения кожных покровов  
                    </div>
                  </div>
                  <div class="using__item">
                    <div class="using__item-title">
                      на <span>80</span>%
                    </div>
                    <div class="using__item-text">
                      снижает динамику появления возрастных изменений 
                    </div>
                  </div>
                  <div class="using__item">
                    <div class="using__item-title">
                      на <span>90</span>%
                    </div>
                    <div class="using__item-text">
                      нормализует функцию сальных желез и очищает эпидермис 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="howToUse">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-xs-12">
                <div class="howToUse__title">Как его использовать?</div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="howToUse__item">
                  <div class="howToUse__item-title">Нанести</div>
                  <div class="howToUse__item-text">при помощи пипетки на область лба, щёк и подбородок</div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="howToUse__item">
                  <div class="howToUse__item-title">Распределить</div>
                  <div class="howToUse__item-text">массажными движениями и дать впитаться</div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="howToUse__item">
                  <div class="howToUse__item-title">Применять</div>
                  <div class="howToUse__item-text">утром и вечером, повторяя полный курс 3 раза в год </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="sostav" id="sostav">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-xs-12">
                <div class="sostav__title"><b>Серум</b> полностью натурален!</div>
                <div class="sostav__desc">В его состав входят:</div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-xs-12">
                <div class="sostav__nav">
                  <div class="sostav__nav-item sos__selected" data-connect="1">Натуральные масла</div>
                  <div class="sostav__nav-item" data-connect="2">Соки растений</div>
                </div>
              </div>
            </div>
            <div class="row" data-connect="1">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sostav__item">
                  <div class="sostav__item-title">Жожоба</div>
                  <div class="sostav__item-text">
                    Масло вечнозелёного кустарника крайне эффективно при дряблой и стареющей коже. Благодаря действию витамина Е, оно делает её гладкой и бархатистой, придавая упругость, эластичность и подтянутость. Кроме того, масло жожоба обладает превосходными омолаживающими свойствами, интенсивно питает кожу и придаёт ей здоровый вид. 
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sostav__item">
                  <div class="sostav__item-title">Бразильский орех</div>
                  <div class="sostav__item-text">
                    В составе бразильского ореха присутствуют витамины A, C, E, PP и почти все витамины группы В, в том числе и B1, который считается лучшим средством в борьбе с воспалительными процессами. Бразильский орех содержит рекордное количество селена, а аминокислоты и клетчатка, также входящие в его состав, отлично справляются с выведением токсинов. 
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sostav__item">
                  <div class="sostav__item-title">Кукуй</div>
                  <div class="sostav__item-text">
                    Масло кукуи содержит полезнейшие кислоты, незаменимые для функционирования кожи: олеиновую, альфа-линоленовую и линолевую.  Создавая особую защитную плёнку на коже, они помогают сделать её более увлажнённой и здоровой. Наконец, масло кукуи предотвращает солнечные ожоги, ускоряет заживление ран и защищает от воздействия окружающей среды.
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-connect="2">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sostav__item">
                  <div class="sostav__item-title">Алоэ</div>
                  <div class="sostav__item-text">
                    Содержит более двухсот компонентов: витамины А, В, С, Е, а также йод, железо, цинк, фтор. Помогает коже вырабатывать коллаген и эластин, необходимый для поддержания молодости, ускоряет регенерацию клеток и разглаживает морщины. Масла, в основу которых входит алоэ, можно применять людям с чувствительной кожей, склонной к появлению раздражений.
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sostav__item">
                  <div class="sostav__item-title">Виноградные косточки</div>
                  <div class="sostav__item-text">
                    Витамин Е, кальций, калий и линолевая кислота повышают защитные функции эпидермиса, препятствуют потере влаги и шелушению кожи. Маски для лица из виноградных косточек купируют вредное воздействие ультрафиолета, защищают эпидермис от влияния декоративной косметики, сужают поры и нормализуют процессы выделения кожного сала.
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sostav__item">
                  <div class="sostav__item-title">Кедровая живица</div>
                  <div class="sostav__item-text">
                    Является достойной заменой дорогостоящим омолаживающим процедурам и прекрасно справляется с мимическими и возрастными морщинами, пигментными пятнами, шелушением и угревой сыпью. Содержит живица и терпентин — уникальное вещество, обладающее мощными бактерицидными, ранозаживляющими и противовоспалительными свойствами.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>






      


        


        <section class="split-area">
          <div class="split-area__inn">
            <div class="split-area__inn-item">
              <div class="split-area__timer-title">Торопитесь, до конца акции осталось:</div>
              <div class="timer"></div>
            </div>
            <div class="split-area__inn-item mobHide">
              <img src="img/splitArea-img.png" alt="Серум">
            </div>
            <div class="split-area__inn-item">
              <div class="split-area__priceBlock">
                <span class="displayCurrentPriceNoCyr split-area__price displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span>
                <span class="displayCurrentCurrency  split-area__cyr displayCurrentCurrency">₸</span>
              </div>
              <div class="split-area__prevPriceBlock">
                <div class="vmesto">вместо</div>
                <span class="displayPrevPriceNoCyr split-area__oldPrice displayPrevPriceNoCyr">9900</span>
                <span class="displayCurrentCurrency  split-area__cyr displayCurrentCurrency">₸</span>
              </div>
            </div>
            <div class="split-area__inn-item col-xs-12">
              <a href="#" class="btn">Заказать Серум</a>
            </div>
          </div>
        </section>







        <section class="fyes">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-lg-offset-6 col-md-7 col-md-offset-5 col-sm-7 col-sm-offset-5 col-xs-12">
                <div class="fyes__title">ЧЕТЫРЕ «Да!»</div>
                <div class="fyes__desc">в пользу Серума</div>
                  <div class="fyes__item-title fyest1">Накопительный эффект омоложения</div>
                  <div class="fyes__item-text">Оказывает омолаживающее действие на кожу всех типов и возрастных категорий. Восстанавливающий курс — 20 дней, омолаживающий — 1 месяц. Для 100% эффекта рекомендуется проходить 3 курса в год. </div>

                  <div class="fyes__item-title fyest2">Безопасный и натуральный продукт</div>
                  <div class="fyes__item-text">Серум является 100% натуральным продуктом: он не содержит искусственных и генномодифицированных веществ, консервантов и лекарственных препаратов. Гипоаллергенен и не вызывает привыкания.</div>

                  <div class="fyes__item-title fyest3">Подходит для всех возрастов и типов кожи</div>
                  <div class="fyes__item-text">Мультикомплекс рекомендован в любом возрасте как эффективное средство для поддержания факторов омоложения, предотвращения преждевременного старения и отсрочки периода увядания кожи.</div>

                  <div class="fyes__item-title fyest4">Универсален и удобен в применении</div>
                  <div class="fyes__item-text">Серум может использоваться в качестве самостоятельного ухаживающего, увлажняющего, питательного и защитного средства, а также в качестве основы под макияж.</div>
              </div>
            </div>
          </div>
        </section>






        
        <section class="reviews" id="reviews">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-xs-12">
                <div class="reviews__title">
                  <p>Как Серум помог сохранить молодость другим женщинам</p>
                  <p>(авторский стиль, орфография и пунктуация сохранены)</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-xs-12">
                <div class="owl-carousel reviews__slider">
                  <div class="reviews__slide reviews_sl1">
                    <div class="reviews__slide-top">
                      <div class="reviews__slide-top-name">Галина Михайловна,</div>
                      <div class="reviews__slide-top-city">Рязань</div>
                    </div>
                    <div class="reviews__slide-bottom">
                      Работа, стрессы, недосып, экология — кого винить в том, что к 40 годам из зеркала на тебя смотрит замученная жизнью женщина? Главное НЕ ОПУСКАТЬ руки, верить, что возраст — не приговор, а ещё не забывать ухаживать за собой. В этом смысле мне ПОМОГ Серум. Прошла два курса и собираюсь начать третий, как и рекомендовано. Лицо подтянулось, стало более свежим и упругим, морщинки мимические СОКРАТИЛИСЬ ВДВОЕ, а ещё практически ИСЧЕЗЛО пигментное пятно на подбородке. Настроена победить возрастные морщины если не полностью, то хотя бы частично. 
                    </div>
                  </div>
                  <div class="reviews__slide reviews_sl2">
                    <div class="reviews__slide-top">
                      <div class="reviews__slide-top-name">Алена,</div>
                      <div class="reviews__slide-top-city">Омск</div>
                    </div>
                    <div class="reviews__slide-bottom">
                      Морщин у меня немного, а вот кожа выглядит уставшей. Искала что-нибудь, что поможет улучшить цвет лица + подтянуть тургор. Выбор пал на Серум. После недели использования лицо посвежело. У масла приятный запах + натуральный состав. Применяю 2 раза в день, очень надеюсь, что и дальше все будет здорово! 
                    </div>
                  </div>
                  <div class="reviews__slide reviews_sl3">
                    <div class="reviews__slide-top">
                      <div class="reviews__slide-top-name">Слава,</div>
                      <div class="reviews__slide-top-city">Владивосток</div>
                    </div>
                    <div class="reviews__slide-bottom">
                      Серум мне подарила подруга. Недели 2 он стоял на полке, пока мое уходовое не закончилось, а в магазин бежать было лень. Распаковала. Попробовала. И где я была раньше? Всего 3 недели — а лицо гладкое, как у младенца! Раздражения никакого (мы капризные, да), а аромат просто божественный!!! Девочки, это просто шок, только положительный! Не думала никогда раньше, что такое бывает! 
                    </div>
                  </div>
                  <div class="reviews__slide reviews_sl4">
                    <div class="reviews__slide-top">
                      <div class="reviews__slide-top-name">Марго,</div>
                      <div class="reviews__slide-top-city">Алматы</div>
                    </div>
                    <div class="reviews__slide-bottom">
                      Раньше всегда пробовала только люксовую косметику, в «бабушкины» рецепты не верила. А потом случился небольшой финансовый кризис и пришлось искать что-то действенное, но уже недорогое))) Выбор пал на Серум. Не могу сказать о полном разглаживании морщин, так как времени прошло мало. Рекомендовать могу по трем пунктам: гипоаллергенность, натуральные компоненты, приятная цена))) На лице не чувствуется, впитывается достаточно быстро, я под макияж его использую. Через месяц отпишусь о результатах омоложения)))
                    </div>
                  </div>
                  <div class="reviews__slide reviews_sl5">
                    <div class="reviews__slide-top">
                      <div class="reviews__slide-top-name">Таня,</div>
                      <div class="reviews__slide-top-city">Новосибирск</div>
                    </div>
                    <div class="reviews__slide-bottom">
                      Не люблю тяжелые антивозрастные крема, которые на кожу ложатся, как цементная масса. Пользуюсь только сыворотками и концентратами. Серум сочетаю с другими уходовыми средствами: использую по мере запущенности ситуации. Нравится, что он быстро впитывается и кожу держит в тонусе. Наношу вокруг глаз, капельку на веко, немного на лоб и складки возле носа. Накопительного эффекта не заметила, но и ухудшения состояния после отмены (если неделю не использовать) тоже.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="audio__container mobHide">
                  <audio controls>
                    <source src="#" type="audio/mp3">
                  </audio>
                  <div class="audio__container-name">Иван Иванович</div>
                  <div class="audio__container-age">99 лет</div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="audio__container">
                  <audio controls>
                    <source src="#" type="audio/mp3">
                  </audio>
                  <div class="audio__container-name">Иван Иванович</div>
                  <div class="audio__container-age">99 лет</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-xs-12">
                <video poster="#" controls>
                  <source src="#" type="video/mp4">
                </video>
                <div class="audio__container-name">Иван Иванович</div>
                <div class="audio__container-age">99 лет</div>
              </div>
              <div class="col-lg-4 col-xs-12 mobHide">
                <video poster="#" controls>
                  <source src="#" type="video/mp4">
                </video>
                <div class="audio__container-name">Иван Иванович</div>
                <div class="audio__container-age">99 лет</div>
              </div>
              <div class="col-lg-4 col-xs-12 mobHide">
                <video poster="#" controls>
                  <source src="#" type="video/mp4">
                </video>
                <div class="audio__container-name">Иван Иванович</div>
                <div class="audio__container-age">99 лет</div>
              </div>
            </div> -->
          </div>
        </section>
        
        <section class="main-block" id="zakaz">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-4 col-xs-12">
                  <div class="clear"></div>
                  <div class="mb-form-block">
                      <div class="mb-form-block__img mobHide"><img src="img/mb-img.png" alt="Серум"></div>
                      <div class="mb-form-block__form" id="mob-zakaz">
                        <div class="mob-popup_img insHide"><img src="img/mob-popup-form-img.png" alt=""></div>
                        <div class="mb-form-block__form-exp mobHide">
                          <span>Мультикомплекс </span>
                          <span>экстраординарных масел</span>
                        </div>
                        <div class="mb-form-block__form-top">
                  <b>Закажите</b> прямо сейчас и получите SERUM за <span class="black"><span class="displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span> <span class="displayCurrentCurrenct">₸</span></span>
                </div>
                      <div class="mb-form-block__form-bottom">
                        <div class="mb-form-block__form-timerTitle">Торопитесь, до конца акции осталось:</div>
                        <div class="timer"></div>
                        <div class="mb-form-block__form-priceBlock">
                          <div class="mb-form-block__form-priceBlock-left">
                            <span class="displayCurrentPriceNoCyr formPrice displayCurrentPriceNoCyr">990&nbsp;*</span><span class="si"></span>
                            <span class="displayCurrentCurrency formPriceCur displayCurrentCurrency">₸</span>
                          </div>
                          <div class="mb-form-block__form-priceBlock-right">
                            <div class="xyesto">вместо</div>
                            <span class="displayPrevPriceNoCyr formOldPrice displayPrevPriceNoCyr">9900</span>
                            <span class="displayCurrentCurrency formOldPriceCur displayCurrentCurrency">₸</span>
                          </div>
                        </div>
                        <form action="order_ru.php" method="post" method="POST"  action="order_ru.php" class="mainForm orderFormWrapper">
                          <div class="form-input">
                            <select name="country" class="orderFormWrapperCountry"></select>
                          </div>
                          <div class="form-input">
                            <input type="text" name="name" placeholder="Светлана Иванова">
                          </div>
                          <div class="form-input">
                            <input type="text" name="phone" placeholder="+7 495 784 62 73">
                          </div>
                          <button class="form-button" type="submit">Остановить старение</button>
                          <script>$(document).ready(function(){$(".orderFormWrapperCountry").change(function(){$(".zprce").val(window.allPrices[$(this).val()].cost);});});</script><input type="hidden" class="zprce" name="price" value="0"></form>
                      </div>
                    </div>
                    <div class="mb-form-block__form-product mobHide"></div>
                    <div class="mobBuyersData">
                      <p class="priCur">* За одну порцию</p>
                      <p>За 1.06.2020 заказано</p>
                      <p>1 491 упаковок <span class="insHide">Серум</span></p>
                    </div>
                  </div>
              </div>

            </div>
          </div>
        </section>


        <footer>
          <noindex class="FOOTER_INFO">BOMBOFFERS LP<br>Company number SL029947, 272 Bath Street, Glasgow, Scotland, G2 4JR</noindex>
        </footer>
      </div>
    <script src="js/plyr.min.js"></script>
    <script src="js/flipclock.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
  <script src="widgets/jquery.inputmask.bundle.js"></script><script src="widgets/phone.js"></script><script src="widgets/langs.js"></script>

<script src='widgets/app.js'></script>
<script>window.allPrices={"KZ":{"userId":null,"countryId":4,"code":"KZ","title":"\u041a\u0430\u0437\u0430\u0445\u0441\u0442\u0430\u043d","cost":990,"price":null,"oldPrice":9900,"fakePrice":9900,"currency":"\u20b8                   ","country":"KZ","type":2},"MD":{"userId":null,"countryId":12,"code":"MD","title":"\u041c\u043e\u043b\u0434\u0430\u0432\u0438\u044f","cost":149,"price":null,"oldPrice":399,"fakePrice":399,"currency":"Lei                 ","country":"MD","type":2},"UZ":{"userId":null,"countryId":13,"code":"UZ","title":"\u0423\u0437\u0431\u0435\u043a\u0438\u0441\u0442\u0430\u043d","cost":130000,"price":null,"oldPrice":390000,"fakePrice":390000,"currency":"\u0441\u045e\u043c                 ","country":"UZ","type":2}}</script>
<script>window.pageType='landing'</script>




    <!-- vk counter -->
    <!-- //vk counter -->


<script>

</script>
 </body>
</html>
