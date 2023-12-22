<section id="anchor-1" class="section selection">
  <div class="wrapper">
    <h2 class="section__title">Выбери свой <span>Lamken</span></h2>
    <div class="">
      <div class="selection__top">
        <p>Выберите площадь отапливаемого помещения:</p>
        <div class="selection__select-btns">
          <?php foreach ($product_configurator as $key => $item): ?>
          <button 
            class="selection__select-btn btn-square <?php if ($key == 0) {echo 'active';} ?>" 
            data-power="<?php echo $item['data-power'];?>" 
            data-square="<?php echo $item['data-square'];?>" 
            data-size="<?php echo $item['data-size'];?>" 
            data-weight="<?php echo $item['data-weight'];?>"
            data-price="<?php echo $item['data-price'];?>"
            images="<?php echo $item['images'];?>"
          ><?php echo $item['text-square'];?></button>
          <?php endforeach; ?>
          <?php unset($key); ?>
        </div>
      </div>

      <div class="selection__top">
        <p>Подходящая мощность конвектора:</p>
        <div class="selection__select-btns">
          <?php foreach ($product_configurator as $key => $item): ?>
            <button 
              class="selection__select-btn bnt-power <?php if ($key == 0) {echo 'active';} ?>" 
              data-power="<?php echo $item['data-power'];?>" 
              data-square="<?php echo $item['data-square'];?>" 
              data-size="<?php echo $item['data-size'];?>" 
              data-weight="<?php echo $item['data-weight'];?>"
              data-price="<?php echo $item['data-price'];?>"
              images="<?php echo $item['images'];?>"
            ><?php echo $item['data-power'];?></button>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="product__inner">
      <div class="product__images">
        <picture>
          <source srcset="./assets/img/product-500.webp" type="image/webp">
          <img src="./assets/img/product-500.png" alt="Конвектор от Legrand серии Lamken" loading="lazy" class="product__images-detail"/>
        </picture>


        <img src="./assets/img/icons.png" class="product__images-icons" alt="">
        <!-- <svg height="60" width="60">
          <use xlink:href="#warranty"></use>
        </svg>  -->
      </div>
      <div class="product__specifications">

        <div class="product__specifications--title">Техническое характеристики:</div>

        <ul class="product__specifications--list">       
          <li>
            <span class="product__specifications--name">Площадь обогрева, м<sup>2</sup>, до </span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value js-square"><b>8</b></span>
          </li>
          <li>
            <span class="product__specifications--name">Мощность, Вт</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value js-power"><b>500</b></span>
          </li>
          <li>
            <span class="product__specifications--name">Нагревательный элемент</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value">Х-образный монолитный</span>
          </li>
          <li>
            <span class="product__specifications--name">Режим &laquo;Антизамерзание&raquo;</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value">Да</span>
          </li>
          <li>
            <span class="product__specifications--name">Количество режимов работы</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value">6</span>
          </li>
          <li>
            <span class="product__specifications--name">Тип термостата</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value">Механический</span>
          </li>
          <li>
            <span class="product__specifications--name">Защита от перегрева</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value">Да</span>
          </li>
          <li>
            <span class="product__specifications--name">Длина кабеля, м</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value">1.8</span>
          </li>
          <li>
            <span class="product__specifications--name">Размеры (ШхГхВ), см</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value js-size">585x389x85</span>
          </li>
          <li>
            <span class="product__specifications--name">Вес, кг</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value js-weight">3.6</span>
          </li>
          <li>
            <span class="product__specifications--name">Цвет</span>
            <span class="product__specifications--dots"></span>
            <span class="product__specifications--value">Белый</span>
          </li>  
        </ul>

      </div>
      <div class="product__info">
        <div class="product__info-inner">
          <div class="product__document">
            <div class="product__specifications--title">Документация:</div>

            <a href="./assets/files/Инструкция_электрические_конвекторы_Lamken_230502_230506_230542.pdf" download="Инструкция электрические конвекторы Lamken.pdf">
              <svg height="30" width="30">
                <use xlink:href="#pdf"></use>
              </svg> 
              <span>Руководство по&nbsp;эксплуатации</span>
            </a>

            <a href="./assets/files/TC-B30875_23.pdf" download="TC-B30875 23.pdf">
              <svg height="30" width="30">
                <use xlink:href="#pdf"></use>
              </svg> 
              <span>Сертификат соответствия</span>
            </a>
          </div>
        </div>
        <div class="product__info-inner">
          <div class="product__alert">
            <svg height="30" width="30">
              <use xlink:href="#warning"></use>
            </svg> 
            <p>Ножки не&nbsp;входят в&nbsp;комплект и&nbsp;продаются отдельно, в&nbsp;комплект включено крепление на&nbsp;стену</p>
          </div>
          <div class="product__sale">
            <div class="product__btn">
              <a href="<?php echo $link;?>" target="_blank" class="btn">Купить</a>
            </div>
            <p class="product__price">Рекомендованная розничная цена с НДС: <span class="js-price">4335</span>  руб.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>