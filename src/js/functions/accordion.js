// document.addEventListener('DOMContentLoaded', () => {

// 	if (document.querySelectorAll('.accordions')) {
// 		const accordionss = document.querySelectorAll('.accordions');

// 		accordionss.forEach(el => {
// 			el.addEventListener('click', (e) => {
// 				e.preventDefault();
// 				const self = e.currentTarget;
// 				const control = self.querySelector('.accordions__control');
// 				const content = self.querySelector('.accordions__content');
	
// 				self.classList.toggle('open');
	
// 				// если открыт аккордеон
// 				if (self.classList.contains('open')) {
// 					control.setAttribute('aria-expanded', true);
// 					content.setAttribute('aria-hidden', false);
// 					content.style.maxHeight = content.scrollHeight + 'px';
// 				} else {
// 					control.setAttribute('aria-expanded', false);
// 					content.setAttribute('aria-hidden', true);
// 					content.style.maxHeight = null;
// 				}
// 			});
// 		});
// 	}
	
// });


document.addEventListener('DOMContentLoaded', () => {

	if (document.querySelectorAll('.accordions')) {
		const accordionsControl = document.querySelectorAll('.accordions__control');

		accordionsControl.forEach(el => {
			el.addEventListener('click', (e) => {
				e.preventDefault();

				const self = e.currentTarget.parentNode;
				const control = self.querySelector('.accordions__control');
				const content = self.querySelector('.accordions__content');
	
				self.classList.toggle('open');
	
				// если открыт аккордеон
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