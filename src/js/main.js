document.addEventListener("DOMContentLoaded", () => {
  $('.selection__select-btn.btn-square').on('click', function(){
    $('.selection__select-btn.btn-square').removeClass('active');
    $(this).addClass('active');

    $('.selection__select-btn.bnt-power').removeClass('active');
    $('.selection__select-btn.bnt-power[data-square="'+  $(this).attr('data-square') +'"]').addClass('active');

    $('.js-power').html('<b>' + $(this).attr('data-power') + '</b>');
    $('.js-square').html('<b>' + $(this).attr('data-square') + '</b>');
    $('.js-weight').text($(this).attr('data-weight'));
    $('.js-size').text($(this).attr('data-size'));
    $('.js-price').text($(this).attr('data-price'));

    $('.product__images picture source').attr('srcset', $(this).attr('images') + '.webp');
    $('.product__images picture img').attr('src', $(this).attr('images') + '.png' );
  })

  $('.selection__select-btn.bnt-power').on('click', function(){
    $('.selection__select-btn.bnt-power').removeClass('active');
    $(this).addClass('active');

    $('.selection__select-btn.btn-square').removeClass('active');
    $('.selection__select-btn.btn-square[data-power="'+  $(this).attr('data-power') +'"]').addClass('active');

    $('.js-power').html('<b>' + $(this).attr('data-power') + '</b>');
    $('.js-square').html('<b>' + $(this).attr('data-square') + '</b>');

    $('.js-weight').text($(this).attr('data-weight'));
    $('.js-size').text($(this).attr('data-size'));
    $('.js-price').text($(this).attr('data-price'));

    $('.product__images picture source').attr('srcset', $(this).attr('images') + '.webp');
    $('.product__images picture img').attr('src', $(this).attr('images') + '.png' );
  })

  $('.technologies__item').on('click', function(){
    // $('.technologies__item').removeClass('active');
    // $(this).addClass('active');

    $('.technologies__left picture').css('opacity', 0);
    $('.technologies__left picture[data-technologies-images='+  $(this).attr('data-technologies') +']').css('opacity', 1);
  })

  new Swiper(".design__slider", {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      991: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
  });

  new Swiper(".technologies-mobile__slider", {
    effect: "cards",
    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
})

document.addEventListener('DOMContentLoaded', () => {
	if (document.querySelectorAll('.accordions')) {
		const technologiesControl = document.querySelectorAll('.technologies__control');

    $('.technologies__control').on('click', function(){
      $('.technologies__item').removeClass('open');
      $('.technologies__content').css('maxHeight', '');

      $('.technologies__control').attr('aria-expanded', false);
      $('.technologies__content').attr('aria-hidden', true);
    })

		technologiesControl.forEach(el => {
			el.addEventListener('click', (e) => {
				e.preventDefault();
				const self = e.currentTarget.parentNode;
				const control = self.querySelector('.technologies__control');
				const content = self.querySelector('.technologies__content');
				self.classList.toggle('open');
	
				if (self.classList.contains('open')) {
					control.setAttribute('aria-expanded', true);
					content.setAttribute('aria-hidden', false);
					content.style.maxHeight = content.scrollHeight + 'px';
				} else {
					control.setAttribute('aria-expanded', false);
					content.setAttribute('aria-hidden', true);
					content.style.maxHeight = null;
				}
			});
		});
	}
});



document.addEventListener('DOMContentLoaded', () => {
	const accordions = document.querySelectorAll('.faq__item');
	accordions.forEach(el => {
		el.addEventListener('click', (e) => {
			const self = e.currentTarget;
			const control = el;
			const content = self.querySelector('.faq__text');
			self.classList.toggle('open');

			if (self.classList.contains('open')) {
				control.setAttribute('aria-expanded', true);
				content.setAttribute('aria-hidden', false);
				content.style.maxHeight = content.scrollHeight + 'px';
			} else {
				control.setAttribute('aria-expanded', false);
				content.setAttribute('aria-hidden', true);
				content.style.maxHeight = null;
			}
		});
	});
});


// Вопросы - ответы
document.addEventListener('DOMContentLoaded', () => {

  $(".faq__list .accordions").addClass('active');

  $('.faq__cat-list button').on('click', function(){
    $('.faq__cat-list button').removeClass('active');
    $(this).addClass('active');
    let btnActive = $(this).attr('data-name');
    faqFilter(btnActive);
    load();
  });

  load();

  $(".loadMorei").on('click', function (e) {
    e.preventDefault();
    $(".faq__list .accordions.active:hidden").slice(0, 5).slideDown(300);
    if ($(".faq__list .accordions.active:hidden").length == 0) {
      $(".loadMorei").hide('slow');
    }
  });
});

function load(){
  $(".faq__list .accordions.active").hide();

  if ( $(".faq__list .accordions.active").length < 5){
    $(".loadMorei").hide('slow');
  } else {
    $(".loadMorei").show('slow');
  }

  $(".faq__list .accordions.active").slice(0, 5).show();
};

function faqFilter(cat){
  $('.faq__list .accordions').each(function( index ) {
    let catItem = $(this).data('cat');

    $(this).addClass('active');

    if ( catItem.indexOf(cat) === -1) {
      $(this).removeClass('active');
    } else {
      $(this).addClass('active');
    }
  });
}




