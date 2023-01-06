<footer-2 class="footer-2">
  <div class="wrapper footer-2__top-wrapper">
    <div class="footer-2__logo">
      <img src="./assets/img/logo.svg" alt="logo">

      <p class="footer-2__addres">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    </div>

    <ul class="footer-2__list list-reset">
      <?php foreach($aMenuLinks as $menuItem): ?>
      <li class="footer-2__list-item"><a href="<?php echo $menuItem[1];?>" class="footer-2__list-link"><?php echo $menuItem[0]?></a></li>
      <?php endforeach;?>
    </ul>

    <?php if ( !empty($phone_site) || !empty($email_site) ) :?>
      <div class="d-flex flex-column align-items-end footer-2__contact">
        <?php if ( !empty($phone_site) ) :?>
          <a 
            href="tel:<?php echo $phone_site; ?>" 
            class="footer-2__contact-link footer-2__phone callibri_phone" 
            onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_phone', {'place': 'footer-2'}); return true;"
          >
            <?php echo $phone_site; ?>
          </a>
        <?php endif; ?>

        <?php if ( !empty($email_site) ) :?>
          <a 
            href="mailto:<?php echo $email_site; ?>"
            class="footer-2__contact-link footer-2__email"
            onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_email', {'place': 'footer-2'}); return true;"
          >
            <?php echo $email_site; ?>
        </a>
        <?php endif; ?>
        <a href="#modal-callback" data-fancybox="" class="footer-2__btn lk-btn--js btn" data-description="@@btn-description">@@btn</a>
      </div>
    <?php endif; ?>
  </div>
</footer-2>