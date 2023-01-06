<footer-1 class="footer-1">
  <div class="footer-1__top">
    <div class="wrapper footer-1__top-wrapper">
      <div class="footer-1__logo">
        <img src="./assets/img/logo.svg" alt="logo">
      </div>

      <ul class="footer-1__list list-reset">
        <?php foreach($aMenuLinks as $menuItem): ?>
        <li class="footer-1__list-item"><a href="<?php echo $menuItem[1];?>" class="footer-1__list-link"><?php echo $menuItem[0]?></a></li>
        <?php endforeach;?>
      </ul>

      <?php if ( !empty($phone_site) || !empty($email_site) ) :?>
        <div class="d-flex flex-column align-items-end footer-1__contact">
          <?php if ( !empty($phone_site) ) :?>
            <a 
              href="tel:<?php echo $phone_site; ?>" 
              class="footer-1__contact-link footer-1__phone callibri_phone" 
              onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_phone', {'place': 'footer-1'}); return true;"
            >
              <?php echo $phone_site; ?>
            </a>
          <?php endif; ?>

          <?php if ( !empty($email_site) ) :?>
            <a 
              href="mailto:<?php echo $email_site; ?>"
              class="footer-1__contact-link footer-1__email"
              onclick="ym(<?php echo $ymCounter;?>, 'reachGoal', 'click_email', {'place': 'footer-1'}); return true;"
            >
              <?php echo $email_site; ?>
          </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="footer-1__bottom">
    <div class="wrapper">
      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, possimus.</p>
    </div>
  </div>
</footer-1>