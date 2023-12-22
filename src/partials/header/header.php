<div class="header">
    <div class="wrapper">
        <div class="header__wrapper">
            <div class="header__logo">
                @@include('../element/logo.html')
            </div>
            <ul class="header__list list-reset d-flex align-items-center justify-content-between">
                <?php foreach ($aMenuLinks as $menuItem){ ?>
                <li class="header__list-item">
                    <a href="<?php echo $menuItem[1];?>" class="header__list-link <?php if($menuItem[2]) {echo $menuItem[2];} ?>" >
                        <?php echo $menuItem[0]?>
                    </a>
                    </li>
                <?php } ?>
            </ul>

            <?php if (isset($phone)): ?>
                <div class="header__phone">
                    <a href="tel:<?php echo $phone;?>" class="header__phone-link"><?php echo $phone;?></a>
                    <a href="#modal-callback" class="header__form-link lk-btn--js" data-fancybox="" data-description="Заказать расчет">Получить консультацию</a>
                </div>
            <?php endif; ?>


        </div>
    </div>
</div>