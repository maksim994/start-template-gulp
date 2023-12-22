<section id="anchor-7" class="section advantages__section section-grey">

<div class="wrapper">
  <h2 class="section__title">Преимущества</h2>

  <div class="advantages__list">
    <?php foreach($advantages as $el): ?>
    <div class="advantages__item">
      <div class="advantages__top">
        <div class="advantages__icons">
          <svg height="60" width="60">
            <use xlink:href="#<?php echo $el['icons'];?>"></use>
          </svg>
        </div>
        <div class="advantages__title"><?php echo $el['title'];?></div>
      </div>
      <div class="advantages__text">
        <?php echo $el['text'];?>
      </div>
    </div>
    <?php endforeach;?>
  </div>
</div>

</section>

