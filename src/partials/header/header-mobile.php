<div class="header-mobile block-fixed">
    <div class="wrapper">
        <div class="d-flex align-items-center">
            <div class="header-mobile__burger-menu" data-control="menu-burger">
                <span class="header-mobile__burger--global header-mobile__burger-top"></span>
                <span class="header-mobile__burger--global header-mobile__burger-middle"></span>
                <span class="header-mobile__burger--global header-mobile__burger-bottom"></span>
            </div>

            <div class="header-mobile__logo">
                @@include('../element/logo.html')
            </div>
            <a href="<?php echo $link; ?>" class="header-mobile__where-buy header__list-link--where-buy" target="_blank">Где купить?</a>
            <?php if ( !empty($phone) ) :?>
                <div class="header-mobile__contact-item header-mobile__phone">
                    <a 
                        href="tel:<?php echo $phone; ?>" 
                        onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_phone', {'place': 'header-mobile'}); return true;"
                    >
                    </a>
                    <svg height="30" width="30">
                        <use xlink:href="#phone"></use>
                    </svg>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="wrapper">
        <ul class="header-mobile-menu list-reset" style="display: none;" data-control="menu">
            <?php foreach($aMenuLinks as $menuItem): ?>
            <li class="header-mobile__list-item">
                <a href="<?php echo $menuItem[1];?>" class="header-mobile__link link" onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_menu', {'name': '<?php echo $menuItem[0];?>', 'place': 'mobile-menu'}); return true;">
                    <?php echo $menuItem[0]?>
                </a>
            </li>
            <?php endforeach;?>      
        </ul>
    </div>
</div>
