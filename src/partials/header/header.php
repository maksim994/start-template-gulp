<div class="header">
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-between">
            
            <div class="header__logo">
                <img src="./assets/img/logo.svg" alt="logo">
            </div>

            <div class="header__menu">
                <ul class="header__list list-reset d-flex align-items-center justify-content-between">
                    <?php foreach($aMenuLinks as $menuItem): ?>
                    <li class="header__list-item"><a href="<?php echo $menuItem[1];?>" class="header__list-link"><?php echo $menuItem[0]?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

            <div class="header__contact d-flex align-items-center">
                <?php if ( !empty($phone_site) || !empty($email_site) ) :?>
                <div class="d-flex flex-column align-items-end header__contact-inner">
                    <?php if ( !empty($phone_site) ) :?>
                        <a 
                            href="tel:<?php echo $phone_site; ?>" 
                            class="header__contact-link header__phone callibri_phone" 
                            onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_phone', {'place': 'header-no-scroll'}); return true;"
                        >
                            <?php echo $phone_site; ?>
                        </a>
                    <?php endif; ?>

                    <?php if ( !empty($email_site) ) :?>
                        <a 
                            href="mailto:<?php echo $email_site; ?>"
                            class="header__contact-link header__email"
                            onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_email', {'place': 'header-no-scroll'}); return true;"
                        >
                            <?php echo $email_site; ?>
                        </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <div class="header__btn">
                    <a 
                        href="#modal-callback" 
                        data-fancybox="" 
                        class="lk-btn--js btn"
                        data-description="@@btn-description"
                    >@@btn</a>
                </div>
            </div>
  
        </div>
    </div>
</div>
