<section id="anchor-5" class="faq__section section">
  <div class="wrapper">
    <div class="section__top">
      <h2 class="section__title">Всегда готовы помочь</h2>
      <p>Скорее всего нам уже задавали вопрос, который вас интересует.</p>
    </div>

    <div class="faq__cat-list">
      <?php foreach($cat as $key => $el): ?>
        <button data-name="<?php echo $el;?>" class="faq__cat-item <?php echo $key == 0 ? 'active': ''; ?>"><?php echo $el;?></button>
      <?php endforeach; ?>
    </div>


    <ul class="faq__list accordions__list">
      <?php foreach($faqArr as $item): ?> 
      <li class="accordions" data-cat="<?php echo implode(",", $item['cat']);?>">
        <button class="accordions__control">
          <span class="faq__title accordions__title"><?php echo $item['title'];?></span>
          <span class="accordions__icon"></span>
        </button>
        <div class="faq__content accordions__content">
          <?php echo $item['text'];?>
        </div>
      </li>
      <?php endforeach; ?>

		</ul>
        <div class="loadMorei__wrapper">
        <button class="loadMorei">Показать еще</a>
        </div>
    


  </div>
</section>