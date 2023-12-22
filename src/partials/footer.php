<div class="footer">
  <div class="wrapper">
    <div class="footer__wrapper">
      <div class="footer__logo">
        @@include('./element/logo.html')
      </div>
        <ul class="footer__list list-reset">
          <?php foreach ($aMenuLinks as $menuItem){ ?>
          <li class="footer__list-item">
            <a href="<?php echo $menuItem[1];?>" class="footer__list-link <?php if($menuItem[2]) {echo $menuItem[2];} ?>" >
              <?php echo $menuItem[0]?>
            </a>
          </li>
          <?php } ?>
        </ul>


        <?php if (isset($phone)): ?>
          <div class="footer__phone">
            <a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
            <span>Техническая поддержка</span>
          </div>
        <?php endif; ?>
    </div>
  </div>
</div>