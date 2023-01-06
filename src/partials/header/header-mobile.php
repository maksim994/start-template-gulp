<div class="header-mobile block-fixed is-fixed">
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-between">
            <div class="header-mobile__burger-menu" data-control="menu-burger">
                <span class="header-mobile__burger--global header-mobile__burger-top"></span>
                <span class="header-mobile__burger--global header-mobile__burger-middle"></span>
                <span class="header-mobile__burger--global header-mobile__burger-bottom"></span>
            </div>

            <div class="header-mobile__logo">
                <img src="./assets/img/logo.svg" alt="logo">
            </div>

            <div class="header-mobile__contact">
                <?php if ( !empty($phone_site) ) :?>
                    <div class="header-mobile__contact-item header-mobile__phone">
                        <a 
                            href="tel:<?php echo $phone_site; ?>" 
                            class="callibri_phone" 
                            onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_phone', {'place': 'header-mobile'}); return true;"
                        >
                        </a>
                        <svg height="30" width="30">
                            <use xlink:href="#phone"></use>
                        </svg>
                    </div>
                <?php endif; ?>
                <div class="header-mobile__contact-item  header-mobile__email">
                    <a 
                        class="lk-btn--js header-mobile__mail" 
                        href="#modal-callback" data-fancybox="" 
                        data-description="Оставить заявку (в шапке)
                    "></a>
                    <svg width="30" height="30" >
                        <use xlink:href="#mail"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <ul class="header-mobile-menu list-reset" style="display: none;" data-control="menu">
            <?php foreach($aMenuLinks as $menuItem): ?>
            <li class="header-mobile__list-item"><a href="<?php echo $menuItem[1];?>" class="header-mobile__link link"><?php echo $menuItem[0]?></a></li>
            <?php endforeach;?>      
        </ul>
    </div>
</div>
